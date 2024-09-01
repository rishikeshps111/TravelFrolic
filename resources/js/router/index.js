import { createRouter, createWebHistory } from 'vue-router'
import Home from '../views/1_WebFrontend/2_Pages/Home.vue'

const router = createRouter({
  history: createWebHistory(import.meta.env.BASE_URL),
  routes: [
    {
      path: '/',
      name: 'home',
      component: Home     
    },
  ]
})

export default router
