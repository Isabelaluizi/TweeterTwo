<template>
    <div>
        <div>
        {{ getNestedCommentsDB() }}
        </div>
        <Showcomment v-for="nestedComment in nestedComments" :key="nestedComment[0].id" :getComment="nestedComment[0].content" :name="nestedComment.name" :userId="nestedComment[0].user_id" :nestedCommentId="nestedComment[0].id" />
    </div>
</template>

<script>
import Showcomment from './Showcomment'

export default {
    name: 'Showcomments',
    components: {
        Showcomment
    },
    props: ['comment'],
    data() {
        return {
            nestedComments: ''
        }
    },
    methods: {
        getNestedCommentsDB() {
             axios.post('/APIGetNestedComment', { commentId:this.comment.commentId, commentContent:this.comment.comment})
                .then(response=> {
                    this.nestedComments=response.data.nestedCommentsInfo;
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
