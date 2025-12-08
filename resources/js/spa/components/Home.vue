<template>
    <div class="home spa-container">
        <header>
            <div class="logo">
<!--                <img src="/assets/logo.jpg" alt="">-->
            </div>
            <div class="title-block">
                <div class="title">
                    <h2>Lorem-lorem</h2>
                </div>
                <div class="subtitle">Lorem ipsum dolor sit amet, consectetur adipisicing elit. At cum ducimus enim nisi rem reprehenderit soluta veniam veritatis.</div>
            </div>
        </header>
    </div>
</template>

<script>
export default {
    name: 'HomePage'
}
</script>

<style lang="scss" scoped>
.home {
    padding: 20px;
    background: #fff;
    backdrop-filter: blur(10px);
    border-radius: 8px;
    margin-top: 20px;
    header {
        display: flex;
        align-items: flex-start;
        justify-content: flex-start;
        .logo {
            width: 120px;
            height: 120px;
            border-radius: 50%;
            background: gray;
            display: flex;
            align-items: center;
            justify-content: center;
            overflow: hidden;
            img {
                height: 100%;
            }
        }
        .title-block {
            border: 1px solid red;
            padding: 0 0 0 20px;
        }
    }
}
</style>
