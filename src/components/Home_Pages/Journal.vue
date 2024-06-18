<template>
  <div class="container mx-auto px-8 sm:px-16 py-16">
    <!-- Kontainer untuk pilihan mood -->
    <div class="bg-blue-200 bg-opacity-60 rounded-lg shadow p-6 mb-8">
      <h1 class="text-xl font-semibold mb-4 text-center text-blue-800">
        Bagaimana perasaanmu hari ini?
      </h1>
      <div class="grid grid-cols-2 md:grid-cols-6 gap-4">
        <!-- Gembira -->
        <div class="mood-option flex flex-col items-center">
          <img
            src="../../assets/Jurnal/gembira.png"
            alt="Gembira"
            class="w-10 h-10"
          />
          <p>Gembira</p>
        </div>
        <!-- Tenang -->
        <div class="mood-option flex flex-col items-center">
          <img
            src="../../assets/Jurnal/tenang.png"
            alt="Tenang"
            class="w-10 h-10"
          />
          <p>Tenang</p>
        </div>
        <!-- Sedih -->
        <div class="mood-option flex flex-col items-center">
          <img
            src="../../assets/Jurnal/sedih.png"
            alt="Sedih"
            class="w-10 h-10"
          />
          <p>Sedih</p>
        </div>
        <!-- Marah -->
        <div class="mood-option flex flex-col items-center">
          <img
            src="../../assets/Jurnal/marah.png"
            alt="Marah"
            class="w-10 h-10"
          />
          <p>Marah</p>
        </div>
        <!-- Lelah -->
        <div class="mood-option flex flex-col items-center">
          <img
            src="../../assets/Jurnal/lelah.png"
            alt="Lelah"
            class="w-10 h-10"
          />
          <p>Lelah</p>
        </div>
        <div class="mood-option flex flex-col items-center">
          <img
            src="../../assets/Jurnal/biasa.png"
            alt="Lelah"
            class="w-10 h-10"
          />
          <p>biasa</p>
        </div>
      </div>
    </div>

    <div class="px-16 py-12">
      <!-- Menu Lihat Riwayat Jurnal -->
      <div
        class="flex flex-col sm:flex-row items-center mb-8 border-2 border-[#75C2F6] rounded-xl"
      >
        <div class="rounded-lg p-4 mr-4 md:mr-0">
          <img
            src="../../assets/Jurnal/riwayat.png"
            alt="Riwayat Jurnal"
            class="mr-0 md:mr-16 ml-0 md:ml-16 w-14 md:w-16"
          />
        </div>
        <div class="mr-2 md:mr-0">
          <h2 class="text-xl font-semibold mb-2 text-center md:text-left">
            Lihat Riwayat Jurnal
          </h2>
          <p class="text-center md:text-left">
            Daftar journal yang telah selesai kamu tulis
          </p>
        </div>
        <button
          class="bg-blue-500 text-white rounded-full px-6 py-4 mt-4 mr-3 md:mr-16 mb-4 md:mb-0 sm:mt-0 sm:ml-auto"
          data-ripple-light="true"
        >
          <router-link
            to="/Journal_v2"
            class="text-white transition duration-300 hover:text-gray-500"
            >&gt;</router-link
          >
        </button>
      </div>
    </div>

    <div class="px-8">
      <!-- Kontainer untuk "My Daily Jurnal" -->
      <div class="bg-[#8FD1F5] bg-opacity-20 rounded-lg shadow p-12 mb-8">
        <div class="flex justify-between mt-8">
          <div>
            <h2 class="text-2xl font-semibold mb-2">My Daily Jurnal</h2>
            <p>10 Halaman</p>
          </div>
          <div class="">
            <img
              src="../../assets/Jurnal/book.png"
              alt="book"
              class="w-16 mr-4"
            />
          </div>
        </div>
      </div>
    </div>

    <!-- Kontainer untuk Topik Jurnal -->
    <div class="bg-white rounded-lg p-4">
      <h2 class="text-3xl font-semibold mb-4">Topik Jurnal dari Healify</h2>
      <p>Pilih salah satu topik dan mulai menulis Journalmu</p>
      <!-- Pilihan Topik -->
      <div
        class="topic-option flex items-center mb-16 mt-8 border-2 border-[#75C2F6] rounded-xl p-8"
      >
        <img
          src="../../assets/Jurnal/1.png"
          alt="Kenali Diri Lebih Baik"
          class="mr-4 w-28 h-auto md:w-auto md:h-auto"
        />
        <div>
          <h3 class="text-xl font-semibold">Kenali Diri Lebih Baik</h3>
          <p>Curahkan segala perasaan yang kamu rasakan dalam diri</p>
        </div>
      </div>

      <div
        class="topic-option flex items-center mb-16 border-2 border-[#75C2F6] rounded-xl p-8"
      >
        <img
          src="../../assets/Jurnal/2.png"
          alt="Menjalin Relasi"
          class="mr-4 w-28 h-auto md:w-auto md:h-auto"
        />
        <div>
          <h3 class="text-xl font-semibold">Menjalin Relasi</h3>
          <p>
            Ceritakan setiap pengalaman berkesanmu dengan orang lain di sini
          </p>
        </div>
      </div>

      <div
        class="topic-option flex items-center mb-16 border-2 border-[#75C2F6] rounded-xl p-8"
      >
        <img
          src="../../assets/Jurnal/3.png"
          alt="Ceritakan Keseharian"
          class="mr-4 w-28 h-auto md:w-auto md:h-auto"
        />
        <div>
          <h3 class="text-xl font-semibold">Ceritakan Keseharian</h3>
          <p>
            Apa kabar? Bagikan kisah menarik yang terjadi dalam hidupmu hari
            ini!
          </p>
        </div>
      </div>

      <div
        class="topic-option flex items-center mb-16 border-2 border-[#75C2F6] rounded-xl p-8"
      >
        <img
          src="../../assets/Jurnal/4.png"
          alt="Tinggkatkan Potensi Diri"
          class="mmr-4 w-28 h-auto md:w-auto md:h-auto"
        />
        <div>
          <h3 class="text-xl font-semibold">Tinggkatkan Potensi Diri</h3>
          <p>
            Akan selalu ada ruang dan jalan untuk mengembangkan potensi dirimu
          </p>
        </div>
      </div>

      <div
        class="topic-option flex items-center mb-16 border-2 border-[#75C2F6] rounded-xl p-8"
      >
        <img
          src="../../assets/Jurnal/5.png"
          alt="Membangun Keberanian"
          class="mmr-4 w-28 h-auto md:w-auto md:h-auto"
        />
        <div>
          <h3 class="text-xl font-semibold">Membangun Keberanian</h3>
          <p>Terus melangkah dan percaya diri hadapi setiap tantangan</p>
        </div>
      </div>
    </div>
  </div>
</template>

<script>
export default {
  name: "Journal  ",
};
</script>
