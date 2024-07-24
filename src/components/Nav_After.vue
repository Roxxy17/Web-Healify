<template>
  <header class="bg-white">
    <nav id="app" class="p-5 bg-[#75C2F6] shadow md:flex md:items-center md:justify-between w-full md:w-full relative">
      <div class="flex items-center justify-between ml-6">
        <span class="text-xl font-[Poppins] text-white font-bold cursor-pointer">
          <img src="../assets/Nav/Titik_koma.png" alt="Logo Healify" class="inline h-6 md:h-9 w-auto" />
          Healify
        </span>
        <span class="text-3xl cursor-pointer md:hidden block">
          <ion-icon name="menu-outline" @click="toggleMenu"></ion-icon>
        </span>
      </div>
      <ul class="md:flex md:items-center rounded text-lg font-[inter] font-medium mr-5 z-10 md:z-auto md:static absolute bg-[#75C2F6] w-full left-0 md:w-auto md:py-0 py-4 md:pl-0 pl-7 md:opacity-100 opacity-85 top-[-400px] transition-all ease-in duration-500" :class="{ 'top-[75px] opacity-100': menuOpen }">
        <li class="mx-4 v1 my-4 md:my-0"></li>
        <li class="mx-4 my-4 md:my-0">
          <router-link to="/Landing" class="text-[#525252] transition duration-300 hover:text-white">Home</router-link>
        </li>
        <li class="mx-4 my-4 md:my-0">
          <router-link to="/Meditation" class="text-[#525252] transition duration-300 hover:text-white">Meditation</router-link>
        </li>
        <li class="mx-4 my-4 md:my-0">
          <router-link to="/counselling" class="text-[#525252] transition duration-300 hover:text-white">Counseling</router-link>
        </li>
        <li class="mx-4 my-4 md:my-0">
          <router-link to="/Journal" class="text-[#525252] transition duration-300 hover:text-white">Journal</router-link>
        </li>
        <li class="mx-4 my-4 md:my-0">
          <router-link to="/About" class="text-[#525252] transition duration-300 hover:text-white">About Us</router-link>
        </li>
        <li class="mx-4 my-4 md:my-0 flex justify-between space-x-12 " v-if="user">
          <router-link to="/Profile" class="text-[#525252] transition duration-300 hover:text-white inline-flex items-center gap-2">
            {{ user.nama_user }}
            <img src="https://bootdey.com/img/Content/avatar/avatar1.png" alt="Profile Picture" class="w-10 h-10 md:h-10 md:w-10 rounded-full"/>
          </router-link>
          <button @click="logout" class="middle none center rounded-3xl bg-[#F4D160] py-2 px-4 font-sans text-xs font-bold uppercase text-white shadow-md shadow-orange-500/20 transition-all hover:shadow-lg hover:shadow-orange-500/40 focus:opacity-[0.85] focus:shadow-none active:opacity-[0.85] active:shadow-none disabled:pointer-events-none disabled:opacity-50 disabled:shadow-none my-4 md:my-0 mx-4" data-ripple-light="true">
            Logout
          </button>
        </li>
        <li v-else-if="logout">
          <button
            class="middle none center rounded-3xl bg-[#F4D160] py-2 px-4 font-sans text-xs font-bold uppercase text-white shadow-md shadow-orange-500/20 transition-all hover:shadow-lg hover:shadow-orange-500/40 focus:opacity-[0.85] focus:shadow-none active:opacity-[0.85] active:shadow-none disabled:pointer-events-none disabled:opacity-50 disabled:shadow-none my-4 md:my-0 mx-4"
            data-ripple-light="true"
          >
            <router-link
              to="/Login"
              class="text-[#525252] transition duration-300 hover:text-white"
              >Login</router-link
            >
          </button>
        </li>
      </ul>
    </nav>
  </header>
</template>

<script>
export default {
  data() {
    return {
      user: null,
      menuOpen: false
    };
  },
  created() {
    this.fetchUserData();
  },
  methods: {
    toggleMenu() {
      this.menuOpen = !this.menuOpen;
    },
    fetchUserData() {
      const user = JSON.parse(localStorage.getItem('user'));
      if (user) {
        this.user = user;
      } else {
        console.error('User data is missing');
      }
    },
    logout() {
      // Clear local storage
      localStorage.removeItem('user');
      // Reset user data in the component
      this.user = null;
      // Navigate to login page
      this.$router.push('/Login');
    }
  },
  mounted() {
    const ioniconsESM = document.createElement("script");
    ioniconsESM.type = "module";
    ioniconsESM.src = "https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.esm.js";
    document.head.appendChild(ioniconsESM);
    const ioniconsNomodule = document.createElement("script");
    ioniconsNomodule.nomodule = true;
    ioniconsNomodule.src = "https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.js";
    document.head.appendChild(ioniconsNomodule);
  },
};
</script>

<style>
.v1 {
  border-left: 2px solid #525252;
  height: 40px;
}
</style>
