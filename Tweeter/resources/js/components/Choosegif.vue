<template>
    <div>
        <img :src="url1">
        <img :src="url2">
        <img :src="url3">
    </div>
</template>

<script>
export default {
    name: 'Choosegif',
    mounted: function() {
            this.$root.$on('getGifs', this.getGifAPI);
    },
    props: {
        url1: {
            type: String,
            default:''
        },
         url2: {
            type: String,
            default:''
        },
         url3: {
            type: String,
            default:''
        }
    },
    methods: {
        getGifAPI(data) {
            axios.get("http://api.giphy.com/v1/gifs/search?&api_key=dHsen7CfIoQw9bI9evWox0GCkFRqCG52&q="+data)
                .then(response=> {
                    this.url1 = response.data.data[0].images.original.url;
                    this.url2 = response.data.data[1].images.original.url;
                    this.url3 = response.data.data[2].images.original.url;
                 })
                 .catch(error=> {
                     console.log ("Error getting gif");
                 });
        }
    },

}
</script>

<style scoped>

</style>
