<template>
    <div class="sandbox spa-container">
        <div class="page-preview-wrapper">
            <div class="background-frame"></div>
            <div class="cover-frame">
                <img src="/assets/page.webp" alt="">
            </div>
        </div>
    </div>
</template>

<script>
export default {
    name: 'Sandbox'
}
</script>

<style lang="scss" scoped>
.sandbox {
    font-family: Arial, sans-serif;
    padding: 20px;
    border-radius: 8px;
    margin-top: 20px;
    .page-preview-wrapper {
        width: 970px;
        height: 360px;
        position: relative;
        .background-frame {
            width: 940px;
            height: 360px;
            // background-image: linear-gradient(135deg, #82c91e 23%, #da77f2 52%, #ffaaaa 80%);
            background-image: linear-gradient(135deg, rgba(39, 95, 217, 0.5) 10%, rgba(0, 0, 0, 0) 100%);
            border-radius: 30px;
        }
        .cover-frame {
            position: absolute;
            top: 50px;
            left: -40px;
            width: 470px;
            height: 250px;
            border-radius: 10px;
            overflow: hidden;
            transform: perspective(1500px) rotateY(-20deg) rotateX(5deg) translateZ(0);
            transition: 1s;
            cursor: pointer;
            box-shadow: 0 0 20px rgba(83, 58, 246, 0.5);
            img {
                width: 100%;
            }
            &:hover {
                transform: perspective(1500px) rotateY(5deg) rotateX(5deg) translateZ(0);
            }
        }
    }
}
</style>
