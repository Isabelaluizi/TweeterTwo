<template>
<div>
    <div class="container">
        <div class="row justify-content-end">
            <div class="col-3 offset-9">
            <a v-if="this.isLoggedin==true"  href="/home" class="btn btn-outline-success btn-small">Home</a>
            <a v-else-if="this.isLoggedin==false"  href="/login" class="btn btn-outline-success btn-small">Login</a>
            </div>
        </div>
        <div class="row">
            <div class="col-4 offset-1 px-5">
                <img src="images/twitter-4-48.png">
            </div>
            <div class="col-7">
                 <h1  id="welcome-text" class="text-title" >Tweeter</h1>
            </div>
        </div>
        <div class="divisor">
            </div>
        <div>
            <br>
            <h6 class="text-center">See what’s happening in the world right now</h6>
        <div class="row">
            <div class="col text-center">
                <br>
                 <h6 class="text-center"><i>Be connected with family, friends and celebrities, keep up with the news or boost your business.</i></h6>
                 <br>
                <a  href="/register" class="btn btn-success text-center btn-large"><h5>Start Now</h5></a>
            </div>
        </div>
        </div>
        <div>
            <img src="images/bird.jpg" class="rounded mx-auto d-block" width=80%>
            <br>
            <br>
        </div>
    </div>
        <div id="change-background">
            <img data-aos="flip-left" src="images/people.png" class= "rounded mx-auto d-block" width=60% id="img-people">
        </div>

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
            console.log('');
        }
    }
</script>

<style scoped>
.container {
    margin-top:2vh;
}

#welcome-text {
    font-family: Cookie;
}
.text-title {
    color:#1b5e20;
}
.divisor{
  border: 1px solid #1b5e20;
    margin-top: 1vh;
}
#change-background {
    background-color: #e8f5e9;
    height:50vh;
}
#img-people{
    padding-top:3vh;
}


	#reveal1 {
		opacity: 0;
		-webkit-transform: scale(0.9);
			 -moz-transform: scale(0.9);
				-ms-transform: scale(0.9);
				 -o-transform: scale(0.9);
						transform: scale(0.9);
		-webkit-transition: all 1s ease-in-out;
			 -moz-transition: all 1s ease-in-out;
				-ms-transition: all 1s ease-in-out;
				 -o-transition: all 1s ease-in-out;
						transition: all 1s ease-in-out;
	}
	#reveal1.visible {
		opacity: 1;
		-webkit-transform: none;
			 -moz-transform: none;
				-ms-transform: none;
				 -o-transform: none;
						transform: none;
	}
</style>

