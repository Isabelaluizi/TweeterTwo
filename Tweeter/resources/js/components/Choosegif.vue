<template>
<div class="container">
        <div class="row">
            <div class="col s12 xl4" @click="removeOthersOne" id="img-one">
                <img :src="url1">
            </div>
            <div class="col s12 xl4"  @click="removeOthersTwo" id="img-two">
                <img :src="url2">
            </div>
            <div class="col s12 xl4" @click="removeOthersThree" id="img-three">
                <img :src="url3">
            </div>
            <div v-if="this.buttonSend" @click="sendToDB"  class="col s12 center-align">
                <div class="waves-effect waves-light btn green lighten-1" >Send</div>
            </div>
        </div>
</div>
</template>

<script>
export default {
    name: 'Choosegif',
    mounted: function() {
            this.$root.$on('getGifs', this.getGifAPI);
    },
    props:{
        tweetId: {
            type: Number,
            required:true
        }
    },
    data() {
        return {
            buttonSend: false,
            url1: '',
            url2: '',
            url3: '',
            selectedGif: ''
        }
    },
    methods: {
        getGifAPI(data) {
            axios.get("https://api.giphy.com/v1/gifs/search?&api_key=dHsen7CfIoQw9bI9evWox0GCkFRqCG52&q="+data)
                .then(response=> {
                    this.url1 = response.data.data[0].images.original.url;
                    this.url2 = response.data.data[1].images.original.url;
                    this.url3 = response.data.data[2].images.original.url;
                    })
                .catch(error=> {
                    this.isLoggedin = "Error checking user";
                });
                },
                removeOthersOne() {
                    var removeImgTwo = document.getElementById("img-two");
                    var removeImgThree = document.getElementById("img-three");
                    removeImgTwo.remove();
                    removeImgThree.remove();
                    this.selectedGif =this.url1;
                    this.buttonSend = true;
                    },
                    removeOthersTwo() {
                        var removeImgOne = document.getElementById("img-one");
                        removeImgOne.remove();
                        var removeImgThree = document.getElementById("img-three");
                        removeImgThree.remove();
                        this.selectedGif =this.url2;
                        this.buttonSend = true;
                    },
                    removeOthersThree() {
                        var removeImgOne = document.getElementById("img-one");
                        removeImgOne.remove();
                        var removeImgTwo = document.getElementById("img-two");
                        removeImgTwo.remove();
                        this.selectedGif =this.url3;
                        this.buttonSend = true;
                    },
                    sendToDB() {
                        axios.post("/fillDB",{tweetId: this.tweetId, url: this.selectedGif})
                .then(response=> {
                    console.log(response);
                    window.location.replace(response.data);
                    })
                .catch(error=> {
                    console.log ("Error sending gif");
                });
                    }

}
}
</script>

<style scoped>

img {
    display: block;
    margin:auto;
    margin-bottom: 2vh;
    width:80%;
}

</style>
