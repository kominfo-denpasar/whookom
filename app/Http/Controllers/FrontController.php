<?php

namespace App\Http\Controllers;
use Ichtrojan\Otp\Otp;

use App\Models\Masyarakat;
use App\Models\Psikolog;
use App\Models\dasshasil;
use App\Models\keluhan;
use App\Models\jadwal;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Str;

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
		// jika sudah ada session token dan warning dari halaman intro maka lanjutkan ke halaman berikut
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
			'hp'     => 'required|numeric|min:8'
		]);

		//check hp
		$masyarakat = Masyarakat::where('hp', $request->hp)->first();

		if ($masyarakat) {
			//jika hp sudah ada 
			return redirect()->route('front.survei-dass-21')->with([
				'warning' => 'Anda sudah pernah mendaftar sebelumnya, silahkan melanjutkan untuk mengisi survei!',
				'mas_id' => $masyarakat->token
			]);
		} else {
			// jika belum maka melanjutkan ke halaman berikut serta generate id token
			$token = uniqid().Str::random(6);
			
			return redirect()->route('front.survei-reg')->with([
				'warning' => 'Silahkan mengisi data registrasi di bawah ini untuk melanjutkan!',
				'mas_id' => $token,
				'hp' => $request->hp
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
			'nama'   => 'required|max:100',
			'jk'   => 'required',
			'tgl_lahir'   => 'required',
			// 'email'   => 'required',
			'hp'   => 'required',
			'mas_id'   => 'required'
		]);

		//create data
		$masyarakat = Masyarakat::create([
			'nama'   	=> $request->nama,
			'jk'     	=> $request->jk,
			'tgl_lahir'	=> $request->tgl_lahir,
			// 'email'     => $request->email,
			'hp'		=> $request->hp,
			'token'		=> $request->mas_id
		]);

		//redirect to dass21
		return redirect()->route('front.survei-dass-21')->with([
			'warning' => 'Berhasil menyimpan data!',
			'mas_id' => $masyarakat->token
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
			'mas_id'     => 'required'
		]);

		//ambil data id token & hp masyarakat
		$masyarakat = Masyarakat::select('nama', 'token', 'hp')->where('token', $request->mas_id)->first();

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
			'mas_id'     	=> $masyarakat->token,
			'nilai_d'   	=> $sum_d,
			'nilai_s'     	=> $sum_s,
			'nilai_a'		=> $sum_a,
			'hasil_akhir'	=> $hasil
		]);
		
		// kirim whatsapp
		$data = [
			'phone' => '0'.$masyarakat->hp,
			'message' => "Halo $masyarakat->nama, berikut adalah hasil survei Anda:\n\n$hasil_text\n\nTerima kasih telah mengikuti survei ini.\n\nJika Anda ingin melakukan konseling, dapat mengklik link berikut: ".route('front.konseling-store-reg', $masyarakat->token)."\n\nSalam, Denpasar Menyama Bagia"
		];
		
		// script
		$this->notif_wa($data);

		//redirect
		return redirect()->route('front.survei-hasil')->with([
			'success' => 'Berhasil menyimpan data!',
			'hasil' => $hasil_text,
			'mas_id' => $masyarakat->token,
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
		$masyarakat = Masyarakat::select('token', 'nama', 'hp')
			->where([
				'token' => $id
			])
			->first();

		// generate otp
		$otp = (new Otp)->generate($masyarakat->token, 'numeric', 6, 15);

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
				'mas_id' => $masyarakat->token
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
		// dd($request->otp);

		//cek otp
		$otp = (new Otp)->validate($request->mas_id, $request->otp);

		if ($otp->status) {
			// ganti status masyarakat
			$masyarakat = Masyarakat::where('token', $request->mas_id)
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
		// cek apakah sudah verifikasi otp & sudah mengisi form keluhan
		$masyarakat = Masyarakat::join('keluhans', 'masyarakats.token', '=', 'keluhans.mas_id')
			->select('masyarakats.*', 'keluhans.keluhan')
			->where([
				'masyarakats.token' => $id,
				'masyarakats.status' => '1'
			])
			->first();
		if($masyarakat->keluhan != null) {
			// jika sudah mengisi keluhan & jadwal
			return redirect()->route('front.konseling-final', $id)->with([
				'mas_id' => $id,
				'jadwal' => true
			]);
		} elseif (Session::get('keluhan') && $masyarakat->keluhan == null) {
			return view('front.konseling_keluhan', ['masyarakat' => $masyarakat]);
		} else {
			return redirect()->route('front.survei-intro');
		}
	}

	/**
	 * Halaman regis jadwal.
	 *
	 * @return \Illuminate\Contracts\Support\Renderable
	 */
	public function konselingJadwal($id)
	{
		// cek apakah sudah verifikasi otp
		$masyarakat = Masyarakat::where('token', $id)
			->where('status', '1')
			->first();

		// cek jika sudah mengisi form keluhan
		$keluhan = keluhan::where('mas_id', $id)->first();

		if ($keluhan->psikolog_id != null) {
			// jika sudah mengisi keluhan & jadwal
			return redirect()->route('front.konseling-final', $id)->with([
				'mas_id' => $id,
				'jadwal' => true
			]);
		} elseif ($keluhan && $masyarakat) {
			// jika sudah mengisi keluhan tetapi belum mengisi jadwal

			// get data master psikolog
			$psikolog = Psikolog::get();

			return view('front.konseling_jadwal', [
				'masyarakat' => $masyarakat,
				'psikolog' => $psikolog
			]);
		} else {
			return redirect()->route('front.survei-intro');
		}
	}

	/**
	 * simpan data pendaftaran konseling bagian keluhan
	 *
	 * @param Request $request
	 * @return void
	 */
	public function konselingKeluhanStore(Request $request)
	{
		//validate form
		$this->validate($request, [
			'nik'   => 'required|numeric',
			'status_kawin'   => 'required',
			'pendidikan'   => 'required',
			'pekerjaan'   => 'required',
			'email'   => 'required',
			'kec_id'   => 'required',
			'desa_id'   => 'required',
			'alamat'   => 'required',
			
			'keluhan'   => 'required',
			'waktu_kapan'   => 'required',
			'nilai_mengganggu'   => 'required',

			'mas_id'   => 'required'
		]);

		//create data
		$masyarakat = Masyarakat::where(['token' => $request->mas_id])
		->update([
			'nama'   			=> $request->nama,
			'nik'     			=> $request->nik,
			'status_kawin'     	=> $request->status_kawin,
			'pendidikan'		=> $request->pendidikan,
			'pekerjaan'			=> $request->pekerjaan,
			'email'     		=> $request->email,
			'kec_id'   			=> $request->kec_id,
			'desa_id'     		=> $request->desa_id,
			'alamat'			=> $request->alamat
		]);

		// create data keluhan
		$keluhan = keluhan::create([
			'mas_id'     	=> $request->mas_id,
			'keluhan'		=> $request->keluhan,
			'waktu_kapan'	=> $request->waktu_kapan,
			'nilai_mengganggu'	=> $request->nilai_mengganggu
		]);

		//redirect to jadwal
		return redirect()->route('front.konseling-jadwal', $request->mas_id)->with([
			'mas_id' => $request->mas_id
		]);
	}

	/**
	 * Get data jadwal.
	 *
	 * @return \Illuminate\Contracts\Support\Renderable
	 */
	public function jadwalPsikolog($id)
	{
		// cek apakah sudah verifikasi otp
		$jadwal = jadwal::where('psikolog_id', $id)
			->get();

		return response()->json($jadwal);
	}

	/**
	 * simpan data pendaftaran konseling bagian jadwal
	 *
	 * @param Request $request
	 * @return void
	 */
	public function konselingJadwalStore(Request $request)
	{
		//validate form
		$this->validate($request, [
			'psikolog_id'   => 'required',
			'jadwal_id'   => 'required',
			'mas_id'   => 'required'
		]);

		// updata data keluhan
		$keluhan = keluhan::where(['mas_id' => $request->mas_id])
		->update([
			'psikolog_id'   	=> $request->psikolog_id,
			'jadwal_id'     	=> $request->jadwal_id
		]);

		//redirect to konseling final
		return redirect()->route('front.konseling-final', $request->mas_id)->with([
			'mas_id' => $request->mas_id,
			'jadwal' => true
		]);
	}

	/**
	 * Halaman final konseling.
	 *
	 * @return \Illuminate\Contracts\Support\Renderable
	 */
	public function konselingFinal($id)
	{
		//ambil data join masyarakat, keluhan dan jadwal
		$masyarakat = Masyarakat::join('keluhans', 'masyarakats.token', '=', 'keluhans.mas_id')
			->join('jadwals', 'keluhans.jadwal_id', '=', 'jadwals.id')
			->join('psikologs', 'keluhans.psikolog_id', '=', 'psikologs.id')
			->select(
				'masyarakats.nik', 
				'masyarakats.nama', 
				'masyarakats.hp', 
				'keluhans.keluhan', 
				'jadwals.tgl', 
				'jadwals.jam', 
				'psikologs.nama as psikolog',
				'psikologs.hp as psikolog_hp')
			->where('masyarakats.token', $id)
			->first();
		
		// dd($masyarakat);

		// kirim whatsapp untuk user pemohon & psikolog
		$data =[
			'phone' => '0'.$masyarakat->psikolog_hp,
			'message' => "Halo $masyarakat->psikolog, berikut adalah detail jadwal konseling Anda:\n\nTanggal: $masyarakat->tgl\nJam: $masyarakat->jam\nKlien: $masyarakat->nama\nNomor HP Klien: 0$masyarakat->hp\n\nSalam, Denpasar Menyama Bagia"
		];
		$this->notif_wa($data);

		$data = [
			'phone' => '0'.$masyarakat->hp,
			'message' => "Halo $masyarakat->nama, berikut adalah detail jadwal konseling Anda:\n\nTanggal: $masyarakat->tgl\nJam: $masyarakat->jam\nPsikolog: $masyarakat->psikolog\nNomor HP Psikolog: 0$masyarakat->psikolog_hp\n\nSampai jumpa nanti!\n\nSalam, Denpasar Menyama Bagia"
		];
		$this->notif_wa($data);

		// cek apakah sudah mengisi semua form konseling
		if(Session::get('jadwal') && $masyarakat) {
			return view('front.konseling_final', [
				'mas_id' => $id, 
				'masyarakat' => $masyarakat]
			);
		} else {
			return redirect()->route('front.survei-intro');
		}
	}

	/**
	 * Tes halaman
	 *
	 * @return \Illuminate\Contracts\Support\Renderable
	 */
	public function testHalaman()
	{
		// fungsi cek user menggunakan modul role
		$user = config('roles.models.defaultUser')::find(1);

		// attach role admin
		$user->attachRole(1);
		
		// cek apakah rolenya admin
		if ($user->isAdmin()) {
			echo "admin";
		} else {
			dd($user);
		}

		// return view('front.konseling_final');
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
