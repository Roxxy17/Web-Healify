import { createApp } from 'vue'; // Use 'vue' as the module path for Vue
import App from "./App.vue";
import router from "./Router/index.js";
import './style.css'; // Adjusted path for CSS

const app = createApp(App);

app.use(router);

app.mount('#app');

// Add a global error handler for unhandled promise rejections
window.addEventListener('unhandledrejection', event => {
  console.error('Unhandled promise rejection:', event.reason);
});
