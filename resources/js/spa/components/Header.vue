<template>
    <header
        class="fixed top-4 left-1/2 -translate-x-1/2 w-full max-w-screen-xl px-4 z-50 transition-all duration-300"
        :class="{ 'top-0 rounded-none px-0': isScrolled }"
    >
        <nav
            class="bg-gray-900/80 backdrop-blur-xl rounded-2xl shadow-2xl border border-gray-700/30 transition-all duration-300"
            :class="{ 'rounded-none border-gray-800/50': isScrolled }"
        >
            <div class="flex items-center justify-between px-6 py-4">
                <!-- Логотип с анимацией -->
                <div class="flex items-center group">
                    <a href="#" class="flex items-center space-x-3">
                        <div class="relative">
                            <!-- Декоративный элемент лого -->
                            <div class="absolute -inset-2 bg-gradient-to-r from-blue-500 to-purple-600 rounded-full blur opacity-20 group-hover:opacity-30 transition-opacity duration-500"></div>
                            <div class="relative w-10 h-10 bg-gradient-to-br from-blue-400 to-purple-500 rounded-xl flex items-center justify-center shadow-lg">
                                <span class="text-white font-bold text-lg">M</span>
                            </div>
                        </div>
                        <div class="flex flex-col">
              <span class="text-xl font-bold tracking-tight">
                <span class="bg-gradient-to-r from-blue-300 via-white to-purple-300 bg-clip-text text-transparent">
                  Cyber<span class="text-white">Sign</span>
                </span>
              </span>
                            <span class="text-xs text-gray-400 font-medium tracking-wider">DIGITAL SOLUTIONS</span>
                        </div>
                    </a>
                </div>

                <!-- Десктопное меню -->
                <ul class="hidden lg:flex items-center space-x-1">
                    <li v-for="item in menuItems" :key="item.id">
                        <a
                            :href="item.link"
                            class="relative px-4 py-2 text-gray-300 hover:text-white font-medium transition-all duration-300 group"
                        >
                            <span class="relative z-10">{{ item.title }}</span>
                            <span class="absolute inset-0 bg-gradient-to-r from-blue-500/0 via-blue-500/10 to-purple-500/0 rounded-lg opacity-0 group-hover:opacity-100 transition-opacity duration-300"></span>
                            <span class="absolute bottom-0 left-1/2 -translate-x-1/2 w-0 h-0.5 bg-gradient-to-r from-blue-400 to-purple-500 group-hover:w-3/4 transition-all duration-300"></span>
                        </a>
                    </li>
                    <li class="ml-4">
                        <button
                            class="relative px-6 py-2.5 rounded-xl overflow-hidden group"
                        >
                            <span class="absolute inset-0 bg-gradient-to-r from-blue-500 to-purple-600"></span>
                            <span class="absolute inset-0 bg-gradient-to-r from-blue-600 to-purple-700 opacity-0 group-hover:opacity-100 transition-opacity duration-300"></span>
                            <span class="relative text-white font-semibold tracking-wide flex items-center space-x-2">
                <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                  <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M11 16l-4-4m0 0l4-4m-4 4h14m-5 4v1a3 3 0 01-3 3H6a3 3 0 01-3-3V7a3 3 0 013-3h7a3 3 0 013 3v1" />
                </svg>
                <span>Войти</span>
              </span>
                        </button>
                    </li>
                </ul>

                <!-- Бургер меню (для мобильных) -->
                <div class="lg:hidden flex items-center">
                    <button
                        @click="toggleMenu"
                        class="relative p-2.5 rounded-xl hover:bg-gray-800/50 transition-all duration-300 group"
                        aria-label="Меню"
                    >
                        <div class="relative w-6 h-5">
              <span
                  class="absolute left-0 w-6 h-0.5 bg-gray-300 rounded-full transition-all duration-300"
                  :class="{
                  'top-0': !isMenuOpen,
                  'top-2 rotate-45': isMenuOpen
                }"
              ></span>
                            <span
                                class="absolute left-0 top-2 w-6 h-0.5 bg-gray-300 rounded-full transition-all duration-300"
                                :class="{
                  'opacity-100': !isMenuOpen,
                  'opacity-0': isMenuOpen
                }"
                            ></span>
                            <span
                                class="absolute left-0 w-6 h-0.5 bg-gray-300 rounded-full transition-all duration-300"
                                :class="{
                  'bottom-0': !isMenuOpen,
                  'top-2 -rotate-45': isMenuOpen
                }"
                            ></span>
                        </div>
                    </button>
                </div>
            </div>

            <!-- Мобильное меню (выпадающее) -->
            <div
                v-if="isMenuOpen"
                class="lg:hidden border-t border-gray-800/50 px-6 py-4 bg-gradient-to-b from-gray-900/80 to-gray-900/95 backdrop-blur-xl"
            >
                <ul class="space-y-1">
                    <li v-for="item in menuItems" :key="item.id">
                        <a
                            :href="item.link"
                            class="flex items-center space-x-3 px-4 py-3 text-gray-300 hover:text-white hover:bg-gray-800/30 rounded-xl transition-all duration-300 group"
                            @click="closeMenu"
                        >
                            <div class="w-1 h-1 bg-blue-400 rounded-full opacity-0 group-hover:opacity-100 transition-opacity duration-300"></div>
                            <span class="font-medium">{{ item.title }}</span>
                            <svg class="w-4 h-4 ml-auto text-gray-500 group-hover:text-blue-400 transition-colors duration-300" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7" />
                            </svg>
                        </a>
                    </li>
                    <li class="pt-2">
                        <button
                            class="w-full px-6 py-3.5 rounded-xl bg-gradient-to-r from-blue-500/20 to-purple-600/20 hover:from-blue-500/30 hover:to-purple-600/30 border border-gray-700 hover:border-blue-500/50 transition-all duration-300 group"
                            @click="closeMenu"
                        >
              <span class="text-white font-semibold flex items-center justify-center space-x-2">
                <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                  <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M16 7a4 4 0 11-8 0 4 4 0 018 0zM12 14a7 7 0 00-7 7h14a7 7 0 00-7-7z" />
                </svg>
                <span>Личный кабинет</span>
              </span>
                        </button>
                    </li>
                </ul>
            </div>
        </nav>
    </header>
</template>

<script setup>
import { ref, onMounted, onUnmounted } from 'vue';

const isMenuOpen = ref(false);
const isScrolled = ref(false);

const menuItems = [
    { id: 1, title: 'Главная', link: '#', icon: '🏠' },
    { id: 2, title: 'Проекты', link: '#', icon: '🚀' },
    { id: 3, title: 'Технологии', link: '#', icon: '💻' },
    { id: 4, title: 'Команда', link: '#', icon: '👥' },
    { id: 5, title: 'Блог', link: '#', icon: '📝' },
    { id: 6, title: 'Контакты', link: '#', icon: '📞' },
];

const toggleMenu = () => {
    isMenuOpen.value = !isMenuOpen.value;
};

const closeMenu = () => {
    isMenuOpen.value = false;
};

const handleScroll = () => {
    isScrolled.value = window.scrollY > 20;
};

const handleClickOutside = (event) => {
    const header = document.querySelector('header');
    if (header && !header.contains(event.target)) {
        closeMenu();
    }
};

const handleResize = () => {
    if (window.innerWidth >= 991) {
        closeMenu();
    }
};

onMounted(() => {
    document.addEventListener('click', handleClickOutside);
    window.addEventListener('resize', handleResize);
    window.addEventListener('scroll', handleScroll);
});

onUnmounted(() => {
    document.removeEventListener('click', handleClickOutside);
    window.removeEventListener('resize', handleResize);
    window.removeEventListener('scroll', handleScroll);
});
</script>

<style scoped>
/* Кастомные стили для темной темы */
::v-deep(body) {
    background: #0f172a;
    min-height: 200vh;
}

/* Эффект свечения при наведении */
button:hover::before {
    content: '';
    position: absolute;
    top: -2px;
    left: -2px;
    right: -2px;
    bottom: -2px;
    background: linear-gradient(45deg, #3b82f6, #8b5cf6, #3b82f6);
    border-radius: inherit;
    z-index: -1;
    animation: glow 2s linear infinite;
}

@keyframes glow {
    0%, 100% {
        opacity: 0.5;
    }
    50% {
        opacity: 1;
    }
}

/* Плавные переходы для блюра */
nav {
    -webkit-backdrop-filter: blur(20px);
    backdrop-filter: blur(20px);
}

/* Декоративные элементы фона */
header::before {
    content: '';
    position: absolute;
    top: 0;
    left: 0;
    right: 0;
    height: 1px;
    background: linear-gradient(90deg, transparent, rgba(59, 130, 246, 0.3), transparent);
    pointer-events: none;
}

/* Эффект параллакса для фона меню */
nav::after {
    content: '';
    position: absolute;
    top: 0;
    left: 0;
    right: 0;
    bottom: 0;
    background:
        radial-gradient(circle at 20% 50%, rgba(59, 130, 246, 0.1) 0%, transparent 50%),
        radial-gradient(circle at 80% 20%, rgba(139, 92, 246, 0.1) 0%, transparent 50%);
    border-radius: inherit;
    z-index: -1;
    pointer-events: none;
}
</style>
