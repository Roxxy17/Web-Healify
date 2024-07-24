<template>
  <div class="bg-gray-100 p-4">
    <div class="container mx-auto">
      <div class="bg-white p-4 rounded shadow">
        <h1 class="text-2xl font-bold mb-4">CRUD Jurnal</h1>

        <!-- Form Input -->
        <form @submit.prevent="saveJurnal" class="mb-4">
          <div class="mb-4">
            <label for="juduljurnal" class="block text-sm font-medium text-gray-700 mb-1">Judul Jurnal</label>
            <input v-model="juduljurnal" id="juduljurnal" class="form-input w-full rounded-md shadow-sm" type="text">
          </div>
          <div class="mb-4">
            <label for="tanggaljurnal" class="block text-sm font-medium text-gray-700 mb-1">Tanggal Jurnal</label>
            <input v-model="tanggaljurnal" id="tanggaljurnal" type="date" class="form-input w-full rounded-md shadow-sm">
          </div>
          <div class="mb-4">
            <label for="deskripsijurnal" class="block text-sm font-medium text-gray-700 mb-1">Deskripsi Jurnal</label>
            <textarea v-model="deskripsijurnal" id="deskripsijurnal" class="form-textarea w-full rounded-md shadow-sm"></textarea>
          </div>
          <button type="submit" class="bg-blue-500 hover:bg-blue-600 text-white px-4 py-2 rounded">Simpan</button>
        </form>

        <!-- Tabel Jurnal -->
        <div class="-mx-4 overflow-x-auto">
          <table class="min-w-full bg-white rounded shadow overflow-hidden">
            <thead class="bg-gray-50">
              <tr>
                <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">ID</th>
                <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Judul</th>
                <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Tanggal</th>
                <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Deskripsi</th>
                <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Aksi</th>
              </tr>
            </thead>
            <tbody>
              <tr v-for="jurnal in jurnals" :key="jurnal.id" class="bg-white">
                <td class="px-6 py-4 whitespace-nowrap text-sm font-medium text-gray-900">{{ jurnal.id }}</td>
                <td class="px-6 py-4 whitespace-nowrap text-sm font-medium text-gray-900">{{ jurnal.juduljurnal }}</td>
                <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-500">{{ jurnal.tanggaljurnal }}</td>
                <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-500">{{ jurnal.deskripsijurnal }}</td>
                <td class="px-6 py-4 whitespace-nowrap text-sm font-medium">
                  <button @click="editJurnal(jurnal)" class="text-yellow-600 hover:text-yellow-900">Edit</button>
                  <button @click="deleteJurnal(jurnal.id)" class="text-red-600 hover:text-red-900 ml-2">Hapus</button>
                </td>
              </tr>
            </tbody>
          </table>
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
