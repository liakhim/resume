<template>
    <div class="spa-container">
        <div class="navigation">
            <nav>
                <router-link to="/spa">Home</router-link> |
                <router-link to="/spa/about">About</router-link> |
                <a href="/pdf/stream" target="_blank">Stream</a>
            </nav>
        </div>
    </div>
    <router-view></router-view>
</template>

<script>
export default {
    name: 'Main',
    components: {},
    methods: {
        test(e) {
            alert(e)
        }
    }
}
</script>

<style>
.spa-container {
    max-width: 1000px;
    margin: 0 auto;
    padding: 20px;
    .navigation {
        display: flex;
        align-items: center;
        justify-content: space-between;
        a {
            color: #fff;
            text-decoration: none;
        }
    }
}
</style>

