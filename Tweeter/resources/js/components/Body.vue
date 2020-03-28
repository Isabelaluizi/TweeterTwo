<template>
<div>
    <div class="container">
        <br>
        <h5 class="text-center"><strong>See what’s happening in the world right now</strong></h5>
        <div class="row">
            <div class="col text-center">
                <br>
                <h6 class="text-center"><i>Be connected with family, friends and celebrities, keep up with the news or boost your business.</i></h6>
                <br>
                <a  href="/register" class="btn btn-success text-center btn-large"><h5>Start Now</h5></a>
            </div>
        </div>
        <div>
            <br>
            <img src="images/bird.jpg" class="rounded mx-auto d-block animated pulse infinite" width=80%>
            <br>
            <br>
        </div>
    </div>
    <div id="change-background">
        <div class="container">
            <div>
                <img data-aos="flip-left" src="images/people.png" class= "rounded mx-auto d-block" width=60% id="img-people">
            </div>
            <div>
                <br>
                <ul class="fa-ul">
                <li data-aos="zoom-in"><span class="fa-li" ><i class="fas fa-user-plus color-icon" ></i></span><h5 class="text-left"> Be connected with your friends and family no matter where they are</h5></li>
                <br>
                <li data-aos="zoom-in" ><span class="fa-li" ><i class="fas fa-blog color-icon"></i></span><h5 class="text-left">Create your microblogging</h5></li>
                <br>
                <li data-aos="zoom-in"><span class="fa-li"><i class="fas fa-book-reader color-icon"></i></span><h5 class="text-left">Read and comment others opinions</h5></li>
                <br>
                <li data-aos="zoom-in"><span class="fa-li"><i class="fas fa-microphone color-icon"></i></span><h5 class="text-left">Know what celebraties are thinking and doing</h5></li>
                <br>
                 </ul>
            </div>
            <div>
                <img data-aos="flip-left" src="images/Business.png" class= "rounded mx-auto d-block" width=60% id="img-people">
            </div>
            <div>
                <ul class="fa-ul">
                <li data-aos="zoom-in"><span class="fa-li" ><i class="fas fa-dollar-sign color-icon"></i></span><h5 class="text-left">Reach a global audience fast</h5></li>
                <br>
                <li data-aos="zoom-in" ><span class="fa-li" ><i class="fas fa-chart-line color-icon"></i></span><h5 class="text-left">Improve customer service</h5></li>
                <br>
                <li data-aos="zoom-in" ><span class="fa-li" ><i class="fas fa-chart-pie color-icon"></i></span><h5 class="text-left">Test reaction in the Market</h5></li>
                 </ul>
            </div>
            <div>
                <img data-aos="flip-left" src="images/news.jpg" class= "rounded mx-auto d-block" width=60% id="img-people">
            </div>
            <div>
                <ul class="fa-ul">
                <br>
                <li data-aos="zoom-in"><span class="fa-li" ><i class="fas fa-globe-europe color-icon"></i></i></span><h5 class="text-left">Keep track of world news</h5></li>
                <br>
                <li data-aos="zoom-in"><span class="fa-li" ><i class="fas fa-newspaper color-icon"></i></span><h5 class="text-left">Newspapers, magazine and TV stations</h5></li>
                <br>
                 </ul>
            </div>
        </div>
    </div>
</div>
</template>

<script>
export default {

}
</script>

<style scoped>
#change-background {
    background-color: #e8f5e9;
    padding-bottom: 3vh;
}
#img-people{
    padding-top:3vh;
    padding-bottom:2vh;
}
.color-icon {
    color:#1b5e20;
}
</style>
