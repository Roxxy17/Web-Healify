<template>
        <!-- Main content area for profile settings -->
        <div class="bg-white rounded shadow overflow-hidden">
          <div class="p-4 font-[inter]">
            <p v-if="showMessage" class="text-2xl font-medium mb-2">
              Click the panel on the left to open the settings menu.
            </p>
            <form @submit.prevent="updateProfile">
              <label for="nama_user" class="block font-medium text-sm text-gray-700">Name</label>
              <input type="text" id="nama_user" v-model="formData.nama_user" class="form-input mt-1 block w-full">

              <label for="email" class="block font-medium text-sm text-gray-700 mt-4">Email</label>
              <input type="email" id="email" v-model="formData.email" class="form-input mt-1 block w-full">

              <label for="password" class="block font-medium text-sm text-gray-700 mt-4">Password</label>
              <input type="password" id="password" v-model="formData.password" class="form-input mt-1 block w-full">

              <button type="submit" class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded mt-4">
                Update Profile
              </button>
            </form>
          </div>
        </div>
</template>

<script>
import axios from "axios";

export default {
  name: "Profile",
  data() {
    return {
      user: null,
      showMessage: true,
      formData: {
        nama_user: '',
        email: '',
        password: ''
      }
    };
  },
  created() {
    this.fetchUserData();
  },
  methods: {
    hideMessage() {
      this.showMessage = false;
    },
    fetchUserData() {
      // Fetch user data from localStorage
      const user = JSON.parse(localStorage.getItem('user'));
      if (user) {
        this.user = user;
        // Populate form data for editing
        this.formData.nama_user = user.nama_user;
        this.formData.email = user.email;
      } else {
        console.error('User data not found in localStorage');
      }
    },
    updateProfile() {
      // Simulate updating localStorage directly for demonstration purposes
      localStorage.setItem('user', JSON.stringify(this.formData));

      // Alternatively, you can send this data to your backend using axios
      axios.post('http://localhost/Healify/master/edit_profile.php', this.formData)
        .then(response => {
          console.log("Profile updated:", response.data);
          alert('Profile updated successfully');
          // Redirect or handle success as needed
        })
        .catch(error => {
          console.error("Profile update failed:", error);
          alert('Failed to update profile');
          // Handle error, if needed
        });
    },
    logout() {
      // Clear localStorage and redirect to login page
      localStorage.removeItem('user');
      this.$router.push("/Login");
    }
  },
};
</script>

<style>
/* Your custom styles */
</style>
