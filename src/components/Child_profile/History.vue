<template>
  <section
    class="bg-[#75C2F6] bg-opacity-50 mt-8 mb-8 shadow-xl ring-1 ring-gray-900/5 p-3 sm:rounded-lg relative w-full"
  >
    <form class="max-w-md mx-auto">
      <label
        for="default-search"
        class="mb-2 text-sm font-medium text-gray-900 sr-only dark:text-white"
        >Search</label
      >
      <div class="relative">
        <div
          class="absolute inset-y-0 start-0 flex items-center ps-3 pointer-events-none"
        >
          <svg
            class="w-4 h-4 text-gray-500 dark:text-gray-400"
            aria-hidden="true"
            xmlns="http://www.w3.org/2000/svg"
            fill="none"
            viewBox="0 0 20 20"
          >
            <path
              stroke="currentColor"
              stroke-linecap="round"
              stroke-linejoin="round"
              stroke-width="2"
              d="m19 19-4-4m0-7A7 7 0 1 1 1 8a7 7 0 0 1 14 0Z"
            />
          </svg>
        </div>
        <input
          type="search"
          id="default-search"
          class="block w-full p-4 ps-10 text-sm text-black border border-gray-300 rounded-lg bg-gray-50 focus:ring-blue-500 focus:border-blue-500 dark:bg-white dark:border-gray-600 dark:placeholder-gray-400 dark:text-gray-600 dark:focus:ring-blue-500 dark:focus:border-blue-500"
          placeholder="Search Transaction History"
          required
        />
        <button
          type="submit"
          class="text-white absolute end-2.5 bottom-2.5 bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm px-4 py-2 dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800"
        >
          Search
        </button>
      </div>
    </form>

    <section class="flex flex-col  md:flex-row mt-8 ml-4">
      <img
        src="D:\My Project\Healify\src\assets\Hourglass.png"
        alt="Hourglass"
        class="w-32 h-auto md:w-auto md:h-auto"
      />
      <div class="flex flex-col md:flex-row md:space-x-64 mt-4 md:mt-0">
        <div class="mx-6">
          <h1 class="text-2xl text-[#1D5D9B] font-semibold">
            Paket Konseling Pro
          </h1>
          <p class="text-gray-600 font-medium text-sm">22 September 2024</p>
        </div>
        <button
          class="middle none center rounded-3xl bg-[#1D5D9B] py-2 px-4 font-sans text-xs font-bold uppercase text-white shadow-md shadow-[#1D5D9B] transition-all hover:shadow-lg hover:shadow-[#1D5D9B] focus:opacity-[0.85] focus:shadow-none active:opacity-[0.85] active:shadow-none disabled:pointer-events-none disabled:opacity-50 disabled:shadow-none my-4 md:my-0 mx-4 md:mx-0"
          data-ripple-light="true"
        >
          Pembayaran Berhasil
        </button>
      </div>
    </section>
  </section>
</template>

<script>
export default {
  name: "History",
};
</script>
