import { createRouter, createWebHistory } from "vue-router";
import Home from "/My Project/Healify/src/components/Home.vue";
import Meditation from "/My Project/Healify/src/components/Home_Pages/Meditation.vue";
import Counselling from "/My Project/Healify/src/components/Home_Pages/Counselling.vue";
import Journal from "../components/Home_Pages/Journal.vue";
import AboutUs from "../components/Home_Pages/About_Us.vue";
import Login from "../components/Home_Pages/Login.vue";
import Register from "../components/Home_Pages/Register.vue";
import Profile from "../components/Profile.vue";
import Setting from "../components/Child_profile/Setting.vue";
import Chat from "../components/Child_profile/Chat.vue";
import History from "../components/Child_profile/History.vue";
import Faq from "../components/Child_profile/Faq.vue";
import Counselling_v2 from "../components/Home_Pages/Counselling_v2.vue";
import Counselling_v3 from "../components/Home_Pages/Counselling_v3.vue";
import Journal_v2 from "../components/Home_Pages/Journal_v2.vue";
import Journal_v3 from "../components/Home_Pages/Journal_v3.vue";
import Test from "../components/Test/Test.vue";
import Hasilbaik from "../components/Test/Hasilbaik.vue";
import Hasiljelek from "../components/Test/Hasiljelek.vue";
import Berita from "../components/Berita.vue";
import Meditation_v2 from "../components/Home_Pages/Meditation_v2.vue";

const routes = [
  {
    name: "Meditation_v2",
    path: "/Meditation_v2",
    component: Meditation_v2,
  },
  {
    name: "Berita",
    path: "/Berita",
    component: Berita,
  },
  {
    name: "Test",
    path: "/Test",
    component: Test,
  },
  {
    name: "Hasilbaik",
    path: "/Hasilbaik",
    component: Hasilbaik,
  },
  {
    name: "Hasiljelek",
    path: "/Hasiljelek",
    component: Hasiljelek,
  },
  {
    name: "Home",
    path: "/Landing",
    component: Home,
  },
  {
    name: "Meditation",
    path: "/Meditation",
    component: Meditation,
  },
  {
    name: "Counselling",
    path: "/Counselling",
    component: Counselling,
  },
  {
    name: "Counselling_v2",
    path: "/Counselling_v2",
    component: Counselling_v2,
  },
  {
    name: "Counselling_v3",
    path: "/Counselling_v3",
    component: Counselling_v3,
  },
  {
    name: "Journal",
    path: "/Journal",
    component: Journal,
  },
  {
    name: "Journal_v2",
    path: "/Journal_v2",
    component: Journal_v2,
  },
  {
    name: "Journal_v3",
    path: "/Journal_v3",
    component: Journal_v3,
  },
  {
    name: "About_us",
    path: "/About",
    component: AboutUs,
  },
  {
    name: "Login",
    path: "/Login",
    component: Login,
  },
  {
    name: "Register",
    path: "/Register",
    component: Register,
  },
  {
    name: "Profile",
    path: "/Profile",
    component: Profile,
    children: [
      {
        path: "/Setting",
        component: Setting,
      },
      {
        path: "/Chat",
        component: Chat,
      },
      {
        path: "/History",
        component: History,
      },
      {
        path: "/Faq",
        component: Faq,
      },
    ],
  },
];
const router = Router();
export default router;
function Router() {
  return createRouter({
    history: createWebHistory(),
    routes,
  });
}
