<template lang="html">
  <header class="bg-white">
    <nav
      id="app"
      class="p-5 bg-[#75C2F6] shadow md:flex md:items-center md:justify-between w-full md:w-full relative"
    >
      <div class="flex items-center justify-between ml-6">
        <span
          class="text-xl font-[Poppins] text-white font-bold curson-pointer"
        >
          <img
            src="../assets/Nav/Titik_koma.png"
            alt="Logo Healify"
            class="inline h-6 md:h-9 w-auto"
          />
          Healify</span
        >
        <span class="text-3xl cursor-pointer md:hidden block">
          <ion-icon name="menu-outline" @click="Menu"></ion-icon>
        </span>
      </div>
      <ul
        class="md:flex md:items-center rounded text-lg font-[inter] font-medium mr-5 z-10 md:z-auto md:static absolute bg-[#75C2F6] w-full left-0 md:w-auto md:py-0 py-4 md:pl-0 pl-7 md:opacity-100 opacity-85 top-[-400px] transition-all ease-in duration-500"
      >
        <li class="mx-5 v1 my-4 md:my-0 md:opacity-100"></li>
        <li class="mx-5 my-4 md:my-0">
          <router-link
            to="/Landing"
            class="text-[#525252] transition duration-300 hover:text-white"
            >Home</router-link
          >
        </li>
        <li class="mx-5 my-4 md:my-0">
          <router-link
            to="/Meditation"
            class="text-[#525252] transition duration-300 hover:text-white"
            >Meditation</router-link
          >
        </li>
        <li class="mx-5 my-4 md:my-0">
          <router-link
            to="/counseling"
            class="text-[#525252] transition duration-300 hover:text-white"
            >Counseling</router-link
          >
        </li>
        <li class="mx-5 my-4 md:my-0">
          <router-link
            to="/Journal"
            class="text-[#525252] transition duration-300 hover:text-white"
            >Journal</router-link
          >
        </li>
        <li class="mx-5 my-4 md:my-0">
          <router-link
            to="/About"
            class="text-[#525252] transition duration-300 hover:text-white"
            >About Us</router-link
          >
        </li>
        <li class=" ">
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
  name: "Nav_Before",
  methods: {
    Menu(e) {
      let list = document.querySelector("ul");
      let button = e.target;

      if (button.classList.contains("menu-outline")) {
        button.classList.remove("menu-outline");
        button.classList.add("close");
        list.classList.add("top-[75px]");
        list.classList.add("opacity-100");
      } else {
        button.classList.remove("close");
        button.classList.add("menu-outline");
        list.classList.remove("top-[75px]");
        list.classList.remove("opacity-100");
      }
    },
  },
  mounted() {
    const ioniconsESM = document.createElement("script");
    ioniconsESM.type = "module";
    ioniconsESM.src =
      "https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.esm.js";
    document.head.appendChild(ioniconsESM);

    const ioniconsNomodule = document.createElement("script");
    ioniconsNomodule.nomodule = true;
    ioniconsNomodule.src =
      "https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.js";
    document.head.appendChild(ioniconsNomodule);
  },
  chainWebpack: (config) => {
    config.module
      .rule("vue")
      .use("vue-loader")
      .tap((options) => {
        options.compilerOptions = {
          ...options.compilerOptions,
          isCustomElement: (tag) => tag.startsWith("ion-"),
        };
        return options;
      });
  },
};
</script>

<style>
.v1 {
  border-left: 2px solid #525252;
  height: 40px;
}
</style>
