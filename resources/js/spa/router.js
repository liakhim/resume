import { createRouter, createWebHistory } from 'vue-router'
import Home from './components/Home.vue'
import About from './components/About.vue'

const routes = [
    { path: '/spa', component: Home },
    { path: '/spa/about', component: About },
    // { path: '/spa/*', redirect: '/spa' },
    {
        path: '/:pathMatch(.*)*', // Ловим все остальные пути
        redirect: '/' // Редирект на главную
    }
    // Добавьте catch-all route для 404
    // { path: '/:pathMatch(.*)*', component: NotFound }
]

const router = createRouter({
    history: createWebHistory(), // Важно для корректной работы
    routes
})

export default router
