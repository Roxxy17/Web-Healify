<template>
  <h1 class="mt-5 text-center text-3xl font-bold text-[#1D5D9B]">
    Hasil Tes Kesehatan Mental
  </h1>
  <div class="container shadow-md mt-5 m-auto p-9 bg-[#FBEEAC] rounded-lg">
    <div>
      <img
        class="float-left shadow-lg mr-4 bg-white p-3 rounded-lg"
        src="D:\My Project\Healify\src\assets\TidakBaik.png"
        alt=""
        width="70"
        height="70"
      />
      <h2 class="text-2xl font-bold text-[#1D5D9B]">
        Kesehatan mentalmu dalam
      </h2>
      <h2 class="text-1.5xl font-bold text-[#EB3223]">kondisi tidak baik</h2>
    </div>
  </div>
  <div class="container shadow-md mt-5 m-auto p-9 bg-[#FBEEAC] rounded-lg">
    <div>
      <p class="text-[#1D5D9B]">
        Hasil tes menunjukkan gejala permasalahan psikologis yang cukup berat.
        Hal ini mungkin sudah membuatmu kesulitan dalam aktivitas sehari-hari,
        seperti berkonsentrasi atau fokus.
      </p>
      <p class="text-[#1D5D9B] mt-3">
        Jangan khawatir, Psikolog dan konselor kami siap membantumu untuk
        meningkatkan kondisi kesehatan mentalmu. Yuk lihat rekomendasi sesi
        konseling dengan psikolog dan konselor Healify!
      </p>
      <p class="text-[#1D5D9B] mt-3">
        Untuk memantau kondisi kesehatan mentalmu, yuk isi tes secara berkala
        setiap 1-2 minggu ya!
      </p>
    </div>
  </div>
  <h1 class="mt-5 text-center text-3xl font-bold text-[#1D5D9B]">
    Rekomendasi Layanan Healify
  </h1>
  <div class="bg-white py-12">
    <div class="container mx-auto px-4">
      <div
        class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 gap-8 md:gap-12 lg:gap-16 justify-center px-4 md:px-16"
      >
        <div
          class="p-4 rounded-lg shadow-md border-[#75C2F6] border-4 border-opacity-30"
        >
          <h3
            class="text-2xl font-semibold px-2 py-1 rounded-lg text-white bg-gradient-to-r from-[#7BA7E9] to-[#455E83] text-center"
          >
            Instan
          </h3>
          <p class="font-semibold text-gray-600 mb-2 mt-4">RP. 50.000</p>
          <hr class="my-2 border-[#1D5D9B] mt-4 mb-4" />
          <p class="text-gray-600 text-left">
            Konsultasi secara online dengan psikolog yang tersedia dan tidak
            bisa menentukan waktu konsultasi.
          </p>
        </div>
        <div
          class="p-4 rounded-lg shadow-md border-[#75C2F6] border-4 border-opacity-30"
        >
          <h3
            class="text-2xl font-semibold px-2 py-1 rounded-lg text-white bg-gradient-to-r from-[#6FD0EE] to-[#3F7788] text-center"
          >
            Pro
          </h3>
          <p class="font-semibold text-gray-600 mb-2 mt-4">RP. 85.000</p>
          <hr class="my-2 border-[#1D5D9B] mt-4 mb-4" />
          <p class="text-gray-600 text-left">
            Konsultasi secara online dengan psikolog dan dapat membuat janji
            dengan psikolog untuk menentukan waktu yang diinginkan untuk
            konsultasi.
          </p>
        </div>
        <div
          class="p-4 rounded-lg shadow-md border-[#75C2F6] border-4 border-opacity-30"
        >
          <h3
            class="text-2xl font-semibold px-2 py-1 rounded-lg text-white bg-gradient-to-r from-[#F3D287] to-[#8D7A4E] text-center"
          >
            Offline
          </h3>
          <p class="font-semibold text-gray-600 mb-2 mt-4">RP. 150.000</p>
          <hr class="my-2 border-[#1D5D9B] mt-4 mb-4" />
          <p class="text-gray-600 text-left">
            Konsultasi secara offline atau secara tatap mata dan dapat membuat
            janji dengan psikolog untuk menentukan waktu yang diinginkan untuk
            konsultasi.
          </p>
        </div>
      </div>
    </div>
  </div>
</template>

<script>
export default {
  name: "Hasiljelek",
};
</script>