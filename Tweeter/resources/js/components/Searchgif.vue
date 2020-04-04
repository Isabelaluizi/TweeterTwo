<template>
<div class="input-field col s12">
    <input class="materialize-textarea" type="text" name="content" value="" v-model="nameGif">
    <label for="searchGif"> <i class="material-icons left">search</i>Search for gif</label>
    <div class="col s12 center-align">
    <div @click="searchForGif" class="waves-effect waves-light btn green lighten-1" id="button-gif">Gif</div>
    </div>
</div>
</template>

<script>
export default {
    name: 'Searchgif',
    data() {
        return {
           nameGif:""
        }
    },
    methods: {
        searchForGif() {
            this.$root.$emit('getGifs',this.nameGif);
        }
    }

}
</script>

<style scoped>

</style>
