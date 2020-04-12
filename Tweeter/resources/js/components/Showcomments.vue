<template>
    <div>
        <div>
        {{ getNestedCommentsDB() }}
        </div>
    </div>
</template>

<script>
export default {
    name: 'Showcomments',
    props: ['comment'],
    data() {
        return {
            nestedComment: '',
            userName: ''
        }
    },
    methods: {
        getNestedCommentsDB() {
             axios.post('/APIGetNestedComment', { commentId:this.comment.commentId, commentContent:this.comment.comment})
                .then(response=> {
                    console.log(response.data.nestedComments[0]);
                    console.log(response.data.userNames[0].name);
                    console.log(response.data.nestedComments[1]);
                    console.log(response.data.userNames[1].name);
                    console.log(response.data.nestedComments[2]);
                    console.log(response.data.userNames[2].name);
                    console.log(response.data.nestedComments[3]);
                    console.log(response.data.userNames[3].name);
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
