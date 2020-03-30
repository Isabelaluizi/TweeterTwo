<template>
<div @click="updateLike()">
    <p v-if="this.userLiked==false" class=" btn-flat"><i class="material-icons pink-text text-lighten-3">favorite_border</i></p>
    <p v-else class=" btn-flat"><i class="material-icons pink-text text-lighten-3">favorite</i></p>
    <span class="pink-text">{{this.count}}</span>
</div>
</template>

<script>

export default {
    name: 'Like',
    props: ['tweet'],
    data() {
        return {
            userLiked:this.checkLike(),
            count: this.tweet.numLikes,
        }
    },
    methods: {
            checkLike: function() {
                axios.post('/APIcheckLike', this.tweet)
                .then(response=> {
                    this.userLiked=response.data;
                })
                .catch(error=> {
                    console.log("Error checking user");
                });
            },
            updateLike: function() {
                axios.post('/checkUserLiked', this.tweet)
                .then(response=> {
                    this.userLiked=response.data;
                    if(this.userLiked==true) {
                        this.count++;
                    } else {
                        this.count--;
                    }
                })
                .catch(error=> {
                    this.userLiked = "Error checking user";
                });
            }
        }
}

</script>

<style scoped>

</style>
