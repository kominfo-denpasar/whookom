<?php

namespace App\Http\Controllers;
use Ichtrojan\Otp\Otp;

use App\Models\Masyarakat;
use App\Models\dasshasil;

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
		if(Session::get('mas_id') && Session::get('warning')) {
			return view('front.survei_reg', ['warning' => Session::get('warning'), 'mas_id' => Session::get('mas_id')]);
		} else {
			return redirect()->route('front.survei-intro');
		}
	}

	/**
	 * Halaman pengisian survei DASS-21.
	 *
	 * @return \Illuminate\Contracts\Support\Renderable
	 */
	public function surveiDass()
	{
		if(Session::get('mas_id') && Session::get('warning')) {
			// ambil data pertanyaan dari database
			$dass = DB::table('dass_pertanyaans')->get();
			$no = 1;

			//ambil data masyarakat
			// $masyarakat = Masyarakat::select('nama', 'id')->where('id', Session::get('mas_id'))->first();

			// cek jika sudah pernah mengisi dass
			$dasshasil = dasshasil::latest()
				->take(3)
				->select('created_at','id')
				->where('mas_id', Session::get('mas_id'))
				->get();

			return view('front.survei_dass', compact('dass', 'no', 'dasshasil'))
			->with([
				'warning' => Session::get('warning'), 
				'mas_id' => Session::get('mas_id')
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
				'mas_id' => $masyarakat->id
			]);
		} else {
			return redirect()->route('front.survei-reg')->with([
				'warning' => 'Silahkan mengisi data registrasi di bawah ini untuk melanjutkan!',
				'mas_id' => $request->nik,
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
			'nik'     => 'required|numeric|min:10',
			'nama'   => 'required|max:100',
			'jk'   => 'required',
			'tgl_lahir'   => 'required',
			'email'   => 'required',
			'hp'   => 'required'
		]);

		//create data
		$masyarakat = Masyarakat::create([
			'nik'     	=> $request->nik,
			'nama'   	=> $request->nama,
			'jk'     	=> $request->jk,
			'tgl_lahir'	=> $request->tgl_lahir,
			'email'     => $request->email,
			'hp'		=> $request->hp
		]);

		//redirect to dass21
		return redirect()->route('front.survei-dass-21')->with([
			'warning' => 'Berhasil menyimpan data!',
			'mas_id' => $masyarakat->id
		]);
	}

	/**
	 * simpan data pendaftaran awal
	 *
	 * @param Request $request
	 * @return void
	 */
	public function storeDass(Request $request)
	{
		// dd($request->all());
		//validate form
		$this->validate($request, [
			// 'image'     => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
			'mas_id'     => 'required|numeric'
		]);

		//ambil data id & hp masyarakat
		$masyarakat = Masyarakat::select('nama', 'id', 'hp')->where('id', $request->mas_id)->first();

		//jumlahkan nilai array
		$sum_d = array_sum($request->nilai_d);
		$sum_a = array_sum($request->nilai_a);
		$sum_s = array_sum($request->nilai_s);

		//upload image
		// $image = $request->file('image');
		// $image->storeAs('public/posts', $image->hashName());

		// depresi
		if ($sum_d <= 4) {
			$hasil_d = 'Normal';
		} elseif ($sum_d >= 5 && $sum_d <= 6) {
			$hasil_d = 'Mild';
		} elseif ($sum_d >= 7 && $sum_d <= 10) {
			$hasil_d = 'Moderate';
		} elseif ($sum_d >= 11 && $sum_d <= 13) {
			$hasil_d = 'Severe';
		} elseif ($sum_d >= 14) {
			$hasil_d = 'Extreme Severe';
		}

		// anxiety
		if ($sum_a <= 3) {
			$hasil_a = 'Normal';
		} elseif ($sum_a >= 4 && $sum_a <= 5) {
			$hasil_a = 'Mild';
		} elseif ($sum_a >= 6 && $sum_a <= 7) {
			$hasil_a = 'Moderate';
		} elseif ($sum_a >= 8 && $sum_a <= 9) {
			$hasil_a = 'Severe';
		} elseif ($sum_a >= 10) {
			$hasil_a = 'Extreme Severe';
		}

		// stress
		if ($sum_s <= 7) {
			$hasil_s = 'Normal';
		} elseif ($sum_s >= 8 && $sum_s <= 9) {
			$hasil_s = 'Mild';
		} elseif ($sum_s >= 10 && $sum_s <= 12) {
			$hasil_s = 'Moderate';
		} elseif ($sum_s >= 13 && $sum_s <= 16) {
			$hasil_s = 'Severe';
		} elseif ($sum_s >= 17) {
			$hasil_s = 'Extreme Severe';
		}

		$hasil = "Depresi: $hasil_d\nAnxiety: $hasil_a\nStress: $hasil_s";

		if($hasil_d == 'Normal' && $hasil_a == 'Normal' && $hasil_s == 'Normal') {
			$hasil_text = "Hasil tes Anda menunjukkan kondisi kesehatan mental yang berada dalam batas normal. Ini artinya, Anda mungkin sudah cukup baik dalam mengelola stres, kecemasan, atau suasana hati. Namun, kesehatan mental tetap penting untuk dijaga, lho! Jika Anda ingin berdiskusi atau memperdalam pemahaman tentang diri, klik tombol di bawah untuk menjadwalkan konseling gratis. Kami siap mendengarkan!";
			$hasil_status = 'Normal';
		} elseif($hasil_d == 'Extreme Severe' || $hasil_a == 'Extreme Severe' || $hasil_s == 'Extreme Severe') {
			$hasil_text = "Anda sepertinya sudah sangat gila. Anda mungkin merasa sangat tertekan, cemas, atau sedih. Kondisi ini bisa sangat mengganggu aktivitas sehari-hari dan kualitas hidup Anda. Jangan biarkan kondisi ini berlarut-larut. Klik tombol di bawah untuk konseling gratis dan izinkan kami membantu Anda melewati ini.";
			$hasil_status = 'Extreme Severe';
		} elseif($hasil_d == 'Severe' || $hasil_a == 'Severe' || $hasil_s == 'Severe') {
			$hasil_text = "Hasil tes menunjukkan gejala yang cukup serius. Anda mungkin merasa stres yang sangat berat, sering diliputi kecemasan, atau suasana hati yang begitu rendah hingga mengganggu aktivitas sehari-hari. Kami paham ini tidak mudah, tapi Anda tidak perlu menghadapi ini sendirian. Silahkan tombol di bawah untuk konseling gratis dan izinkan kami membantu Anda melewati ini.";
			$hasil_status = 'Severe';
		} elseif($hasil_d == 'Moderate' || $hasil_a == 'Moderate' || $hasil_s == 'Moderate') {
			$hasil_text = "Hasil tes menunjukkan adanya gejala sedang. Ini mungkin berarti Anda sering merasa lelah secara emosional, khawatir yang berlebihan, atau merasa sedih tanpa alasan yang jelas. Kondisi ini penting untuk diperhatikan agar tidak menjadi lebih berat. Yuk, cari cara untuk kembali seimbang. Klik tombol di bawah untuk konseling gratis, kami ada untuk mendukung Anda!";
			$hasil_status = 'Moderate';
		} elseif($hasil_d == 'Mild' || $hasil_a == 'Mild' || $hasil_s == 'Mild') {
			$hasil_text = "Hasil tes menunjukkan adanya gejala ringan. Mungkin Anda sedang merasa sedikit lelah, stres, atau cemas, tapi masih bisa diatasi. Meski begitu, ada baiknya untuk mulai memahami kondisi ini lebih dalam sebelum berkembang lebih jauh. Silahkan klik tombol di bawah untuk konseling gratis dan obrolkan lebih lanjut dengan psikolog kami.";
			$hasil_status = 'Mild';
		}

		//create data hasil dass
		dasshasil::create([
			'mas_id'     	=> $masyarakat->id,
			'nilai_d'   	=> $sum_d,
			'nilai_s'     	=> $sum_s,
			'nilai_a'		=> $sum_a,
			'hasil_akhir'	=> $hasil
		]);
		
		// kirim whatsapp
		$data = [
			'phone' => '0'.$masyarakat->hp,
			'message' => "Halo $masyarakat->nama, berikut adalah hasil survei Anda:\n\n$hasil_text\n\nTerima kasih telah mengikuti survei ini.\n\nJika Anda ingin melakukan konseling, dapat mengklik link berikut: ".route('front.konseling-store-reg', $masyarakat->id)."\n\nSalam, Denpasar Menyama Bagia"
		];
		
		// script
		$this->notif_wa($data);

		//redirect
		return redirect()->route('front.survei-hasil')->with([
			'success' => 'Berhasil menyimpan data!',
			'hasil' => $hasil_text,
			'mas_id' => $masyarakat->id,
			'status' => $hasil_status,
		]);
	}

	/**
	 * Halaman hasil survei DASS-21.
	 *
	 * @return \Illuminate\Contracts\Support\Renderable
	 */
	public function surveiHasil()
	{
		if(Session::get('success') && Session::get('hasil')) {
			return view('front.survei_hasil')
				->with([
					'success' => Session::get('success'), 
					'hasil' => Session::get('hasil')
				]);
		} else {
			return redirect()->route('front.survei-intro');
		}
	}

	/**
	 * Halaman registrasi konseling.
	 *
	 * @return \Illuminate\Contracts\Support\Renderable
	 */
	public function konselingReg()
	{
		if(Session::get('success') && Session::get('mas_id')) {
			return view('front.konseling_reg', [
				'mas_id' => Session::get('mas_id'), 
				'success' => Session::get('success')]
			);
		} else {
			return redirect()->route('front.survei-intro');
		}
	}

	/**
	 * Proses registrasi konseling.
	 *
	 * @return \Illuminate\Contracts\Support\Renderable
	 */
	public function konselingStoreReg($id)
	{
		// ambil data masyarakat dan cek apakah belum terverifikasi
		$masyarakat = Masyarakat::select('id', 'nama', 'hp')
			->where([
				'id' => $id
			])
			->first();

		// generate otp
		$otp = (new Otp)->generate($masyarakat->id, 'numeric', 6, 15);

		// dd($otp);

		// kirim whatsapp
		$data = [
			'phone' => '0'.$masyarakat->hp,
			'message' => "Halo $masyarakat->nama, berikut adalah kode OTP Anda.\n\nKode: $otp->token \n\nSilahkan input kode pada field yang sudah disediakan pada website. Mohon tidak menyebarkan kode ini kepada orang lain. Kode ini hanya berlaku selama 15 menit.\n\nSalam, Denpasar Menyama Bagia"
		];
		
		// script
		$this->notif_wa($data);

		return redirect()->route('front.konseling-reg')
			->with([
				'success' => 'Kode OTP berhasil dikirimkan!',
				'mas_id' => $masyarakat->id
			]);
	}

	/**
	 * validasi otp
	 *
	 * @return \Illuminate\Contracts\Support\Renderable
	 */
	public function validasiOtp(Request $request)
	{
		//ambil data masyarakat
		// $masyarakat = Masyarakat::where('id', $request->mas_id)
		// 	->select('id')
		// 	->first();

		//cek otp
		$otp = (new Otp)->validate($request->mas_id, $request->otp);

		if ($otp->status) {
			// ganti status masyarakat
			$masyarakat = Masyarakat::where('id', $request->mas_id)
				->update([
					'status' => '1'
				]);

			return redirect()->route('front.konseling-keluhan', $request->mas_id)
				->with([
					'keluhan' => true
				]);
		} else {
			// jika salah
			return redirect()->route('front.konseling-reg')->with([
				'success' => $otp->message,
				'mas_id' => $request->mas_id
			]);
		}
	}

	/**
	 * Halaman regis keluhan.
	 *
	 * @return \Illuminate\Contracts\Support\Renderable
	 */
	public function konselingKeluhan($id)
	{
		// cek apakah sudah verifikasi otp
		$masyarakat = Masyarakat::where('id', $id)
			->where('status', '1')
			->first();

		// if(Session::get('keluhan') && $masyarakat) {
			return view('front.konseling_keluhan', ['masyarakat' => $masyarakat]);
		// } else {
		// 	return redirect()->route('front.survei-intro');
		// }
	}

	/**
	 * Halaman regis jadwal.
	 *
	 * @return \Illuminate\Contracts\Support\Renderable
	 */
	public function konselingJadwal($id)
	{
		// cek apakah sudah verifikasi otp
		$masyarakat = Masyarakat::where('id', $id)
			->where('status', '1')
			->first();

		// if(Session::get('keluhan') && $masyarakat) {
			return view('front.konseling_jadwal', ['masyarakat' => $masyarakat]);
		// } else {
		// 	return redirect()->route('front.survei-intro');
		// }
	}

	/**
	 * Tes notif
	 *
	 * @return \Illuminate\Contracts\Support\Renderable
	 */
	public function testNotif()
	{
		// kirim whatsapp untuk user pemohon
		$data = [
			'phone' => '081238921686',
			'message' => "weee",
		];
		
		// script
		$this->notif_wa($data);
	}
}
