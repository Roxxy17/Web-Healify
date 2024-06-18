<template>
  <body class="bg-white">
    <div class="px-4 md:px-16 lg:px-32 xl:px-64 py-8 lg:py-16 mx-auto">
      <div
        class="container mx-auto px-4 sm:px-8 flex flex-col justify-center items-center bg-white rounded-lg shadow border-[#1D5D9B] border-4 border-opacity-30"
      >
        <div class="p-4 w-full">
          <div class="w-full px-4 flex flex-col md:flex-row mt-4 mb-4">
            <img
              src="../../assets/Konsul/Messaging.png"
              alt="Messaging"
              class="mr-4"
            />
            <p
              class="text-2xl text-center md:text-left md:text-4xl font-semibold text-[#1D5D9B] my-auto"
            >
              Konseling
            </p>
          </div>
          <hr class="my-8 border-[#1D5D9B]" />
        </div>

        <div class="w-full px-4 flex mt-4 mb-4">
          <img
            src="../../assets/Konsul/Sopifud.png"
            alt="Konselor"
            class="w-12 h-12 md:w-16 md:h-16 mr-4 rounded-full border border-gray-300"
          />

          <div>
            <p class="text-lg text-[#1D5D9B] font-semibold">Sophie, M.Psi</p>
            <p class="text-sm text-gray-500">Konselor</p>
          </div>
        </div>

        <div class="w-full px-4 text-[#1D5D9B]">
          <p class="text-sm mb-2">Metode Konseling : Pro</p>
          <p class="text-sm mb-2">Durasi Konseling : 50 menit</p>
          <p class="text-sm mb-2">Jumlah Sesi : 1 kali sesi</p>
          <hr class="my-8 border-[#1D5D9B]" />

          <div class="flex justify-between items-center my-4 w-full">
            <p class="text-sm text-[#1D5D9B]">Harga Konsultasi</p>
            <p>Rp.85.000</p>
          </div>
        </div>
      </div>
    </div>

    <div class="px-4 md:px-16 lg:px-32 xl:px-64 py-8 md:py-2 mx-auto">
      <div
        class="container mx-auto px-4 flex flex-col justify-center items-center"
      >
        <div class="p-4 w-full">
          <h2 class="text-xl font-semibold mb-2 text-[#1D5D9B]">
            Metode Pembayaran
          </h2>
          <hr class="my-8 border-[#1D5D9B]" />
        </div>

        <div class="w-full mt-4 mb-4">
          <h2 class="text-xl font-semibold mb-2">E-wallet</h2>
        </div>

        <table class="w-full">
          <tr>
            <td>
              <div class="flex items-center mb-4">
                <img
                  src="../../assets/Konsul/dana.png"
                  alt="Logo Dana"
                  class="w-12 md:w-16 mr-2"
                />
                Dana
              </div>

              <div class="flex items-center mb-4">
                <img
                  src="../../assets/Konsul/gopay.png"
                  alt="Logo Gopay"
                  class="w-12 md:w-16 mr-2"
                />
                Gopay
              </div>

              <div class="flex items-center mb-4">
                <img
                  src="../../assets/Konsul/shopeepay.png"
                  alt="Logo Shopeepay"
                  class="w-12 md:w-16 mr-2"
                />
                Shopeepay
              </div>
            </td>

            <td>
              <div class="text-right mb-8">
                <input
                  type="radio"
                  id="dana"
                  name="payment"
                  value="dana"
                  class="ml-2"
                />
              </div>

              <div class="text-right mb-8">
                <input
                  type="radio"
                  id="gopay"
                  name="payment"
                  value="gopay"
                  class="ml-2"
                />
              </div>

              <div class="text-right mb-8">
                <input
                  type="radio"
                  id="shopeepay"
                  name="payment"
                  value="shopeepay"
                  class="ml-2"
                />
              </div>
            </td>
          </tr>
        </table>

        <div class="p-4 w-full">
          <hr class="my-8 border-[#1D5D9B]" />
        </div>

        <div class="w-full mt-4 mb-4">
          <h2 class="text-xl font-semibold mb-2">Bank Transfer</h2>
        </div>

        <table class="w-full">
          <tr>
            <td>
              <div class="flex items-center mb-4">
                <img
                  src="../../assets/Konsul/bca.png"
                  alt="Logo BCA"
                  class="w-12 md:w-16 mr-2"
                />
                BCA
              </div>

              <div class="flex items-center mb-4">
                <img
                  src="../../assets/Konsul/bni.png"
                  alt="Logo BNI"
                  class="w-12 md:w-16 mr-2"
                />
                BNI
              </div>

              <div class="flex items-center mb-4">
                <img
                  src="../../assets/Konsul/bri.png"
                  alt="Logo BRI"
                  class="w-12 md:w-16 mr-2"
                />
                BRI
              </div>

              <div class="flex items-center mb-4">
                <img
                  src="../../assets/Konsul/mandiri.png"
                  alt="Logo Mandiri"
                  class="w-12 md:w-16 mr-2"
                />
                Mandiri
              </div>
            </td>

            <td>
              <div class="text-right mb-4">
                <input
                  type="radio"
                  id="bank_bca"
                  name="bank"
                  value="bca"
                  class="ml-2"
                />
              </div>

              <div class="text-right mb-4">
                <input
                  type="radio"
                  id="bank_bni"
                  name="bank"
                  value="bni"
                  class="ml-2"
                />
              </div>

              <div class="text-right mb-4">
                <input
                  type="radio"
                  id="bank_bri"
                  name="bank"
                  value="bri"
                  class="ml-2"
                />
              </div>

              <div class="text-right mb-4">
                <input
                  type="radio"
                  id="bank_mandiri"
                  name="bank"
                  value="mandiri"
                  class="ml-2"
                />
              </div>
            </td>
          </tr>
        </table>

        <div class="p-4 w-full">
          <hr class="my-8 border-[#1D5D9B]" />
        </div>

        <div class="flex items-center">
          <input type="checkbox" id="terms_condition" name="terms_condition" />
          <label for="terms_condition" class="ml-2 font-semibold"
            >Saya telah membaca dan menyetujui
            <a href="#" class="text-[#3DA4EA]">syarat dan ketentuan</a></label
          >
        </div>
      </div>

      <div class="flex justify-center items-center mb-10">
        <button
          class="bg-[#F4D160] text-[#1D5D9B] font-semibold px-16 md:px-32 py-2 rounded-full mt-10"
          onclick="window.location.href='#';"
        >
          Bayar
        </button>
      </div>
    </div>
  </body>
</template>

<script>
export default {
  name: "Counselling_v3",
};
</script>
