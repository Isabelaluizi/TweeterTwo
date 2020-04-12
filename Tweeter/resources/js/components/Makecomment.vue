<template>
<div id="make-comment">
   <button @click="showTextarea()" class="waves-effect waves-teal btn-flat green-text text-dark"><i class="material-icons green-text text-lighten-1 left">mode_comment</i>Comment</button>
   <div class="col s12 center-align" v-if="this.isClicked">
       <br>
    <textarea id="nestedComment" class="materialize-textarea" type="text" v-model="nestedComment"></textarea>
    <label for="nestedComment">Write your comment</label>
    <div>
        <br>
    <button @click="sendCommentDB()" class="waves-effect waves-light btn green lighten-1">Send</button>
    </div>
   </div>
</div>
</template>

<script>
export default {
    name: 'Makecomment',
    props: ['comment'],
    data() {
        return {
            isClicked: false,
            nestedComment:""
        }
    },
    methods: {
        showTextarea() {
            this.isClicked=true;

        },
        sendCommentDB() {
            axios.post('/APInestedComment', { commentId:this.comment.commentId, commentContent:this.comment.comment,tweetId:this.comment.tweetId, nestedComment: this.nestedComment})
                .then(response=> {
                    console.log(response.data);
                })
                .catch(error=> {
                    console.log("Error checking user");
                });
            }
    }
}
</script>

<style scoped>

</style>
