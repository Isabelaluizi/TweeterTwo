<template>
<div>
    <Header />
    <Body />
</div>
</template>

<script>
import Header from './Header'
import Body from './Body'

    export default {
        name:'Root',
        components: {
            Header,
            Body,
            //Footer
        },
        mounted() {
            console.log('');
        }
    }
</script>

<style scoped>

</style>

