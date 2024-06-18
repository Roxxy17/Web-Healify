<template>
  <body class="bg-gray-100">
    <div class="container mx-auto py-8">
      <h4 class="font-bold text-lg mb-4 px-8">Account settings</h4>
      <div class="grid grid-cols-1 md:grid-cols-3 gap-4">
        <div class="md:col-span-1">
          <div class="flex flex-col">
            <div
              class="flex flex-col items-center justify-center border-b pb-8 border-gray-200 py-2"
            >
              <img
                src="https://bootdey.com/img/Content/avatar/avatar1.png"
                alt="Profile Picture"
                class="w-36 h-36 rounded-full mb-2"
              />
              <p class="text-center">Ahyi Fauziaturohmah</p>
            </div>
            <router-link
              to="/Setting"
              class="py-2 px-4 border-b border-gray-200 block font-semibold cursor-pointer hover:bg-gray-200"
              data-toggle="list"
              @click="hideMessage"
              >Setting</router-link
            >
            <router-link
              to="/Chat"
              class="py-2 px-4 border-b border-gray-200 block font-semibold cursor-pointer hover:bg-gray-200"
              data-toggle="list"
              @click="hideMessage"
              >Customer Service</router-link
            >
            <router-link
              to="/Faq"
              class="py-2 px-4 border-b border-gray-200 block font-semibold cursor-pointer hover:bg-gray-200"
              data-toggle="list"
              @click="hideMessage"
              >FAQ</router-link
            >
            <router-link
              to="/History"
              class="py-2 px-4 border-b border-gray-200 block font-semibold cursor-pointer hover:bg-gray-200"
              data-toggle="list"
              @click="hideMessage"
              >History Transaction</router-link
            >
            <router-link
              to="/Login"
              class="py-2 px-4 border-b border-gray-200 block font-semibold cursor-pointer hover:bg-gray-200"
              data-toggle="list"
              @click="hideMessage"
              >Log Out</router-link
            >
          </div>
        </div>
        <div class="md:col-span-2">
          <div class="bg-white rounded shadow overflow-hidden">
            <div class="p-4 font-[inter]">
              <p v-if="showMessage" class="text-2xl font-medium mb-2">
                Click the panel on the left to open the settings menu.
              </p>
              <router-view />
            </div>
          </div>
        </div>
      </div>
    </div>
  </body>
</template>

<script>
export default {
  name: "Profile",
  data() {
    return {
      showMessage: true,
    };
  },
  methods: {
    hideMessage() {
      this.showMessage = false;
    },
  },
};
</script>
