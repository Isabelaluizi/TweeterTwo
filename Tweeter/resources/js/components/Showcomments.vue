<template>
    <div>
        <div>
        {{ getNestedCommentsDB() }}
        </div>
        <div v-for="nestedComment in nestedComments" :key="nestedComment[0].id">
        <Showcomment :getComment="nestedComment[0].content" :name="nestedComment.name" />
        </div>
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
                    //var i;
                    //for (i=0; i<response.data.nestedCommentsInfo.length; i++) {
                    //    this.nestedComments=
                    //     console.log(response.data.nestedCommentsInfo[i][0].content);
                    //     console.log(response.data.nestedCommentsInfo[i].name);
                    //}
                    //console.log(response.data.nestedComments[0].content);
                    //console.log(response.data.userNames[0].name);
                    //console.log(response.data.nestedComments[1].content);
                    //console.log(response.data.userNames[1].name);
                    //console.log(response.data.nestedComments[0].content);
                    //console.log(response.data.userNames[0].name);
                    //console.log(response.data.nestedComments[1].content);
                    //console.log(response.data.userNames[1].name);
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
