<template>
<div>
    <Searchgif />
    <Choosegif />
</div>
</template>

<script>
import Searchgif from './Searchgif'
import Choosegif from './Choosegif'

export default {
    name: 'Giphy',
    components: {
            Searchgif,
            Choosegif
        },
    props: ['tweet']
}
</script>

<style scoped>

</style>
