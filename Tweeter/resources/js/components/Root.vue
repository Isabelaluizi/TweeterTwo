<template>
<div class="container">
    <div class="row">
        <div class="col-4 py-2 px-5">
            <img src="images/twitter-4-48.png">
        </div>
        <div class="col-6 py-3 px-4">
             <h1  id="welcome-text" class="text-link-color" >Tweeter</h1>
        </div>
        <div class="col-2 py-6 px-0">
        <a v-if="this.isLoggedin==true"  href="/home" class="link-color"><h6 class="text-link-color" >Home</h6></a>
        <a v-else-if="this.isLoggedin==false"  href="/login" class="link-color"><h6 class="text-link-color" >Login</h6></a>
        </div>
    </div>
     <div>
        <h6 class="text-center">Be connected with family, friends and celebrities, keep up with the news or boost your business.</h6>
        <a  href="/register" class="link-color text-center"><h4 class="text-link-color">Start Now</h4></a>
        <br>
    </div>
     <div>
        <img src="images/bird.jpg" class="rounded mx-auto d-block" width=80%>
     </div>



<h5>See what’s happening in the world right now</h5>


</div>
</template>

<script>
    export default {
        name:'Root',
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
        mounted() {
            console.log('Component mounted.');
        }
    }
</script>

<style scoped>
.container {
    margin-top:2vh;
}
.link-color {

    color:#a6d785;
}
.text-link-color {
    color: #1b5e20;
}
#welcome-text {
    font-family: Cookie;
}

</style>

