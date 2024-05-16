<template>
  <div class="flex flex-col md:flex-row h-screen mb-60">
    <div
      class="md:w-1/2 bg-white p-8 rounded-lg flex justify-center items-center"
    >
      <div>
        <h2
          class="text-3xl md:text-4xl font-semibold mb-4 font-[inter]"
          style="color: #1d5d9b"
        >
          Saatnya <br />
          Prioritaskan Dirimu
        </h2>
        <p class="text-md md:text-2xl mb-4 font-[inter]" style="color: #1d5d9b">
          Temukan kedamaian pikiran dan jiwa melalui meditasi, konsultasi dengan
          psikolog berpengalaman, dan periksa kesehatan mentalmu secara gratis
          secara teratur dengan Healify!
        </p>
      </div>
    </div>

    <div class="md:w-1/2 flex justify-center items-center">
      <div
        class="bg-yellow-500 p-8 rounded-lg shadow-md w-72 md:w-96"
        style="background-color: #fbeeac"
      >
        <h1
          class="text-2xl font-semibold mb-4 text-center font-[inter]"
          style="color: #1d5d9b"
        >
          Daftar
        </h1>
        <p class="text-center mt-4">
          Sudah Punya Akun?
          <router-link class="text-blue-500 font-[inter]" to="/Login"
            >Login</router-link
          >
        </p>
        <form>
          <div class="mb-4">
            <label for="nama" class="block text-gray-700 font-medium"
              >Nama Lengkap</label
            >
            <input
              type="text"
              id="nama"
              class="w-full border rounded py-2 px-3 mt-1 focus:outline-none focus:border-blue-500"
              placeholder="Nama Lengkap"
            />
          </div>
          <div class="mb-4">
            <label
              for="email"
              class="block text-gray-700 font-medium font-[inter]"
              >Email</label
            >
            <input
              type="text"
              id="email"
              class="w-full border rounded py-2 px-3 mt-1 focus:outline-none focus:border-blue-500"
              placeholder="Email"
            />
          </div>

          <div class="mb-4">
            <label
              for="password"
              class="block text-gray-700 font-medium font-[inter]"
              >Password</label
            >
            <input
              type="password"
              id="password"
              class="w-full border rounded py-2 px-3 mt-4 focus:outline-none focus:border-blue-500"
              placeholder="Password"
            />
          </div>

          <button
            type="submit"
            class="bg-yellow-500 text-white py-2 px-24 md:px-32 rounded-full mx-auto block mt-6 font-[inter]"
          >
            Login
          </button>

          <button
            type="#"
            class="bg-white-600 text-black border-2 border-[#525252] py-2 px-8 md:px-20 rounded-full mx-auto block mt-4 w-full text-[12px] font-[inter]"
            style="background-color: #ffffff"
          >
            <img
              src="D:\My Project\Healify\src\assets\google.png"
              alt="Logo Google"
              class="h-6 w-6 inline-block mr-2"
            />
            Login dengan Google
          </button>
        </form>
      </div>
    </div>
  </div>
</template>

<script>
export default {
  name: "Register",
};
</script>
