<template>
    <footer class="relative bg-gradient-to-b from-gray-900 via-gray-950 to-black pt-16 pb-8 overflow-hidden">
        <!-- Декоративные элементы -->
        <div class="absolute top-0 left-0 right-0 h-px bg-gradient-to-r from-transparent via-blue-500/30 to-transparent"></div>

        <!-- Сетка из точек -->
        <div class="absolute inset-0 opacity-10">
            <div class="absolute inset-0" style="background-image: radial-gradient(circle at 1px 1px, rgba(59, 130, 246, 0.3) 1px, transparent 0); background-size: 40px 40px;"></div>
        </div>

        <!-- Плавающие элементы -->
        <div class="absolute top-1/4 left-10 w-72 h-72 bg-blue-500/5 rounded-full blur-3xl"></div>
        <div class="absolute bottom-1/4 right-10 w-96 h-96 bg-purple-500/5 rounded-full blur-3xl"></div>


        <div class="relative max-w-screen-xl mx-auto px-4">
            <!-- Статистика -->
            <div class="mt-2 grid grid-cols-2 md:grid-cols-4 gap-6">
                <div
                    v-for="stat in stats"
                    :key="stat.id"
                    class="text-center group cursor-pointer"
                >
                    <div class="relative p-4 rounded-2xl bg-gray-900/30 hover:bg-gray-800/30 border border-gray-800/30 hover:border-blue-500/30 transition-all duration-300">
                        <div class="text-2xl font-bold text-white mb-1 group-hover:text-transparent group-hover:bg-gradient-to-r group-hover:from-blue-400 group-hover:to-purple-400 group-hover:bg-clip-text transition-all duration-300">
                            {{ stat.value }}
                        </div>
                        <div class="text-gray-400 text-sm">{{ stat.label }}</div>
                        <div class="absolute -inset-1 bg-gradient-to-r from-blue-500/0 to-purple-600/0 group-hover:from-blue-500/5 group-hover:to-purple-600/5 rounded-2xl blur transition-all duration-300"></div>
                    </div>
                </div>
            </div>
            <!-- Основная часть футера -->
            <div class="grid grid-cols-1 lg:grid-cols-4 gap-10 mt-12 mb-12">
                <!-- Колонка с лого и описанием -->
                <div class="lg:col-span-1">
                    <div class="mb-6">
                        <a href="#" class="inline-flex items-center space-x-3 group">
                            <div class="relative">
                                <div class="absolute -inset-3 bg-gradient-to-r from-blue-500 to-purple-600 rounded-2xl blur-xl opacity-20 group-hover:opacity-30 transition-opacity duration-500"></div>
                                <div class="relative w-12 h-12 bg-gradient-to-br from-blue-400 to-purple-500 rounded-xl flex items-center justify-center shadow-lg">
                                    <span class="text-white font-bold text-xl">C</span>
                                </div>
                            </div>
                            <div class="flex flex-col">
                <span class="text-2xl font-bold tracking-tight">
                  <span class="bg-gradient-to-r from-blue-300 via-white to-purple-300 bg-clip-text text-transparent">
                    Cyber<span class="text-white">Sign</span>
                  </span>
                </span>
                                <span class="text-sm text-gray-400 font-medium tracking-wider">DIGITAL SOLUTIONS</span>
                            </div>
                        </a>
                    </div>

                    <p class="text-gray-400 mb-6 leading-relaxed">
                        Создаём инновационные цифровые решения будущего. Превращаем сложные задачи в элегантные и эффективные продукты.
                    </p>

                    <div class="flex space-x-4">
                        <a
                            v-for="social in socialLinks"
                            :key="social.id"
                            :href="social.link"
                            class="relative w-10 h-10 rounded-xl bg-gray-800/50 hover:bg-gray-700/50 border border-gray-700/50 hover:border-blue-500/50 flex items-center justify-center group transition-all duration-300"
                            :aria-label="social.name"
                        >
              <span class="text-gray-300 group-hover:text-white text-lg transition-colors duration-300">
                {{ social.icon }}
              </span>
                            <div class="absolute -inset-1 bg-gradient-to-r from-blue-500/0 to-purple-600/0 group-hover:from-blue-500/10 group-hover:to-purple-600/10 rounded-xl blur-sm transition-all duration-300"></div>
                        </a>
                    </div>
                </div>

                <!-- Быстрые ссылки -->
                <div>
                    <h3 class="text-lg font-semibold text-white mb-6 flex items-center">
                        <span class="w-2 h-2 bg-blue-400 rounded-full mr-3"></span>
                        Навигация
                    </h3>
                    <ul class="space-y-3">
                        <li v-for="link in quickLinks" :key="link.id">
                            <a
                                :href="link.link"
                                class="flex items-center text-gray-400 hover:text-white group transition-colors duration-300"
                            >
                                <svg class="w-4 h-4 mr-3 text-blue-400 opacity-0 group-hover:opacity-100 transition-opacity duration-300" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7" />
                                </svg>
                                <span class="relative">
                  {{ link.title }}
                  <span class="absolute -bottom-1 left-0 w-0 h-0.5 bg-gradient-to-r from-blue-400 to-purple-500 group-hover:w-full transition-all duration-300"></span>
                </span>
                            </a>
                        </li>
                    </ul>
                </div>

                <!-- Услуги -->
                <div>
                    <h3 class="text-lg font-semibold text-white mb-6 flex items-center">
                        <span class="w-2 h-2 bg-purple-400 rounded-full mr-3"></span>
                        Услуги
                    </h3>
                    <ul class="space-y-3">
                        <li v-for="service in services" :key="service.id">
                            <a
                                :href="service.link"
                                class="flex items-center text-gray-400 hover:text-white group transition-colors duration-300"
                            >
                                <div class="w-1 h-1 bg-gradient-to-r from-blue-400 to-purple-500 rounded-full mr-3 opacity-0 group-hover:opacity-100 transition-opacity duration-300"></div>
                                <span>{{ service.title }}</span>
                            </a>
                        </li>
                    </ul>
                </div>

                <!-- Контакты и подписка -->
                <div>
                    <h3 class="text-lg font-semibold text-white mb-6 flex items-center">
                        <span class="w-2 h-2 bg-blue-500 rounded-full mr-3"></span>
                        Контакты
                    </h3>
                    <div class="space-y-4">
                        <div class="flex items-start space-x-3">
                            <div class="w-8 h-8 rounded-lg bg-gradient-to-br from-blue-500/20 to-purple-600/20 flex items-center justify-center">
                                <span class="text-blue-400">📍</span>
                            </div>
                            <div>
                                <p class="text-gray-400 text-sm">г. Москва, ул. Цифровая, 42</p>
                                <p class="text-gray-500 text-xs mt-1">Бизнес-центр "Future Tech"</p>
                            </div>
                        </div>

                        <div class="flex items-start space-x-3">
                            <div class="w-8 h-8 rounded-lg bg-gradient-to-br from-blue-500/20 to-purple-600/20 flex items-center justify-center">
                                <span class="text-blue-400">📧</span>
                            </div>
                            <div>
                                <p class="text-gray-400 text-sm">hello@cybersign.digital</p>
                                <p class="text-gray-500 text-xs mt-1">Ответим в течение 24 часов</p>
                            </div>
                        </div>

                        <!-- Форма подписки -->
                        <div class="mt-6">
                            <p class="text-gray-400 text-sm mb-3">Подпишитесь на обновления</p>
                            <div class="relative">
                                <input
                                    type="email"
                                    placeholder="Ваш email"
                                    class="w-full px-4 py-3 bg-gray-800/50 border border-gray-700/50 rounded-xl text-white placeholder-gray-500 focus:outline-none focus:border-blue-500/50 focus:ring-2 focus:ring-blue-500/20 transition-all duration-300"
                                >
                                <button class="absolute right-2 top-2 px-4 py-1.5 bg-gradient-to-r from-blue-500 to-purple-600 text-white rounded-lg hover:from-blue-600 hover:to-purple-700 transition-all duration-300 text-sm font-medium">
                                    →
                                </button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Разделитель -->
            <div class="relative my-12">
                <div class="absolute inset-0 flex items-center">
                    <div class="w-full border-t border-gray-800/50"></div>
                </div>
                <div class="relative flex justify-center">
                    <div class="px-6 bg-gray-950 text-gray-500 text-sm">
                        <div class="w-6 h-6 mx-auto mb-2 rounded-full bg-gradient-to-r from-blue-500/20 to-purple-600/20 flex items-center justify-center">
                            <span class="text-blue-400 text-xs">⚡</span>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Нижняя часть футера -->
            <div class="flex flex-col md:flex-row justify-between items-center space-y-6 md:space-y-0">
                <div class="text-gray-500 text-sm">
                    © {{ new Date().getFullYear() }} CyberSign Digital. Все права защищены.
                </div>

                <div class="flex items-center space-x-6 text-sm">
                    <a href="#" class="text-gray-400 hover:text-white transition-colors duration-300 relative group">
                        Политика конфиденциальности
                        <span class="absolute -bottom-1 left-0 w-0 h-0.5 bg-gradient-to-r from-blue-400 to-purple-500 group-hover:w-full transition-all duration-300"></span>
                    </a>
                    <a href="#" class="text-gray-400 hover:text-white transition-colors duration-300 relative group">
                        Условия использования
                        <span class="absolute -bottom-1 left-0 w-0 h-0.5 bg-gradient-to-r from-blue-400 to-purple-500 group-hover:w-full transition-all duration-300"></span>
                    </a>
                </div>
            </div>
        </div>

        <!-- Кнопка "Наверх" -->
        <button
            @click="scrollToTop"
            class="fixed bottom-8 right-8 w-12 h-12 rounded-xl bg-gray-900/80 backdrop-blur-md border border-gray-700/50 hover:border-blue-500/50 flex items-center justify-center group transition-all duration-300 z-40"
            aria-label="Наверх"
        >
            <svg class="w-5 h-5 text-gray-400 group-hover:text-white transition-colors duration-300" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 10l7-7m0 0l7 7m-7-7v18" />
            </svg>
            <div class="absolute -inset-1 bg-gradient-to-r from-blue-500/0 to-purple-600/0 group-hover:from-blue-500/10 group-hover:to-purple-600/10 rounded-xl blur transition-all duration-300"></div>
        </button>
    </footer>
</template>

<script setup>
import { ref } from 'vue';

const socialLinks = [
    { id: 1, name: 'Telegram', icon: '📱', link: '#' },
    { id: 2, name: 'GitHub', icon: '💻', link: '#' },
    { id: 3, name: 'LinkedIn', icon: '💼', link: '#' },
    { id: 4, name: 'Dribbble', icon: '🎨', link: '#' },
];

const quickLinks = [
    { id: 1, title: 'Главная', link: '#' },
    { id: 2, title: 'О нас', link: '#' },
    { id: 3, title: 'Проекты', link: '#' },
    { id: 4, title: 'Команда', link: '#' },
    { id: 5, title: 'Карьера', link: '#' },
];

const services = [
    { id: 1, title: 'Веб-разработка', link: '#' },
    { id: 2, title: 'Мобильные приложения', link: '#' },
    { id: 3, title: 'UI/UX Дизайн', link: '#' },
    { id: 4, title: 'AI Решения', link: '#' },
    { id: 5, title: 'Консалтинг', link: '#' },
];

const stats = [
    { id: 1, value: '150+', label: 'Проектов' },
    { id: 2, value: '45+', label: 'Клиентов' },
    { id: 3, value: '3+', label: 'Лет опыта' },
    { id: 4, value: '24/7', label: 'Поддержка' },
];

const scrollToTop = () => {
    window.scrollTo({
        top: 0,
        behavior: 'smooth'
    });
};
</script>

<style scoped>
/* Анимация для фона */
footer::before {
    content: '';
    position: absolute;
    top: 0;
    left: 0;
    right: 0;
    bottom: 0;
    background:
        radial-gradient(circle at 15% 50%, rgba(59, 130, 246, 0.05) 0%, transparent 50%),
        radial-gradient(circle at 85% 30%, rgba(139, 92, 246, 0.05) 0%, transparent 50%);
    z-index: 0;
    pointer-events: none;
}

/* Анимация для сетки точек */
@keyframes float {
    0%, 100% {
        transform: translateY(0px);
    }
    50% {
        transform: translateY(-10px);
    }
}

/* Применяем анимацию к статистическим блокам */
.group:hover .relative {
    animation: float 2s ease-in-out infinite;
}

/* Эффект свечения для формы */
input:focus {
    box-shadow: 0 0 0 3px rgba(59, 130, 246, 0.1), 0 0 20px rgba(59, 130, 246, 0.2);
}

/* Кастомный скроллбар */
::-webkit-scrollbar {
    width: 8px;
}

::-webkit-scrollbar-track {
    background: rgba(17, 24, 39, 0.5);
}

::-webkit-scrollbar-thumb {
    background: linear-gradient(to bottom, #3b82f6, #8b5cf6);
    border-radius: 4px;
}

::-webkit-scrollbar-thumb:hover {
    background: linear-gradient(to bottom, #2563eb, #7c3aed);
}
</style>
