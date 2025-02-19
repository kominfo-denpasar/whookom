<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Masyarakat;
use App\Models\Psikolog;
use App\Models\Konseling;
use App\Models\keluhan;

use Carbon\Carbon;

class HomePsikologController extends Controller
{
	/**
	 * Create a new controller instance.
	 *
	 * @return void
	 */
	public function __construct()
	{
		$this->middleware('auth');
	}

	/**
	 * Show the application dashboard.
	 *
	 * @return \Illuminate\Contracts\Support\Renderable
	 */
	public function index()
	{
		// cek supaya hanya user psikolog yang dapat mengakses
		if($this->getUser()->hasRole('psikolog')) {
			
			// get data psikolog
			$psikolog = Psikolog::where('id', $this->getUser()->psikolog_id)->first();

			// get data keluhan masyarakat yang ditangani oleh psikolog
			$keluhan = keluhan::where('psikolog_id', $this->getUser()->psikolog_id)
				->join('masyarakats', 'keluhans.mas_id', '=', 'masyarakats.token')
				->select('keluhans.*', 'masyarakats.nama', 'masyarakats.hp')
				->orderBy('keluhans.created_at', 'desc')
				->get();
			
			// dd($keluhan);

			// data dashboard
			$dashboard = [
				'konseling_belum' => Konseling::where([
					'psikolog_id' => $this->getUser()->psikolog_id,
					'status' => 0
				])->count(),
				'konseling_on_progress' => Konseling::where([
					'psikolog_id' => $this->getUser()->psikolog_id,
					'status' => 1
				])->count(),
				'konseling_selesai' => Konseling::where([
					'psikolog_id' => $this->getUser()->psikolog_id,
					'status' => 2
				])->count(),
			];
			
			return view('backend/home_psikolog')->with([
				'dashboard' => $dashboard,
				'psikolog' => $psikolog,
				'keluhan' => $keluhan,
				'user' => $this->getUser()
			]);
		} else {
			return redirect()->route('home');
		}
	}

	/**
	 * Tampilkan detail data konseling. 
	 *
	 * @return \Illuminate\Contracts\Support\Renderable
	 */
	public function konseling($id)
	{
		// ambil data keluhan, konseling, dass dan detail masyarakat/klien
		$data = Masyarakat::where('keluhans.id', $id)
			->join('keluhans', 'masyarakats.token', '=', 'keluhans.mas_id')
			->join('konselings', 'masyarakats.token', '=', 'konselings.mas_id')
			->join('psikologs', 'konselings.psikolog_id', '=', 'psikologs.id')
			->join('dasshasils', 'masyarakats.token', '=', 'dasshasils.mas_id')
			->join('jadwals', 'keluhans.jadwal_id', '=', 'jadwals.id')
			->select(
				'masyarakats.nama',
				'masyarakats.nik',
				'masyarakats.hp',
				'masyarakats.pekerjaan',
				'masyarakats.pendidikan',
				'masyarakats.alamat', 
				'masyarakats.token', 
				'keluhans.*',
				'keluhans.id as keluhan_id', 
				'konselings.id as konseling_id',
				'konselings.hasil', 
				'psikologs.nama as psikolog_nama',
				'psikologs.id as psikolog_id', 
				'dasshasils.*',
				'jadwals.hari',
				'jadwals.jam as jamnya',
			)
			->first();

		if($data) {
			$riwayat_konseling = keluhan::where([
				'mas_id' => $data->token,
			])
				->where('id', '<>', $data->keluhan_id)
				->orderBy('created_at', 'desc')
				->get();
			// dd($riwayat_konseling);

			return view('backend/konseling')->with([
				'data' => $data,
				'riwayat_konseling' => $riwayat_konseling,
				'user' => $this->getUser()
			]);
		} else {
			return redirect()->route('home');
		}
			
	}

	/**
	 * Tampilkan laporan detail konseling. 
	 *
	 * @return \Illuminate\Contracts\Support\Renderable
	 */
	public function laporanDetail($id)
	{
		return view('backend/laporan_detail');
	}

	/**
	 * Tampilkan form evaluasi. 
	 *
	 * @return \Illuminate\Contracts\Support\Renderable
	 */
	public function formEvaluasi($id)
	{
		return view('backend/evaluasi');
	}

	/**
	 * store jadwal fix. 
	 *
	 * @return \Illuminate\Contracts\Support\Renderable
	 */
	public function storeJadwal(Request $request)
	{
		//validate form
		$this->validate($request, [
			'keluhan_id'     => 'required',
			'jadwal_alt2_tgl'     => 'required',
			'jadwal_alt2_jam'     => 'required'
		]);

		// dd($request->all());

		// update keluhan dan konseling
		$keluhan = keluhan::find($request->keluhan_id);
		$keluhan->jadwal_alt2_tgl = $request->jadwal_alt2_tgl;
		$keluhan->jadwal_alt2_jam = $request->jadwal_alt2_jam;
		$keluhan->status = 1;
		$keluhan->updated_at = Carbon::now();
		$keluhan->save(['timestamps' => FALSE]);

		$konseling = Konseling::where([
			'psikolog_id' => $this->getUser()->psikolog_id,
			'mas_id' => $keluhan->mas_id,
			'status' => 0
		])->latest()->first();
		$konseling->status = 1;
		$konseling->updated_at = Carbon::now();
		$konseling->save(['timestamps' => FALSE]);

		if($keluhan && $konseling) {
			return redirect()->route('backend.konseling', $request->keluhan_id)->with('success', 'Berhasil melakukan update');
		} else {
			return redirect()->route('backend.konseling', $request->keluhan_id)->with('error', 'Gagal melakukan update');
		}
	}
}
