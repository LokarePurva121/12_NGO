<!DOCTYPE html>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="style1.css">
<style>
* {box-sizing: border-box;}
body {font-family: Verdana, sans-serif;}
.mySlides {display: none;}
img {vertical-align: middle;}

/* Slideshow container */
.slideshow-container {

  max-width: 1000px;
  position: relative;
  margin: auto;
}
.photo{
  height: 400px;
  width: 1000px;
  float: left;
  object-fit: cover;

}
.heading{
    color: rgb(179, 7, 7) ;
    text-align: center;
}
/* Caption text */
.text {
  color: #f2f2f2;
  font-size: 15px;
  padding: 8px 12px;
  position: absolute;
  bottom: 8px;
  width: 100%;
  text-align: center;
}

/* Number text (1/3 etc) */
.numbertext {
  color: #f2f2f2;
  font-size: 12px;
  padding: 8px 12px;
  position: absolute;
  top: 0;
}

/* The dots/bullets/indicators */
.dot {
  height: 15px;
  width: 15px;
  margin: 0 2px;
  background-color: #bbb;
  border-radius: 50%;
  display: inline-block;
  transition: background-color 0.6s ease;
}

.active {
  background-color: #717171;
}

/* Fading animation */
.fade {
  -webkit-animation-name: fade;
  -webkit-animation-duration: 1.5s;
  animation-name: fade;
  animation-duration: 1.5s;
}
.line{
width: 112px;
height: 47px;
border-bottom: 3px solid rgb(179, 7, 7) ;
position: center;
margin-left: 46%;

}

.flex-container {
  display: flex;
  align-items: stretch;
  background-color:  rgb(179, 7, 7) ;
  color: white;
}

.flex-container > div {
  background-color: whitesmoke;
  color:rgb(253, 253, 253);
  margin: 1px;
  text-align: center;
  line-height: 170px;
  font-size: 30px;

}
.text{
  text-align: center;
  margin:10px;
}


.photo1{
  border: 5px solid rgb(179, 7, 7);
}

@-webkit-keyframes fade {
  from {opacity: .4} 
  to {opacity: 1}
}

@keyframes fade {
  from {opacity: .4} 
  to {opacity: 1}
}

/* On smaller screens, decrease text size */
@media only screen and (max-width: 300px) {
  .text {font-size: 11px}
}
</style>
</head>
<body>

<h1 class="heading" style="margin-bottom: 1%;">Our Work</h1>


<div class="slideshow-container">

<div class="mySlides fade">
  <img src="health.jpg" class="photo">
</div>

<div class="mySlides fade">
  <img src="protection.jpg" class="photo">
</div>
<div class="mySlides fade">
    <img src="edu1.jpg" class="photo">
  </div>

<div class="mySlides fade">
  <img src="protect_gen.jpg" class="photo">
</div>

</div>
<br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br>

<div style="text-align:center">
  <span class="dot"></span> 
  <span class="dot"></span> 
  <span class="dot"></span> 
  <span class="dot"></span>  
</div><br>
<section class="boxes">
    <div class="box">
        <h3>Health and Nutrition</h3>
       <img src="health.jpg">
        <p>Physical fitness is not only one of the most important keys to a healthy 
          body, it is the basis of dynamic and creative intellectual activity.</p>
    </div>

    <div class="box">
        <h3>Education</h3>
        <img src="edu11.jpg">
        <p>They cannot stop me. I will get my education, if it is in the home, school, or anyplace.</p>
    </div>
    <div class="box">

        <!-- <i class="fab fa-studiovinari fa-4x"></i> -->
        <h3>Child Protection</h3>
        <img src="protection.jpg">
        <p>We worry about what a child will become tomorrow, yet we forget that he is someone today.
</p>
    </div>
    <div class="box">
        <!-- <i class="fas fa-cof fa-4x"></i> -->
        <h3>Protect a Generation</h3>
        <img src="protect_gen.jpg">
        <p>
          We all have a responsibility to protect endangered species, 
          both for their sake and for the sake of our own future generations.
</p>

</section> 
<div class="line" style="margin-bottom: 4%;"></div>


<h1 class="heading">Events And Activities</h1>


<div class="flex-container">
  <img src="teacher.jpg" class="photo1">
  <div style="flex-grow: 1">
    
  </div>
  <h1>Teachers Wokshop</h1>
  <h3>Title: Teachers training and Capacity building workshop in Dharavi <br>Location: Mumbai, Dharavi<br>Time: 2:00 PM To 4:00 PM</h3>
  
</div>
<br>


<div class="flex-container">
  <img src="food1.jpg" class="photo1">
  
  <h1>Food Providing</h1>
  <h3 style="margin-left:70px;">Title: Teachers training and Capacity building workshop in Dharavi <br>Location: Mumbai<br>Time: 12:00 PM</h3>
  
</div>
<br>

<div class="flex-container">
  <img src="health.jpg" class="photo1">
  
  <h1>Health Checkup</h1>
  <h3 style="margin-left:50px;">Title: Health checkup camp for child's in ngo <br>Location: Mumbai<br>Time: 2:00 PM</h3>
  
</div>
<br>
<div class="flex-container">
  <img src="fun.jpg" class="photo1">
  
  <h1>Collect Funds</h1>
  <h3 style="margin-left:90px;">Title: Fund collection for Ngo <br>Location: Mumbai<br>Time: 12:00 PM</h3>
  
</div>
<br>




<!--<div class="flex-container">
  <img src="food1.jpg" class="photo1">
  
  <h1></h1>
  <h3>Title: <br>Location: Mumbai<br>Time: 12 PM</h3>
  
 
 
</div>-->
</body>
</html>

</body>
<script>
var slideIndex = 0;
showSlides();

function showSlides() {
  var i;
  var slides = document.getElementsByClassName("mySlides");
  var dots = document.getElementsByClassName("dot");
  for (i = 0; i < slides.length; i++) {
    slides[i].style.display = "none";  
  }
  slideIndex++;
  if (slideIndex > slides.length) {slideIndex = 1}    
  for (i = 0; i < dots.length; i++) {
    dots[i].className = dots[i].className.replace(" active", "");
  }
  slides[slideIndex-1].style.display = "block";  
  dots[slideIndex-1].className += " active";
  setTimeout(showSlides, 2000); // Change image every 2 seconds
}
</script>


</html> 
