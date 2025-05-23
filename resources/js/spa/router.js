import { createRouter, createWebHistory } from 'vue-router'
import Home from './components/Home.vue'
import About from './components/About.vue'

const routes = [
    { path: '/spa', component: Home },
    { path: '/spa/about', component: About },
    // Добавьте catch-all route для 404
    { path: '/:pathMatch(.*)*', component: NotFound }
]

const router = createRouter({
    history: createWebHistory(), // Важно для корректной работы
    routes
})

export default router
