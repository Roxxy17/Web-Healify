<template>
  <div class=" p-4 mb-28">
    <div class="container mx-auto">
      <div class="bg-white p-6 rounded-lg shadow-md">
        <h1 class="text-3xl font-bold mb-6 text-center">Catatan Journal Harian Kamu</h1>
        <p class="text-center mb-6 text-gray-600">Aplikasi ini membantu kamu untuk mencatat segala hal yang kamu alami setiap hari. Simpan dan kelola catatan jurnal harianmu dengan mudah.</p>

        <!-- Form Input -->
        <form @submit.prevent="saveJurnal" class="mb-6 space-y-4">
          <div>
            <label for="juduljurnal" class="block text-sm font-medium text-gray-700 mb-1">Judul Jurnal</label>
            <input v-model="juduljurnal" id="juduljurnal" class="form-input w-full rounded-md shadow-sm" type="text" required>
          </div>
          <div>
            <label for="tanggaljurnal" class="block text-sm font-medium text-gray-700 mb-1">Tanggal Jurnal</label>
            <input v-model="tanggaljurnal" id="tanggaljurnal" type="date" class="form-input w-full rounded-md shadow-sm" required>
          </div>
          <div>
            <label for="deskripsijurnal" class="block text-sm font-medium text-gray-700 mb-1">Deskripsi Jurnal</label>
            <textarea v-model="deskripsijurnal" id="deskripsijurnal" class="form-textarea w-full rounded-md shadow-sm" rows="3" required></textarea>
          </div>
          <button type="submit" class="w-full bg-blue-500 hover:bg-blue-600 text-white px-4 py-2 rounded-md shadow-sm">Simpan</button>
        </form>

        <!-- List Jurnal -->
        <div class="space-y-4">
          <div v-for="jurnal in jurnals" :key="jurnal.id" class="bg-white p-4 rounded-lg shadow-md">
            <div class="flex justify-between items-center mb-2">
              <h2 class="text-xl font-bold">{{ jurnal.juduljurnal }}</h2>
              <div>
                <button @click="editJurnal(jurnal)" class="text-yellow-600 hover:text-yellow-900">Edit</button>
                <button @click="deleteJurnal(jurnal.id)" class="text-red-600 hover:text-red-900 ml-2">Hapus</button>
              </div>
            </div>
            <p class="text-gray-500 mb-2">{{ jurnal.tanggaljurnal }}</p>
            <p class="text-gray-700">{{ jurnal.deskripsijurnal }}</p>
          </div>
        </div>
      </div>
    </div>
  </div>
</template>

<script>
export default {
  data() {
    return {
      jurnals: [],
      id: null,
      juduljurnal: '',
      tanggaljurnal: '',
      deskripsijurnal: ''
    };
  },
  mounted() {
    this.fetchJurnals();
  },
  methods: {
    fetchJurnals() {
      fetch('http://localhost/Healify/master/Journal.php')
        .then(response => response.json())
        .then(data => {
          this.jurnals = data;
        });
    },
    saveJurnal() {
      const method = this.id ? 'PUT' : 'POST';
      const url = 'http://localhost/Healify/master/Journal.php';
      const body = {
        id: this.id,
        juduljurnal: this.juduljurnal,
        tanggaljurnal: this.tanggaljurnal,
        deskripsijurnal: this.deskripsijurnal
      };

      fetch(url, {
        method: method,
        headers: {
          'Content-Type': 'application/json'
        },
        body: JSON.stringify(body)
      }).then(() => {
        this.fetchJurnals();
        this.resetForm();
      });
    },
    editJurnal(jurnal) {
      this.id = jurnal.id;
      this.juduljurnal = jurnal.juduljurnal;
      this.tanggaljurnal = jurnal.tanggaljurnal;
      this.deskripsijurnal = jurnal.deskripsijurnal;
    },
    deleteJurnal(id) {
      fetch('http://localhost/Healify/master/Journal.php', {
        method: 'DELETE',
        headers: {
          'Content-Type': 'application/json'
        },
        body: JSON.stringify({ id: id })
      }).then(() => {
        this.fetchJurnals();
      });
    },
    resetForm() {
      this.id = null;
      this.juduljurnal = '';
      this.tanggaljurnal = '';
      this.deskripsijurnal = '';
    }
  }
};
</script>

<style>
/* Tambahkan gaya kustom di sini jika diperlukan */
</style>
