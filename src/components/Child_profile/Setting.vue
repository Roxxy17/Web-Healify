<template>
  <section
    class="bg-[#75C2F6] bg-opacity-50 mt-8 mb-8 shadow-xl ring-1 ring-gray-900/5 p-3 sm:rounded-lg relative w-full"
    id="contact"
  >
    <div class="tab-pane fade active show" id="account-general">
      <div class="flex items-center mb-4">
        <div class="ml-4">
          <p class="font-semibold py-1">Account Settings</p>
          <div class="flex items-center mt-2 py-2">
            <label
              class="btn btn-outline-primary btn btn-default md-btn-flat bg-blue-500 hover:bg-blue-700 text-white px-4 py-2 rounded mr-2 shadow-md"
            >
              <input type="file" class="account-settings-fileinput hidden" />
              Choose FIle
            </label>
            <button
              type="button"
              class="btn btn-default md-btn-flat bg-blue-500 hover:bg-blue-700 text-white px-4 py-2 rounded shadow-md"
            >
              <span class="hidden sm:inline">Reset</span>
              <span>Photo</span>
            </button>
          </div>
          <div class="text-xs mt-1 text-gray-600">
            Allowed JPG, GIF, or PNG. Max size of 800K
          </div>
        </div>
      </div>
    </div>
    <div class="grid grid-cols-1 gap-4" id="myForm">
      <div>
        <label for="name" class="block text-sm font-medium text-gray-700"
          >Name</label
        >
        <input
          type="text"
          id="name"
          name="name"
          class="mt-1 block w-full px-3 py-2 border border-gray-300 rounded-md shadow-sm focus:outline-none focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm"
          placeholder="Kalila Atha Achmad"
        />
      </div>
      <div>
        <label for="email" class="block text-sm font-medium text-gray-700"
          >Email</label
        >
        <input
          type="email"
          id="email"
          name="email"
          autocomplete="email"
          class="mt-1 block w-full px-3 py-2 border border-gray-300 rounded-md shadow-sm focus:outline-none focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm"
          placeholder="kalilaatha8@gmail.com"
        />
      </div>
      <div>
        <label for="password" class="block text-sm font-medium text-gray-700"
          >Password</label
        >
        <input
          type="password"
          id="password"
          name="password"
          autocomplete="new-password"
          class="mt-1 block w-full px-3 py-2 border border-gray-300 rounded-md shadow-sm focus:outline-none focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm"
          placeholder="Kali**********888"
        />
      </div>
      <div>
        <label for="phone" class="block text-sm font-medium text-gray-700"
          >Phone Number</label
        >
        <input
          type="tel"
          id="phone"
          name="phone"
          autocomplete="tel"
          class="mt-1 block w-full px-3 py-2 border border-gray-300 rounded-md shadow-sm focus:outline-none focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm"
          placeholder="088806147806"
        />
      </div>
    </div>
    <div
      id="displayData"
      class="hidden bg-gray-100 rounded-lg shadow-md p-6"
    ></div>
    <div class="text-right mt-6">
      <button
        type="button"
        @click="saveChanges()"
        class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded mr-2 shadow-md"
      >
        Save changes
      </button>
      <button
        type="button"
        class="bg-gray-300 hover:bg-gray-400 text-gray-800 font-bold py-2 px-4 rounded shadow-md"
      >
        Cancel
      </button>
    </div>
  </section>
</template>

<script>
export default {
  name: "Setting",

  methods: {
    saveChanges() {
      var name = document.getElementById("name").value;
      var email = document.getElementById("email").value;
      var password = document.getElementById("password").value;
      var phone = document.getElementById("phone").value;
      var displayDiv = document.getElementById("displayData");
      var form = document.getElementById("myForm");

      document.getElementById("name").setAttribute("placeholder", name);
      document.getElementById("email").setAttribute("placeholder", email);
      document.getElementById("phone").setAttribute("placeholder", phone);

      var data =
        "<p>Name: " +
        name +
        "</p><p>Email: " +
        email +
        "</p>" +
        "</p><p>Password: " +
        password +
        "</p>" +
        "</p><p>Phone: " +
        phone +
        "</p>";

      displayDiv.innerHTML = data;
      displayDiv.classList.remove("hidden");
      form.style.display = "none";
    },
  },
  mounted() {
    document
      .querySelector(
        ".bg-blue-500.hover\\:bg-blue-700.text-white.font-bold.py-2.px-4.rounded.mr-2"
      )
      .addEventListener("click", this.saveChanges);
  },
};
</script>
