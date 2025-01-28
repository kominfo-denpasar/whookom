<?php

namespace App\Http\Controllers;


use App\Models\Masyarakat;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Session;

class FrontController extends Controller
{
	/**
	 * Create a new controller instance.
	 *
	 * @return void
	 */
	public function __construct()
	{
		
	}

	/**
	 * Show the application dashboard.
	 *
	 * @return \Illuminate\Contracts\Support\Renderable
	 */
	public function index()
	{
		return view('front.home');
	}

	/**
	 * Halaman intro survei.
	 *
	 * @return \Illuminate\Contracts\Support\Renderable
	 */
	public function surveiIntro()
	{
		return view('front.survei_intro');
	}

	/**
	 * Halaman registrasi survei.
	 *
	 * @return \Illuminate\Contracts\Support\Renderable
	 */
	public function surveiReg()
	{
		if(Session::get('nik') && Session::get('warning')) {
			return view('front.survei_reg', ['warning' => Session::get('warning'), 'nik' => Session::get('nik')]);
		} else {
			return redirect()->route('front.survei-intro');
		}
	}

	/**
	 * Halaman survei DASS-21.
	 *
	 * @return \Illuminate\Contracts\Support\Renderable
	 */
	public function surveiDass(Request $request)
	{
		if(Session::get('nik') && Session::get('warning')) {
			// ambil data pertanyaan dari database
			$dass = DB::table('dass_pertanyaans')->get();
			$no = 1;
			// dd($dass);
			return view('front.survei_dass', compact('dass', 'no'))
				->with([
					'warning' => Session::get('warning'), 
					'nik' => Session::get('nik')
				]);
		} else {
			return redirect()->route('front.survei-intro');
		}

		
	}

	/**
	 * cek nik
	 *
	 * @param Request $request
	 * @return void
	 */
	public function cekNik(Request $request)
	{
		//validate form
		$this->validate($request, [
			'nik'     => 'required|numeric|min:10'
		]);

		//check nik
		$masyarakat = Masyarakat::where('nik', $request->nik)->first();

		if ($masyarakat) {
			//jika nik sudah ada 
			return redirect()->route('front.survei-dass-21')->with([
				'warning' => 'Anda sudah pernah mendaftar sebelumnya, silahkan melanjutkan untuk mengisi survei!',
				'nik' => $request->nik
			]);
		} else {
			return redirect()->route('front.survei-reg')->with([
				'warning' => 'Silahkan mengisi data registrasi di bawah ini untuk melanjutkan!',
				'nik' => $request->nik
			]);
		}
	}

	/**
	 * simpan data pendaftaran awal
	 *
	 * @param Request $request
	 * @return void
	 */
	public function storeReg(Request $request)
	{
		//validate form
		$this->validate($request, [
			// 'image'     => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
			'nik'     => 'required|numeric|min:10',
			'nama'   => 'required|max:100',
			'jk'   => 'required',
			'tgl_lahir'   => 'required',
			'email'   => 'required',
			'hp'   => 'required'
		]);

		// dd($request->all());

		//upload image
		// $image = $request->file('image');
		// $image->storeAs('public/posts', $image->hashName());

		//create data
		Masyarakat::create([
			// 'image'     => $image->hashName(),
			'nik'     => $request->nik,
			'nama'   => $request->nama,
			'jk'     => $request->jk,
			'tgl_lahir'     => $request->tgl_lahir,
			'email'     => $request->email,
			'hp'     => $request->hp
		]);

		//redirect to dass21
		return redirect()->route('front.survei-dass-21')->with(['success' => 'Berhasil menyimpan data!']);
	}
}
