<template lang="html">
  <Nav_After />
  <RouterView />
  <Footer />
</template>

<script>
import Footer from "./components/Footer.vue";
import Nav_After from "./components/Nav_After.vue";
import Nav_Before from "./components/Nav_Before.vue";

export default {
  components: {
    Footer,
    Nav_Before,
    Nav_After,
  },
  name: "App",
};
</script>
