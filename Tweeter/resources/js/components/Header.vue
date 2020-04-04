<template>
<div class="sticky-top" id="header">
<div class="container">
    <div class="row justify-content-end">
        <div class="col-3 col-xl-1 offset-9 offset-xl-11">
            <a v-if="this.isLoggedin==true"  href="/home" class="btn btn-outline-success btn-small">Home</a>
            <a v-else-if="this.isLoggedin==false"  href="/login" class="btn btn-outline-success btn-small">Login</a>
        </div>
    </div>
    <div class="row">
        <div class="col-4 offset-1 px-5">
            <img src="images/twitter-4-48.png" alt="tweeter">
        </div>
        <div class="col-7">
             <h1 class="text-title">Tweeter</h1>
        </div>
    </div>
    <div class="divisor">
    </div>
</div>
</div>
</template>

<script>
export default {
    name: 'Header',
    data() {
            return {
                isLoggedin: this.checkUserLogin()
            }
        },
        methods: {
            checkUserLogin: function() {
                axios.get('/checkUserLogin')
                .then(response=> {
                    this.isLoggedin = response.data;
                })
                .catch(error=> {
                    this.isLoggedin = "Error checking user";
                });
            }
        },
}
</script>

<style scoped>
.container {
    padding-top:2vh;
    background-color:white;
}

.text-title {
    font-family: Cookie;
    color:#1b5e20;
}
.divisor{
  border: 1px solid #1b5e20;
    margin-top: 1vh;
}
#header{
    background-color:white;
     z-index: 1;
}
</style>
