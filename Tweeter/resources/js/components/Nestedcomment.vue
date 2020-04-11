<template>
<div>
    <Makecomment :comment="this.comment" />
</div>
</template>

<script>
import Makecomment from './Makecomment'

export default {
    name: 'Comment',
    components: {
        Makecomment,
        //Showcomments
    },
    props: ['comment']
}
</script>

<style scoped>

</style>

 //<button class="waves-effect waves-teal btn-flat green-text text-dark" type="submit" name="commentId" value={{$commentInfo['commentId']}}><i class="material-icons green-text text-lighten-1 left">mode_comment</i>Comment</button>
// <input type="hidden" name="tweetId" value={{$tweetInfo['tweetId']}}>

//<button class="waves-effect waves-teal btn-flat green-text text-dark"><i class="material-icons green-text text-lighten-1 left">mode_comment</i>Comment</button>
