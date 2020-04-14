<template>
    <div class="container">
        <div class="row  valign-wrapper" id="show-comment">
        <div id="name" class="col s5"><p><strong>{{name}}:</strong></p></div>
        <div class="col s6"><p>{{getComment}}</p></div>
        <div class="col s1 center-align" v-if="this.checkUser"><i class="material-icons green-text text-lighten-1">delete</i></div>
        </div>
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
