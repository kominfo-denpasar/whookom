@extends('front.layouts.app')

@section('content')

<section class="section main-section">

	<div class="max-w-2xl mx-auto px-4 py-12 sm:px-6">
		<article class="rounded-xl border border-gray-200 bg-white p-4 shadow-lg">
				<div class="flex items-center gap-4">
					<img
					alt=""
					src="https://img.freepik.com/free-vector/online-survey-analysis-electronic-data-collection-digital-research-tool-computerized-study-analyst-considering-feedback-results-analysing-info_335657-854.jpg?t=st=1737950194~exp=1737953794~hmac=17bfa0dd4b22961792ee8e41cf21cc263947a73a63e4ec8928fc4209207f6351&w=826"
					class=""
					/>
				<div>
				</div>
			</div>

			<div class="lg:p-8">
				<h2 class="text-2xl font-bold mb-6 text-center">Depression Anxiety and Stress Scale <br>(DASS-21)</h2>
				<form>
					<p class="mb-4">Silakan baca setiap pernyataan dan pilih angka 0, 1, 2, atau 3 yang menunjukkan seberapa banyak pernyataan tersebut berlaku untuk Anda selama seminggu terakhir. Tidak ada jawaban yang benar atau salah. Jangan menghabiskan terlalu banyak waktu pada pernyataan mana pun.</p>
					<hr>
					<div class="my-4">
						<label class="block text-gray-700 font-medium mb-2">1. Saya merasa diri saya mudah marah karena hal-hal sepele</label>
						<select class="w-full p-2 border border-gray-300 rounded-lg">
							<option value="0">0 - Tidak berlaku sama sekali</option>
							<option value="1">1 - Berlaku untuk saya sampai batas tertentu, atau beberapa waktu</option>
							<option value="2">2 - Berlaku untuk saya sampai batas yang cukup besar, atau sebagian besar waktu</option>
							<option value="3">3 - Berlaku untuk saya sangat banyak, atau hampir sepanjang waktu</option>
						</select>
					</div>
					<hr>
					<div class="my-4">
						<label class="block text-gray-700 font-medium mb-2">2. Saya merasa bibir saya sering kering.</label>
						<select class="w-full p-2 border border-gray-300 rounded-lg">
							<option value="0">0 - Tidak berlaku sama sekali</option>
							<option value="1">1 - Berlaku untuk saya sampai batas tertentu, atau beberapa waktu</option>
							<option value="2">2 - Berlaku untuk saya sampai batas yang cukup besar, atau sebagian besar waktu</option>
							<option value="3">3 - Berlaku untuk saya sangat banyak, atau hampir sepanjang waktu</option>
						</select>
					</div>
					<hr>
					<div class="my-4">
						<label class="block text-gray-700 font-medium mb-2">3. Saya tidak bisa merasakan perasaan positif sama sekali</label>
						<select class="w-full p-2 border border-gray-300 rounded-lg">
							<option value="0">0 - Tidak berlaku sama sekali</option>
							<option value="1">1 - Berlaku untuk saya sampai batas tertentu, atau beberapa waktu</option>
							<option value="2">2 - Berlaku untuk saya sampai batas yang cukup besar, atau sebagian besar waktu</option>
							<option value="3">3 - Berlaku untuk saya sangat banyak, atau hampir sepanjang waktu</option>
						</select>
					</div>
					<hr>
					<div class="my-4">
						<label class="block text-gray-700 font-medium mb-2">4. Saya mengalami kesulitan bernapas (misalnya, bernapas terlalu cepat, sesak napas tanpa adanya aktivitas fisik)</label>
						<select class="w-full p-2 border border-gray-300 rounded-lg">
							<option value="0">0 - Tidak berlaku sama sekali</option>
							<option value="1">1 - Berlaku untuk saya sampai batas tertentu, atau beberapa waktu</option>
							<option value="2">2 - Berlaku untuk saya sampai batas yang cukup besar, atau sebagian besar waktu</option>
							<option value="3">3 - Berlaku untuk saya sangat banyak, atau hampir sepanjang waktu</option>
						</select>
					</div>
					<hr>
					<div class="my-4">
						<label class="block text-gray-700 font-medium mb-2">5. Saya merasa sulit untuk memulai melakukan sesuatu</label>
						<select class="w-full p-2 border border-gray-300 rounded-lg">
							<option value="0">0 - Tidak berlaku sama sekali</option>
							<option value="1">1 - Berlaku untuk saya sampai batas tertentu, atau beberapa waktu</option>
							<option value="2">2 - Berlaku untuk saya sampai batas yang cukup besar, atau sebagian besar waktu</option>
							<option value="3">3 - Berlaku untuk saya sangat banyak, atau hampir sepanjang waktu</option>
						</select>
					</div>
					<hr>
					<div class="my-4">
						<label class="block text-gray-700 font-medium mb-2">6. Saya cenderung bereaksi berlebihan terhadap situasi</label>
						<select class="w-full p-2 border border-gray-300 rounded-lg">
							<option value="0">0 - Tidak berlaku sama sekali</option>
							<option value="1">1 - Berlaku untuk saya sampai batas tertentu, atau beberapa waktu</option>
							<option value="2">2 - Berlaku untuk saya sampai batas yang cukup besar, atau sebagian besar waktu</option>
							<option value="3">3 - Berlaku untuk saya sangat banyak, atau hampir sepanjang waktu</option>
						</select>
					</div>
					<hr>
					<div class="my-4">
						<label class="block text-gray-700 font-medium mb-2">7. Saya mengalami gemetar (misalnya, di tangan)</label>
						<select class="w-full p-2 border border-gray-300 rounded-lg">
							<option value="0">0 - Tidak berlaku sama sekali</option>
							<option value="1">1 - Berlaku untuk saya sampai batas tertentu, atau beberapa waktu</option>
							<option value="2">2 - Berlaku untuk saya sampai batas yang cukup besar, atau sebagian besar waktu</option>
							<option value="3">3 - Berlaku untuk saya sangat banyak, atau hampir sepanjang waktu</option>
						</select>
					</div>
					<hr>
					<div class="my-4">
						<label class="block text-gray-700 font-medium mb-2">8. Saya merasa menggunakan banyak energi saraf</label>
						<select class="w-full p-2 border border-gray-300 rounded-lg">
							<option value="0">0 - Tidak berlaku sama sekali</option>
							<option value="1">1 - Berlaku untuk saya sampai batas tertentu, atau beberapa waktu</option>
							<option value="2">2 - Berlaku untuk saya sampai batas yang cukup besar, atau sebagian besar waktu</option>
							<option value="3">3 - Berlaku untuk saya sangat banyak, atau hampir sepanjang waktu</option>
						</select>
					</div>
					<hr>
					<div class="my-4">
						<label class="block text-gray-700 font-medium mb-2">9. Saya khawatir tentang situasi di mana saya mungkin panik dan mempermalukan diri sendiri</label>
						<select class="w-full p-2 border border-gray-300 rounded-lg">
							<option value="0">0 - Tidak berlaku sama sekali</option>
							<option value="1">1 - Berlaku untuk saya sampai batas tertentu, atau beberapa waktu</option>
							<option value="2">2 - Berlaku untuk saya sampai batas yang cukup besar, atau sebagian besar waktu</option>
							<option value="3">3 - Berlaku untuk saya sangat banyak, atau hampir sepanjang waktu</option>
						</select>
					</div>
					<hr>
					<div class="my-4">
						<label class="block text-gray-700 font-medium mb-2">10. Saya merasa tidak ada yang bisa saya harapkan</label>
						<select class="w-full p-2 border border-gray-300 rounded-lg">
							<option value="0">0 - Tidak berlaku sama sekali</option>
							<option value="1">1 - Berlaku untuk saya sampai batas tertentu, atau beberapa waktu</option>
							<option value="2">2 - Berlaku untuk saya sampai batas yang cukup besar, atau sebagian besar waktu</option>
							<option value="3">3 - Berlaku untuk saya sangat banyak, atau hampir sepanjang waktu</option>
						</select>
					</div>
					<hr>
					<div class="my-4">
						<label class="block text-gray-700 font-medium mb-2">11. Saya merasa gelisah</label>
						<select class="w-full p-2 border border-gray-300 rounded-lg">
							<option value="0">0 - Tidak berlaku sama sekali</option>
							<option value="1">1 - Berlaku untuk saya sampai batas tertentu, atau beberapa waktu</option>
							<option value="2">2 - Berlaku untuk saya sampai batas yang cukup besar, atau sebagian besar waktu</option>
							<option value="3">3 - Berlaku untuk saya sangat banyak, atau hampir sepanjang waktu</option>
						</select>
					</div>
					<hr>
					<div class="my-4">
						<label class="block text-gray-700 font-medium mb-2">12. Saya merasa sulit untuk rileks</label>
						<select class="w-full p-2 border border-gray-300 rounded-lg">
							<option value="0">0 - Tidak berlaku sama sekali</option>
							<option value="1">1 - Berlaku untuk saya sampai batas tertentu, atau beberapa waktu</option>
							<option value="2">2 - Berlaku untuk saya sampai batas yang cukup besar, atau sebagian besar waktu</option>
							<option value="3">3 - Berlaku untuk saya sangat banyak, atau hampir sepanjang waktu</option>
						</select>
					</div>
					<hr>
					<div class="my-4">
						<label class="block text-gray-700 font-medium mb-2">13. Saya merasa sedih dan murung</label>
						<select class="w-full p-2 border border-gray-300 rounded-lg">
							<option value="0">0 - Tidak berlaku sama sekali</option>
							<option value="1">1 - Berlaku untuk saya sampai batas tertentu, atau beberapa waktu</option>
							<option value="2">2 - Berlaku untuk saya sampai batas yang cukup besar, atau sebagian besar waktu</option>
							<option value="3">3 - Berlaku untuk saya sangat banyak, atau hampir sepanjang waktu</option>
						</select>
					</div>
					<hr>
					<div class="my-4">
						<label class="block text-gray-700 font-medium mb-2">14. Saya tidak toleran terhadap apa pun yang menghalangi saya untuk melanjutkan apa yang saya lakukan</label>
						<select class="w-full p-2 border border-gray-300 rounded-lg">
							<option value="0">0 - Tidak berlaku sama sekali</option>
							<option value="1">1 - Berlaku untuk saya sampai batas tertentu, atau beberapa waktu</option>
							<option value="2">2 - Berlaku untuk saya sampai batas yang cukup besar, atau sebagian besar waktu</option>
							<option value="3">3 - Berlaku untuk saya sangat banyak, atau hampir sepanjang waktu</option>
						</select>
					</div>
					<hr>
					<div class="my-4">
						<label class="block text-gray-700 font-medium mb-2">15. Saya merasa hampir panik</label>
						<select class="w-full p-2 border border-gray-300 rounded-lg">
							<option value="0">0 - Tidak berlaku sama sekali</option>
							<option value="1">1 - Berlaku untuk saya sampai batas tertentu, atau beberapa waktu</option>
							<option value="2">2 - Berlaku untuk saya sampai batas yang cukup besar, atau sebagian besar waktu</option>
							<option value="3">3 - Berlaku untuk saya sangat banyak, atau hampir sepanjang waktu</option>
						</select>
					</div>
					<hr>
					<div class="my-4">
						<label class="block text-gray-700 font-medium mb-2">16. Saya tidak bisa merasa antusias tentang apa pun</label>
						<select class="w-full p-2 border border-gray-300 rounded-lg">
							<option value="0">0 - Tidak berlaku sama sekali</option>
							<option value="1">1 - Berlaku untuk saya sampai batas tertentu, atau beberapa waktu</option>
							<option value="2">2 - Berlaku untuk saya sampai batas yang cukup besar, atau sebagian besar waktu</option>
							<option value="3">3 - Berlaku untuk saya sangat banyak, atau hampir sepanjang waktu</option>
						</select>
					</div>
					<hr>
					<div class="my-4">
						<label class="block text-gray-700 font-medium mb-2">17. Saya merasa tidak berharga sebagai pribadi</label>
						<select class="w-full p-2 border border-gray-300 rounded-lg">
							<option value="0">0 - Tidak berlaku sama sekali</option>
							<option value="1">1 - Berlaku untuk saya sampai batas tertentu, atau beberapa waktu</option>
							<option value="2">2 - Berlaku untuk saya sampai batas yang cukup besar, atau sebagian besar waktu</option>
							<option value="3">3 - Berlaku untuk saya sangat banyak, atau hampir sepanjang waktu</option>
						</select>
					</div>
					<hr>
					<div class="my-4">
						<label class="block text-gray-700 font-medium mb-2">18. Saya merasa agak sensitif</label>
						<select class="w-full p-2 border border-gray-300 rounded-lg">
							<option value="0">0 - Tidak berlaku sama sekali</option>
							<option value="1">1 - Berlaku untuk saya sampai batas tertentu, atau beberapa waktu</option>
							<option value="2">2 - Berlaku untuk saya sampai batas yang cukup besar, atau sebagian besar waktu</option>
							<option value="3">3 - Berlaku untuk saya sangat banyak, atau hampir sepanjang waktu</option>
						</select>
					</div>
					<hr>
					<div class="my-4">
						<label class="block text-gray-700 font-medium mb-2">19. Saya menyadari detak jantung saya tanpa adanya aktivitas fisik (misalnya, merasa detak jantung meningkat, jantung melewatkan satu detak)</label>
						<select class="w-full p-2 border border-gray-300 rounded-lg">
							<option value="0">0 - Tidak berlaku sama sekali</option>
							<option value="1">1 - Berlaku untuk saya sampai batas tertentu, atau beberapa waktu</option>
							<option value="2">2 - Berlaku untuk saya sampai batas yang cukup besar, atau sebagian besar waktu</option>
							<option value="3">3 - Berlaku untuk saya sangat banyak, atau hampir sepanjang waktu</option>
						</select>
					</div>
					<hr>
					<div class="my-4">
						<label class="block text-gray-700 font-medium mb-2">20. Saya merasa takut tanpa alasan yang jelas</label>
						<select class="w-full p-2 border border-gray-300 rounded-lg">
							<option value="0">0 - Tidak berlaku sama sekali</option>
							<option value="1">1 - Berlaku untuk saya sampai batas tertentu, atau beberapa waktu</option>
							<option value="2">2 - Berlaku untuk saya sampai batas yang cukup besar, atau sebagian besar waktu</option>
							<option value="3">3 - Berlaku untuk saya sangat banyak, atau hampir sepanjang waktu</option>
						</select>
					</div>
					<hr>
					<div class="my-4">
						<label class="block text-gray-700 font-medium mb-2">21. Saya merasa hidup ini tidak berarti</label>
						<select class="w-full p-2 border border-gray-300 rounded-lg">
							<option value="0">0 - Tidak berlaku sama sekali</option>
							<option value="1">1 - Berlaku untuk saya sampai batas tertentu, atau beberapa waktu</option>
							<option value="2">2 - Berlaku untuk saya sampai batas yang cukup besar, atau sebagian besar waktu</option>
							<option value="3">3 - Berlaku untuk saya sangat banyak, atau hampir sepanjang waktu</option>
						</select>
					</div>
					<div class="text-center">
						<!-- Base -->
						<button type="submit" class="group relative inline-block focus:outline-none focus:ring">
							<span
								class="absolute inset-0 translate-x-1.5 translate-y-1.5 bg-yellow-300 transition-transform group-hover:translate-x-0 group-hover:translate-y-0"
							></span>

							<span
								class="relative inline-block border-2 border-current px-8 py-3 text-sm font-bold tracking-widest text-black group-active:text-opacity-75">
								Submit Jawaban
							</span>
						</button>
					</div>
				</form>
			</div>
		</article>

	</div>
</section>


@endsection