<template>
<div>
    <div class="container">
        <br>
        <div class="row">
            <div class="col-xl order-xl-12 align-self-center text-center">
                <h5 class="text-center"><strong>See what’s happening in the world right now</strong></h5>
                 <br>
                <h6 class="text-center"><i>Be connected with family, friends and celebrities, keep up with the news or boost your business.</i></h6>
                <br>
                <a  href="/register" class="btn btn-success text-center btn-large"><h5>Start Now</h5></a>
            </div>
            <div class="col-xl order-xl-1">
            <br>
            <img src="images/bird.jpg" alt="bird" class="rounded mx-auto d-block animated pulse infinite" width=80%>
            <br>
            <br>
            </div>
        </div>
    </div>
    <div id="change-background">
        <div class="container">
            <h1 class="text-title text-center">Why Tweeter?</h1>
            <div class="row row-cols-xl-3">
                <div class="col-xl order-xl-1">
                    <img data-aos="flip-left" src="images/people.png" alt="people" class= "rounded mx-auto d-block" width=60% id="img-people">
                </div>
                <div class="col-xl order-xl-4">
                    <br>
                    <ul class="fa-ul">
                    <li data-aos="zoom-in"><span class="fa-li" ><i class="fas fa-user-plus color-icon" ></i></span><h5 class="text-left"> Be connected with your friends and family no matter where they are</h5></li>
                    <br>
                    <li data-aos="zoom-in" ><span class="fa-li" ><i class="fas fa-blog color-icon"></i></span><h5 class="text-left">Create your microblogging</h5></li>
                    <br>
                    <li data-aos="zoom-in"><span class="fa-li"><i class="fas fa-book-reader color-icon"></i></span><h5 class="text-left">Read, comment and like others opinions</h5></li>
                    <br>
                    <li data-aos="zoom-in"><span class="fa-li"><i class="fas fa-microphone color-icon"></i></span><h5 class="text-left">Know what celebraties are thinking and doing</h5></li>
                    <br>
                    </ul>
                </div>
                <div class="col-xl order-xl-2">
                    <img data-aos="flip-left" src="images/Business.png" alt="Business" class= "rounded mx-auto d-block" width=60% id="img-people">
                </div>
                <div class="col-xl order-xl-5">
                    <br>
                    <ul class="fa-ul">
                    <li data-aos="zoom-in"><span class="fa-li" ><i class="fas fa-dollar-sign color-icon"></i></span><h5 class="text-left">Reach a global audience fast</h5></li>
                    <br>
                    <li data-aos="zoom-in" ><span class="fa-li" ><i class="fas fa-chart-line color-icon"></i></span><h5 class="text-left">Improve customer service</h5></li>
                    <br>
                    <li data-aos="zoom-in" ><span class="fa-li" ><i class="fas fa-chart-pie color-icon"></i></span><h5 class="text-left">Test reaction in the Market</h5></li>
                    </ul>
                </div>
                <div class="col-xl order-xl-3">
                    <img data-aos="flip-left" src="images/news.jpg"  alt="news" width=60% id="img-people" class="rounded mx-auto d-block">
                </div>
                <div class="col-xl order-xl-6">
                    <ul class="fa-ul">
                    <br>
                    <li data-aos="zoom-in"><span class="fa-li" ><i class="fas fa-globe-europe color-icon"></i></span><h5 class="text-left">Keep track of world news</h5></li>
                    <br>
                    <li data-aos="zoom-in"><span class="fa-li" ><i class="fas fa-newspaper color-icon"></i></span><h5 class="text-left">Newspapers, magazine and TV stations</h5></li>
                    <br>
                    </ul>
                </div>
            </div>
        </div>
    </div>
    <div>
        <div class="container">
            <h1 class="text-title text-center">Comments</h1>
            <div class="card" data-aos="fade-right">
                <div class="card-body">
                    <blockquote class="blockquote mb-0">
                        <h5 ><i class="fas fa-quote-left fa-pull-left color-icon fa-sm"></i>Twitter is a great way for friends and family—even those halfway across the world—to stay connected to your daily life. Who needs texting when you've got Twitter?<i class="fas fa-quote-right color-icon fa-sm"></i></h5>
                        <footer class="blockquote-footer">Daniel Nations <cite title="Source Title">Source Lifewire</cite></footer>
                    </blockquote>
                </div>
            </div>
            <br>
            <div class="card" data-aos="fade-right">
                <div class="card-body">
                    <blockquote class="blockquote mb-0">
                        <h5><i class="fas fa-quote-left fa-pull-left color-icon fa-sm"></i>Twitter represents one of the quickest and easiest ways to contact a company to get instant customer service.<i class="fas fa-quote-right color-icon fa-sm"></i></h5>
                        <footer class="blockquote-footer">Dave Parrack <cite title="Source Title">Source Makeuseof</cite></footer>
                </blockquote>
                </div>
            </div>
        </div>
    </div>
</div>
</template>

<script>
export default {
    name:'Body'
}
</script>

<style scoped>
#change-background {
    background-color: #e8f5e9;
    padding-bottom: 1vh;
    padding-top: 3vh;
}
#img-people{
    padding-top:3vh;
    padding-bottom:2vh;
}
.color-icon {
    color:#1b5e20;
}
.text-title {
    font-family: Cookie;
    color:#1b5e20;
    margin-top:3vh;
}
</style>
