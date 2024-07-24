<template>
  <ul>
    <li v-for="(transaction, index) in transactions" :key="index">
      <section class="bg-[#75C2F6] bg-opacity-50 mt-8 mb-8 shadow-xl ring-1 ring-gray-900/5 p-3 sm:rounded-lg relative w-full">
        <section class="flex flex-col md:flex-row mt-8 ml-4">
          <img src="../../assets/Hourglass.png" alt="Hourglass" class="w-32 h-auto md:w-auto md:h-auto" />
          <div class="flex flex-col md:flex-row md:space-x-64 md:mt-0">
            <div class="mx-6">
              <h1 class="text-2xl text-[#1D5D9B] font-semibold">Transaction History</h1>
              <p v-if="transaction.id_kategori === '1'">Instan</p>
              <p v-else-if="transaction.id_kategori === '2'">Pro</p>
              <p v-else-if="transaction.id_kategori === '3'">Offline</p>
            </div>
            <button class="middle none center rounded-3xl bg-[#1D5D9B] py-2 px-4 font-sans text-xs font-bold uppercase text-white shadow-md shadow-[#1D5D9B] transition-all hover:shadow-lg hover:shadow-[#1D5D9B] focus:opacity-[0.85] focus:shadow-none active:opacity-[0.85] active:shadow-none disabled:pointer-events-none disabled:opacity-50 disabled:shadow-none my-4 md:my-0 mx-4 md:mx-0" data-ripple-light="true">
              Pembayaran Berhasil
            </button>
          </div>
        </section>
      </section>
    </li>
  </ul>
</template>

<script>
export default {
  data() {
    return {
      transactions: [],
    };
  },
  mounted() {
    this.fetchHistorys();
  },
  methods: {
    async fetchHistorys() {
      try {
        const response = await fetch('http://localhost/Healify/master/history.php', {
          method: 'GET', // Ensure you're using the correct HTTP method
          headers: {
            'Content-Type': 'application/json', // Adjust according to your server's requirements
          },
        });

        if (!response.ok) {
          throw new Error(`HTTP error! Status: ${response.status}`);
        }

        const data = await response.json();
        console.log('Fetched data:', data);
        this.transactions = data;
      } catch (error) {
        console.error('Error fetching transactions:', error);
      }
    },
  },
  name: 'History',
};
</script>
