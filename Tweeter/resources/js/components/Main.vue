<template>
<div>
    <Header />
    <Body />
    <Footer />
</div>
</template>

<script>
import Header from './Header'
import Body from './Body'
import Footer from './Footer'

    export default {
        name:'Main',
        components: {
            Header,
            Body,
            Footer
        },
        mounted() {
            console.log('');
        }
    }
</script>

<style scoped>

</style>

