<template>
  <body>
    <div class="container mx-auto p-4 lg:p-8">
      <!-- Header -->
      <div class="bg-white rounded-t-lg p-4 text-center">
        <h1 class="text-3xl font-bold text-[#1D5D9B]">Catatan Jurnalmu</h1>
      </div>

      <div class="py-4 lg:py-8 px-4 lg:px-64">
        <!-- Month Selection -->
        <div
          class="flex flex-col lg:flex-row justify-between mt-4 border-2 border-[#469CDA] rounded-xl p-4 lg:p-12"
        >
          <div class="text-[#1D5D9B] mb-4 lg:mb-0">
            <h1 class="text-lg mx-4">Pilih Bulan</h1>
            <h2 class="text-2xl font-semibold mx-4">Mei 2024</h2>
          </div>
          <div class="my-auto px-8 flex justify-between lg:justify-start">
            <button
              class="text-gray-600 hover:text-blue-500 focus:outline-none"
            >
              <svg
                xmlns="http://www.w3.org/2000/svg"
                class="h-6 w-6"
                fill="none"
                viewBox="0 0 24 24"
                stroke="currentColor"
              >
                <path
                  stroke-linecap="round"
                  stroke-linejoin="round"
                  stroke-width="2"
                  d="M15 19l-7-7 7-7"
                />
              </svg>
            </button>
            <button
              class="text-gray-600 hover:text-blue-500 focus:outline-none"
            >
              <svg
                xmlns="http://www.w3.org/2000/svg"
                class="h-6 w-6"
                fill="none"
                viewBox="0 0 24 24"
                stroke="currentColor"
              >
                <path
                  stroke-linecap="round"
                  stroke-linejoin="round"
                  stroke-width="2"
                  d="M9 5l7 7-7 7"
                />
              </svg>
            </button>
          </div>
        </div>
      </div>

      <div class="py-2 lg:py-4 px-4 lg:px-64">
        <!-- Date Dropdown -->
        <div class="mt-4 text-center flex flex-col lg:flex-row justify-between">
          <label for="date-select" class="text-[#1D5D9B] text-lg"
            >Tampilkan Berdasarkan
          </label>
          <select
            id="date-select"
            class="bg-white border-2 border-[#7DACF3] text-[#1D5D9B] rounded-lg px-4 py-2 focus:outline-none mt-2 lg:mt-0"
          >
            <option value="tanggal">Tanggal</option>
            <!-- Add other options here -->
          </select>
        </div>
      </div>

      <!-- Journal Entries Display (Add your content here) -->

      <!-- Add Journal Button -->
      <div class="flex justify-end w-full">
          <button
            class="bg-blue-500 text-white rounded-full px-4 py-2 shadow-lg hover:bg-blue-600 focus:outline-none"
          >
            + Add Journal
          </button>
        </div>
    </div>
  </body>
</template>

<script>
export default {
  name: "Journal_v2",
};
</script>
