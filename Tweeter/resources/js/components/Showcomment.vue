<template>
    <div class="col s12  valign-wrapper" id="show-comment">
        <div id="name" class="col s5"><p><strong>{{name}}:</strong></p></div>
        <div class="col s6"><p>{{getComment}}</p></div>
        <div class="col s1 center-align" v-if="this.checkUser" @click="checkDelete()"><button class="waves-effect waves-teal btn-flat green-text text-dark"><i class="material-icons green-text text-lighten-1">delete</i></button></div>
    </div>
</template>

<script>
export default {
    name:'Showcomment',
    props: {
        getComment: {
            type:String
        },
        name: {
            type:String
        },
        userId: {
            type:Number
        },
        nestedCommentId: {
            type:Number
        },

    },
    data() {
        return {
            checkUser: this.checkuserId()
        }

    },
    methods: {
        checkuserId() {
            axios.post('/APICheckUserId', {userId:this.userId})
                .then(response=> {
                    this.checkUser=response.data;
                })
                .catch(error=> {
                    console.log("Error checking user");
                });
            },
        checkDelete() {
            if(confirm("Are you sure that you want to delete your comment?")) {
                axios.post('/APIdeleteNestedComment', { nestedCommentId:this.nestedCommentId })
                .then(response=> {
                    console.log(response.data);
                })
                .catch(error=> {
                    console.log("Error checking user");
                });
            }
        }
    }
}
</script>

<style scoped>
#name {
    color:#1b5e20;
}
#show-comment{
    margin-bottom:0;
    margin-top:0;
    padding-bottom:0;
    padding-top:0;
}

</style>
