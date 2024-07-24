<template>
  <div>
    <h1 class="mt-8 text-center font-[inter] font-bold text-2xl md:text-4xl text-[#1D5D9B] md:drop-shadow-lg">
      Pilih Paket terbaikmu
    </h1>
    <body class="bg-white-500">
      <div class="bg-white py-12">
        <div class="container mx-auto px-4">
          <div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 gap-8 justify-center px-4 md:px-16">
            <button
              v-for="pkg in packages"
              :key="pkg.id_kategori"
              @click="selectPackage(pkg.id_kategori)"
              :class="['p-4 rounded-lg shadow-md border-4 transition-transform transform min-h-[280px] sm:min-h-[300px] md:min-h-[320px]', selectedPackageId === pkg.id_kategori ? 'border-[#1D5D9B] scale-105' : 'border-[#75C2F6] border-opacity-30 hover:shadow-lg hover:border-opacity-100 hover:scale-105']"
            >
              <h3 class="text-2xl font-semibold px-2 py-1 rounded-lg text-white text-center" :style="getGradient(pkg.metode)">
                {{ pkg.metode }}
              </h3>
              <p class="font-semibold text-gray-600 mb-2 mt-4">RP. {{ pkg.harga }}</p>
              <hr class="my-2 border-[#1D5D9B] mt-4 mb-4" />
              <div class="min-h-[100px] sm:min-h-[125px] md:min-h-[150px] flex items-center">
                <p class="text-gray-600 text-left mb-2">{{ pkg.deskripsi }}</p>
              </div>
            </button>
          </div>
        </div>
      </div>

      <div ref="doctorsSection" class="space-y-10 md:space-y-8 mt-10 text-center">
        <h1 class="font-[inter] font-bold text-2xl md:text-4xl text-[#1D5D9B] md:drop-shadow-lg">
          Ceritakan dan konsultasikan semua masalahmu <br />
          dengan Psikolog Healify!
        </h1>
      </div>

      <div class="flex items-center mt-16 sat mb-8">
        <div class="flex flex-col bg-white m-auto p-auto mb:10">
          <div class="flex md:max-w-screen-lg max-w-xs overflow-x-scroll hide-scroll-bar pb-10 scroll whitespace-nowrap scroll-smooth">
            <div class="flex flex-nowrap gap-10 md:gap-20">
              <div v-for="doctor in doctors" :key="doctor.id_dokter" class="inline-block px-3">
                <div
                  @click="selectDoctor(doctor.id_dokter)"
                  :class="['w-64 h-64 max-w-xs overflow-hidden rounded-lg shadow-md bg-white transition-shadow duration-300 ease-in-out relative flex items-center justify-center', selectedDoctorId === doctor.id_dokter ? 'border-4 border-[#1D5D9B]' : 'hover:shadow-xl']"
                >
                  <img :src="doctor.gambar_dokter" :alt="doctor.nama_dokter" class="" />
                  <div class="absolute bottom-0 left-0 right-0 bg-[#FBEEAC] text-[#1D5D9B] font-[inter] font-medium text-center py-2">
                    {{ doctor.nama_dokter }}
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>

      <div class="flex justify-center items-center mb-12">
        <button @click="scheduleAppointment" class="bg-[#F4D160] text-[#1D5D9B] font-semibold px-32 py-2 rounded-full hover:bg-[#F4C150] hover:shadow-lg transition">
          Jadwalkan
        </button>
      </div>

      <div v-if="showMessageBox" class="fixed inset-0 bg-gray-800 bg-opacity-50 flex items-center justify-center z-50">
        <div class="bg-white rounded-lg p-6 shadow-lg">
          <h2 class="text-lg font-semibold text-[#1D5D9B] mb-4">Peringatan</h2>
          <p class="text-gray-600 mb-4">Silakan pilih paket dan dokter terlebih dahulu!</p>
          <button @click="closeMessageBox" class="bg-[#1D5D9B] text-white font-semibold px-4 py-2 rounded">Tutup</button>
        </div>
      </div>
    </body>
  </div>
</template>

<script>
export default {
  name: "Counselling_v2",
  data() {
    return {
      selectedPackageId: null,
      packages: [],
      doctors: [],
      selectedDoctorId: null,
      showMessageBox: false,
    };
  },
  mounted() {
    this.fetchDoctors();
    this.fetchPackages();
  },
  methods: {
    fetchDoctors() {
      fetch("http://localhost/Healify/master/dokter.php")
        .then((response) => response.json())
        .then((data) => {
          this.doctors = data;
        })
        .catch((error) => {
          console.error("Error fetching doctors:", error);
        });
    },
    fetchPackages() {
      fetch("http://localhost/Healify/master/paket.php")
        .then((response) => response.json())
        .then((data) => {
          this.packages = data;
        })
        .catch((error) => {
          console.error("Error fetching packages:", error);
        });
    },
    selectPackage(packageId) {
      this.selectedPackageId = packageId;
      this.scrollToDoctors();
    },
    scrollToDoctors() {
      this.$nextTick(() => {
        const doctorsSection = this.$refs.doctorsSection;
        if (doctorsSection) {
          doctorsSection.scrollIntoView({ behavior: "smooth" });
        }
      });
    },
    selectDoctor(doctorId) {
      this.selectedDoctorId = doctorId;
    },
    scheduleAppointment() {
      if (this.selectedPackageId && this.selectedDoctorId) {
        window.scrollTo(0, 0);
        this.$router.push({
          name: "Counselling_v3",
          query: {
            packageId: this.selectedPackageId,
            doctorId: this.selectedDoctorId
          }
        });
      } else {
        this.showMessageBox = true;
      }
    },
    closeMessageBox() {
      this.showMessageBox = false;
    },
    getGradient(packageType) {
      switch (packageType) {
        case "Instan":
          return "background: linear-gradient(to right, #7BA7E9, #455E83)";
        case "Pro":
          return "background: linear-gradient(to right, #6FD0EE, #3F7788)";
        case "Offline":
          return "background: linear-gradient(to right, #F3D287, #8D7A4E)";
        default:
          return "background: linear-gradient(to right, #7BA7E9, #455E83)";
      }
    },
  },
};
</script>

<style scoped>
button:focus {
  outline: none;
}
</style>