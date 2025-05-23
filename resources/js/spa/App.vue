<template>
    <div class="spa-container">
        <nav>
            <router-link to="/spa">Home</router-link> |
            <router-link to="/spa/about">About</router-link> |
            <a href="/pdf/stream" target="_blank">Stream</a>
        </nav>
        <router-view></router-view>
    </div>
</template>

<style>
.spa-container {
    max-width: 1200px;
    margin: 0 auto;
    padding: 20px;
}
</style>
