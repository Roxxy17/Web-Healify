<template>
  <div class="flex flex-col md:flex-row h-screen">
    <div class="md:w-1/2 bg-white p-8 rounded-lg flex justify-center items-center">
      <div>
        <h2 class="text-3xl md:text-4xl font-semibold mb-4 font-[inter]" style="color: #1d5d9b">
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
      <div class="bg-yellow-500 p-8 rounded-lg shadow-md w-72 md:w-96" style="background-color: #fbeeac">
        <h1 class="text-2xl font-semibold mb-4 text-center font-[inter]" style="color: #1d5d9b">Login</h1>
        <p class="text-center mt-4 font-[inter]">
          Buat akun?
          <router-link class="text-blue-500 font-[inter]" to="/Register">Daftar</router-link>
        </p>
        <form @submit.prevent="submit">
          <div class="mb-4">
            <label for="email" class="block text-gray-700 font-medium font-[inter]">Email</label>
            <input
              type="text"
              id="email"
              v-model="email"
              class="w-full border rounded py-2 px-3 mt-1 focus:outline-none focus:border-blue-500"
              placeholder="Email"
            />
          </div>
          <div class="mb-4">
            <label for="password" class="block text-gray-700 font-medium font-[inter]">Password</label>
            <input
              type="password"
              id="password"
              v-model="password"
              class="w-full border rounded py-2 px-3 mt-4 focus:outline-none focus:border-blue-500"
              placeholder="Password"
            />
          </div>
          <button type="submit" class="bg-yellow-500 text-white py-2 px-24 md:px-32 rounded-full mx-auto block mt-6 font-[inter]">
            Login
          </button>
        </form>
        <div
          v-if="errorMessage"
          class="mt-4 bg-red-100 border border-red-400 text-red-700 px-4 py-3 rounded relative"
          role="alert"
        >
          <strong class="font-bold">Error!</strong>
          <span class="block sm:inline">{{ errorMessage }}</span>
        </div>
      </div>
    </div>
  </div>
</template>

<script>
import axios from "axios";
export default {
  name: "Login",
  data() {
    return {
      email: "",
      password: "",
      errorMessage: "",
    };
  },
  methods: {
    submit() {
      this.errorMessage = "";
      axios
        .post("http://localhost/Healify/master/login.php", {
          email: this.email,
          password: this.password,
        })
        .then((response) => {
          if (response.data.status === "success") {
            localStorage.setItem("user", JSON.stringify(response.data.user));
            this.$router.push("Landing");
          } else {
            this.errorMessage = response.data.message || "Email dan password tidak sesuai";
          }
        })
        .catch((error) => {
          if (error.response) {
            this.errorMessage = error.response.data.message || "Terjadi kesalahan. Silakan coba lagi.";
          } else {
            this.errorMessage = "Tidak dapat terhubung ke server. Silakan coba lagi nanti.";
          }
        });
    },
  },
};
</script>
