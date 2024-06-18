<template>
  <body class="bg-white-500">
    <div
      class="flex justify-start items-center mt-16 mb-0 md:mb-8 px-4 sm:px-6 lg:px-8"
    >
      <div
        class="bg-[#F8F9FB] p-8 rounded-lg shadow-md mx-0 md:mx-8 w-full border-[#75C2F6] border-4 border-opacity-30 flex items-center"
      >
        <div>
          <h1
            class="text-3xl md:text-4xl font-semibold mb-2 mr-auto text-with-stroke"
          >
            Konseling Bersama Healify
          </h1>
          <p class="text-gray-600 mb-2 text-base md:text-lg">
            Ceritakan masalahmu kepada psikolog profesional
          </p>
        </div>
        <button
          class="bg-[#F4D160] text-[#1D5D9B] font-semibold px-8 py-2 rounded-full ml-auto"
        >
        <router-link
            to="/Counselling_v2"
            >Jadwalkan</router-link
          >
        </button>
      </div>
    </div>

    <div class="bg-white mt-12 mb-0 md:mb-12">
      <div class="container mx-auto px-4">
        <div class="text-lg mb-4">
          <h2
            class="text-2xl md:text-4xl font-semibold text-[#1D5D9B] ml-4 md:ml-16"
          >
            Promo menarik
          </h2>
        </div>
        <!-- Tempat untuk gambar slide -->
        <div class="flex justify-center items-center">
          <!-- Untuk menambahkan gambar yang dapat di-slide, Anda dapat menggunakan kodingan HTML dan JavaScript yang lebih kompleks seperti carousel atau slider. Di sini, saya hanya menambahkan gambar placeholder untuk contoh saja. -->
          <img
            src="../../assets/Konsul/promo1.png"
            alt="Gambar Slide"
            class="rounded-lg shadow-md w-[1000px] h-auto"
          />
        </div>
      </div>
    </div>

    <div class="bg-white py-12">
      <div class="container mx-auto px-4">
        <div class="text-lg mb-6">
          <h2 class="text-4xl font-semibold text-[#1D5D9B] ml-4 md:ml-16">
            Pilih paket yang tepat untukmu
          </h2>
        </div>
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
  </body>
</template>

<script>
export default {
  name: "Counselling",
};
</script>

<style>
.linear-gradient-custom {
  background: linear-gradient(
    90deg,
    #7ba7e9 0%,
    #6082b6 50%,
    #53709c 75%,
    #455e83 100%
  );
}

.linear-gradient-custom-1 {
  background: linear-gradient(90deg, #6fd0ee 0%, #3f7788 100%);
}

.linear-gradient-custom-2 {
  background: linear-gradient(90deg, #f3d287 0%, #8d7a4e 100%);
}

.text-with-stroke {
  color: #1d5d9b;
  text-shadow: 0px 0px 0 #75c2f6, 2px 2px 0 #75c2f6;
}
</style>
