<template>
  <body class="p-12">
    <div class="container mx-auto p-4 border-2 border-[#B6E2FB] rounded-xl">
      <!-- Title -->
      <h1 class="text-3xl font-bold text-blue-800 mb-4" id="journalTitle">
        Judul
      </h1>

      <!-- Date and Character Count -->
      <div class="flex justify-between items-center mb-4">
        <div class="flex">
          <p class="text-gray-600">6 Mei 7:36 PM</p>
          <p class="text-gray-600">| 0 Karakter</p>
        </div>

        <!-- Save Button -->
        <button
          onclick="saveJournal()"
          class="mt-4 bg-[#F4D160] text-black rounded-full p-2 px-8"
        >
          Save
        </button>
      </div>
      <hr class="my-8 border-[#1D5D9B]" />
      <!-- Text Field for Journal Entry -->
      <textarea
        class="w-full h-80 border rounded-md p-2 focus:outline-none"
        placeholder="Mulai mengetik"
      ></textarea>
    </div>
  </body>
  x``
</template>

<script>
function saveJournal() {
  var newTitle = prompt(
    "Masukkan judul baru untuk jurnal Anda:",
    "Judul Jurnal Baru"
  );
  if (newTitle != null && newTitle != "") {
    document.getElementById("journalTitle").innerText = newTitle;
  }
}
</script>
