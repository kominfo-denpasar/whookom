<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Psikolog;
use App\Models\Konseling;
use App\Models\keluhan;

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
			$keluhan = keluhan::where(
				'psikolog_id', $this->getUser()->psikolog_id
				)
				->join('masyarakats', 'keluhans.mas_id', '=', 'masyarakats.token')
				->select('keluhans.*', 'masyarakats.nama', 'masyarakats.hp', 'masyarakats.token')
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
		return view('backend/konseling');
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
}
