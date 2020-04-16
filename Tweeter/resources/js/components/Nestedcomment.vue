<template>
<div>
    <Makecomment :comment="this.comment" />
    <Showcomments :comment="this.comment" />
</div>
</template>

<script>
import Makecomment from './Makecomment'
import Showcomments from './Showcomments'

export default {
    name: 'Comment',
    components: {
        Makecomment,
        Showcomments
    },
    props: ['comment']
}
</script>

<style scoped>

</style>

