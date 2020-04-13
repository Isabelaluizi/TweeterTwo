<template>
    <div class="container">
        <div class="row" id="show-comment">
        <div id="name" class="col s6"><p><strong>{{name}}:</strong></p></div>
        <div class="col s6"><p>{{getComment}}</p></div>
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
