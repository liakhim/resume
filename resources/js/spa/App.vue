<template>
    <div class="spa-container">
        <div class="navigation">
            <nav class="flex gap-2">
                <router-link class="flex content-center text-white-500" to="/spa">Home</router-link> |
                <router-link class="flex content-center" to="/spa/about">About</router-link> |
                <router-link class="flex content-center" to="/spa/sandbox">Sandbox</router-link> |
                <a class="flex content-center" href="/hh/resume.pdf" target="_blank">
                    <span>Stream HeadHunter version</span>
                </a>
                <a class="flex content-center" title="Download HH version" href="/hh/resume.pdf" download="resume.pdf">
                    <span>
                        <svg style="width: 30px;" xmlns="http://www.w3.org/2000/svg" version="1.1" id="圖層_1" x="0" y="0"
                             viewBox="0 0 100 100" xml:space="preserve"><path d="M76.5 90h-53C16 90 10 84 10 76.5v-53C10 16 16 10 23.5 10h53C84 10 90 16 90 23.5v53C90 84 84 90 76.5 90z" fill="#000"/><path
                            id="XMLID_22_"
                            d="M65.9 42.6c.7 0 1 .8.6 1.4L50.6 62c-.2.2-.4.3-.6.3-.2 0-.4-.1-.6-.3L33.5 43.9c-.5-.5-.1-1.4.6-1.4h11.1v-14c0-.6.5-1.1 1.1-1.1h7.5c.6 0 1.1.5 1.1 1.1v14h11z"
                            fill="#fff"/><g><path d="M65.7 72.5H34.3c-.6 0-1-.5-1-1v-4.6c0-.6.5-1 1-1h31.4c.6 0 1 .5 1 1v4.6c.1.5-.4 1-1 1z" fill="#b3b3b3"/></g><metadata
                            xmlns:d="https://loading.io/stock/"><d:name>download</d:name><d:tags>download,receive,cloud,fetch,sync,ftp</d:tags><d:license>by</d:license><d:slug>xzuuwq</d:slug></metadata></svg>
                    </span>
                </a>
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
}
</style>

