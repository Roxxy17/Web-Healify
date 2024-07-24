<template>
  <body class="bg-white">
    <div class="px-4 md:px-16 lg:px-32 xl:px-64 py-8 lg:py-16 mx-auto">
      <div
        class="container mx-auto px-4 sm:px-8 flex flex-col justify-center items-center bg-white rounded-lg shadow border-[#1D5D9B] border-4 border-opacity-30"
      >
        <div class="w-full px-4 flex flex-col md:flex-row mt-4 mb-4">
          <img src="../../assets/Konsul/Messaging.png" alt="Messaging" class="mr-4" />
          <p class="text-2xl text-center md:text-left md:text-4xl font-semibold text-[#1D5D9B] my-auto">
            Konseling - {{ selectedPackage?.metode }} <!-- Menampilkan paket yang dipilih -->
          </p>
        </div>

        <div class="w-full px-4 flex mt-4 mb-4">
          <img :src="selectedDoctor?.gambar_dokter" :alt="selectedDoctor?.nama_dokter" class="w-12 h-12 md:w-16 md:h-16 mr-4 rounded-full border border-gray-300" />
          <div>
            <p class="text-lg text-[#1D5D9B] font-semibold">{{ selectedDoctor?.nama_dokter }}</p>
            <p class="text-sm text-gray-500">Konselor</p>
          </div>
        </div>

        <div class="w-full px-4 text-[#1D5D9B]">
          <p class="text-sm mb-2">Metode Konseling : {{ selectedPackage?.metode }}</p> <!-- Menampilkan paket yang dipilih -->
          <p class="text-sm mb-2">Durasi Konseling : {{ selectedPackage?.durasi}}</p>
          <p class="text-sm mb-2">Jumlah Sesi : {{ selectedPackage?.sesi}}</p>
          <hr class="my-8 border-[#1D5D9B]" />

          <div class="flex justify-between items-center my-4 w-full">
            <p class="text-sm text-[#1D5D9B]">Harga Konsultasi</p>
            <p v-if="selectedPackage && selectedPackage.metode === 'Instan'">Rp. {{ selectedPackage.harga }}</p>
            <p v-else-if="selectedPackage && selectedPackage.metode === 'Pro'">Rp. {{ selectedPackage.harga }}</p>
            <p v-else-if="selectedPackage && selectedPackage.metode === 'Offline'">Rp. {{ selectedPackage.harga }}</p>
          </div>
        </div>
      </div>
    </div>

    <div class="px-4 md:px-16 lg:px-32 xl:px-64 py-8 md:py-2 mx-auto">
      <div class="container mx-auto px-4 flex flex-col justify-center items-center">
        <div class="p-4 w-full">
          <h2 class="text-xl font-semibold mb-2 text-[#1D5D9B]">Metode Pembayaran</h2>
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
                  v-model="selectedPaymentMethod"
                  class="ml-2"
                />
              </div>

              <div class="text-right mb-8">
                <input
                  type="radio"
                  id="gopay"
                  name="payment"
                  value="gopay"
                  v-model="selectedPaymentMethod"
                  class="ml-2"
                />
              </div>

              <div class="text-right mb-8">
                <input
                  type="radio"
                  id="shopeepay"
                  name="payment"
                  value="shopeepay"
                  v-model="selectedPaymentMethod"
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
                  name="payment"
                  value="bca"
                  v-model="selectedPaymentMethod"
                  class="ml-2"
                />
              </div>

              <div class="text-right mb-4">
                <input
                  type="radio"
                  id="bank_bni"
                  name="payment"
                  value="bni"
                  v-model="selectedPaymentMethod"
                  class="ml-2"
                />
              </div>

              <div class="text-right mb-4">
                <input
                  type="radio"
                  id="bank_bri"
                  name="payment"
                  value="bri"
                  v-model="selectedPaymentMethod"
                  class="ml-2"
                />
              </div>

              <div class="text-right mb-4">
                <input
                  type="radio"
                  id="bank_mandiri"
                  name="payment"
                  value="mandiri"
                  v-model="selectedPaymentMethod"
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
          <input type="checkbox" id="terms_condition" name="terms_condition" v-model="acceptedTerms" />
          <label for="terms_condition" class="ml-2 font-semibold"
            >Saya telah membaca dan menyetujui
            <a href="#" class="text-[#3DA4EA]">syarat dan ketentuan</a></label
          >
        </div>
      </div>

      <div class="flex justify-center items-center mb-10">
        <button
          :disabled="!acceptedTerms || !selectedPaymentMethod"
          @click="openConfirmationPopup"
          class="bg-[#F4D160] text-[#1D5D9B] font-semibold px-16 md:px-32 py-2 rounded-full mt-10 hover:bg-[#F4C150] hover:shadow-lg transition"
        >
          Bayar
        </button>
      </div>
    </div>

    <div v-if="showConfirmationPopup" class="fixed inset-0 bg-gray-800 bg-opacity-50 flex items-center justify-center z-50">
        <div class="bg-white rounded-lg p-6 shadow-lg">
          <h2 class="text-lg font-semibold text-[#1D5D9B] mb-4">Konfirmasi Pembayaran</h2>
          <p class="text-gray-600 mb-4">
            Anda akan melakukan pembayaran untuk konseling dengan:
            <br />
            Paket: {{ selectedPackage?.metode }}
            <br />
            Dokter: {{ selectedDoctor?.nama_dokter }}
            <br />
            Metode Pembayaran: {{ selectedPaymentMethod }}
            <br />
            Total Harga: Rp. {{ selectedPackage?.harga }}
          </p>
          <div class="flex justify-center">
            <button @click="pay" class="bg-[#F4D160] text-[#1D5D9B] font-semibold px-4 py-2 rounded mr-4 hover:bg-[#F4C150] hover:shadow-lg transition">
              <router-link to="/Landing">
                Bayar
              </router-link>
            </button>
            <button @click="closeConfirmationPopup" class="bg-[#E5E7EB] text-gray-700 font-semibold px-4 py-2 rounded hover:bg-gray-300 hover:shadow-lg transition">
              Batal
            </button>
          </div>
        </div>
      </div>
  </body>
</template>

<script>
export default {
  name: "Counselling_v3",
  data() {
    return {
      selectedPackageId: null,
      selectedPackage: null,
      selectedDoctorId: null,
      selectedDoctor: null,
      acceptedTerms: false,
      selectedPaymentMethod: null,
      showConfirmationPopup: false
    };
  },
  mounted() {
    // Menangkap data yang dikirim dari halaman pertama
    this.selectedPackageId = this.$route.query.packageId;
    this.selectedDoctorId = this.$route.query.doctorId;
    this.fetchDoctorData(); 
    this.fetchPackageData();
    this.scrollToTop(); 
  },
  methods: {
    openConfirmationPopup() {
      this.showConfirmationPopup = true;
    },
    closeConfirmationPopup() {
      this.showConfirmationPopup = false;
    },
    pay() {
      if (this.selectedPaymentMethod && this.acceptedTerms) {
        const paymentData = {
          packageId: this.selectedPackageId,
          doctorId: this.selectedDoctorId,
          paymentMethod: this.selectedPaymentMethod,
          amount: this.selectedPackage.harga,
        };

        fetch("http://localhost/Healify/master/transaksi.php", {
          method: "POST",
          headers: {
            "Content-Type": "application/json",
          },
          body: JSON.stringify(paymentData),
        })
          .then((response) => response.json())
          .then((data) => {
            if (data.success) {
              // Redirect to success page or show success message
              console.log("Payment successful:", data);
            } else {
              // Handle payment failure
              console.error("Payment failed:", data.message);
            }
          })
          .catch((error) => {
            console.error("Error processing payment:", error);
          });
      } else {
        alert("Please select a payment method and accept the terms and conditions.");
      }
    },
    fetchDoctorData() {
      fetch("http://localhost/Healify/master/dokter.php")
        .then((response) => response.json())
        .then((data) => {
          // Find the selected doctor based on the ID
          this.selectedDoctor = data.find((doctor) => doctor.id_dokter === this.selectedDoctorId);
        })
        .catch((error) => {
          console.error("Error fetching dokter:", error);
        });
    },
    fetchPackageData()  {
      fetch("http://localhost/Healify/master/paket.php")
        .then((response) => response.json())
        .then((data) => {
          this.selectedPackage = data.find((pkg) => pkg.id_kategori === this.selectedPackageId);
        })
        .catch((error) => {
          console.error("Error fetching paket:", error);
        });
    },
    scrollToTop() {
      window.scrollTo(0, 0); // Scroll to top method
    },
  },
};
</script>