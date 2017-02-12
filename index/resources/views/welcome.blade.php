<!DOCTYPE html>
<html>
<title>Amrita Annul Athletic Meet</title>

<!--bootstrap-->
<link rel="stylesheet" href="{{ asset('css/app.css') }}">

<script src="{{ asset('js/app.js') }}"></script>


<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="http://www.w3schools.com/lib/w3.css">
<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Lato">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.6.3/css/font-awesome.min.css">
<link rel="stylesheet" href="{{ asset('css/parsley.css') }}">

<style>
body,h1,h2,h3,h4,h5,h6 {font-family: "Lato", sans-serif;}
body, html {
    height: 100%;
    color: #777;
    line-height: 1.8;
}

/* Create a Parallax Effect */
.bgimg-1 {
    opacity: 0.8;
    background-attachment: fixed;
    background-position: center;
    background-repeat: no-repeat;
    background-size: cover;
}

/* First image (Logo. Full height) */
.bgimg-1 {
    background-image: url('images/cover1.jpg');
    min-height: 100%;
}

.w3-wide {letter-spacing: 10px;}
.w3-hover-opacity {cursor: pointer;}

/* Turn off parallax scrolling for tablets and phones */
@media only screen and (max-width: 1024px) {
    .bgimg-1{
        background-attachment: scroll;
    }
}



.wrapper{
  text-align:center;
  margin:0 auto;
  margin-top:30px;
  width:500px;
  font-family:Helvetica;
  font-size:12px;
}
.wrapper > h1, .wrapper > p{
  margin:0;
}


.face {
    position: absolute;
}


/* code for page content transmision*/


.slideanim {visibility:hidden;}
  .slide {
      animation-name: slide;
      -webkit-animation-name: slide;
      animation-duration: 1s;
      -webkit-animation-duration: 1s;
      visibility: visible;
  }
  @keyframes slide {
    0% {
      opacity: 0;
      transform: translateY(70%);
    }
    100% {
      opacity: 1;
      transform: translateY(0%);
    }
  }
  @-webkit-keyframes slide {
    0% {
      opacity: 0;
      -webkit-transform: translateY(70%);
    }
    100% {
      opacity: 1;
      -webkit-transform: translateY(0%);
    }
  }

/* upto here*/


element {
}
.w3-white, .w3-hover-white:hover {
    color: #fff !important;
    background-color: green !important;
}
.w3-animate-top {
    position: relative;
    -webkit-animation: animatetop 0.4s;
    animation: animatetop 0.4s;
}
.w3-card-2, .w3-example {
    box-shadow: 0 2px 4px 0 rgba(0,0,0,0.16),0 2px 10px 0 rgba(0,0,0,0.12) !important;
}
}


.button {
  display: inline-block;
  border-radius: 4px;
  background-color: #f4511e;
  border: none;
  color: #FFFFFF;
  text-align: center;
  font-size: 28px;
  padding: 20px;
  width: 200px;
  transition: all 0.5s;
  cursor: pointer;
  margin: 5px;
}

.round
    {
        -moz-border-radius: 100px;
        border-radius: 100px;
        padding: 4px;
        background-color: orange;
        color: #000;
        border: 1px solid #fff;
    }

.button span {
  cursor: pointer;
  display: inline-block;
  position: relative;
  transition: 0.5s;
}

.button span:after {
  content: '»';
  position: absolute;
  opacity: 0;
  top: 0;
  right: -20px;
  transition: 0.5s;
}

.button:hover span {
  padding-right: 25px;
}

.button:hover span:after {
  opacity: 1;
  right: 0;
}
</style>
<script src="{{ asset('js/app.js') }}"></script>
<script src="{{ asset('js/parsley.min.js') }}"></script>
<body oncontextmenu="return false" style="background-color:#000;">

<!-- Navbar (sit on top) -->


<div class="w3-top" data-spy="scroll" style="color:#fff !important">
</div>
<!-- First Parallax Image with Logo Text -->

<div class="bgimg-1 w3-display-container">
  <div class="w3-display-middle" style="white-space:nowrap;">
  </div>
  <div class="w3-content w3-container w3-padding-64" style="color:#fff!important">
      <div class="col-md-offset-2">
      <img src="{{asset('images/logo.jpg')}}" alt="" style="no-repeat; width: 600px; height: 100px; ">
  </div>
          <h2 style="color:#900000;background-color:#000"><center>Annual Athletic Meet  <center></h2>
   </div>
  <div class="row">
      <div class="col-sm-4 col-xs-12">
        <div class="panel panel-default text-center thumbnail " style="background-color:#900000">
          <img src="{{asset('images/eng.jpg')}}" alt="...">

             <a href="#"  class="w3-btn w3-section w3-right button" style="vertical-align:middle" type="submit" value="SEND MESSAGE" ><span>REGISTER NOW </span></a>
        </div>
      </div>
    <div class="col-sm-4 col-xs-12">
      <div class="panel panel-default text-center thumbnail " style="background-color:#900000">
        <img src="{{asset('images/bio1.jpg')}}" alt="...">

           <a href="#"  class="w3-btn w3-section w3-right button" style="vertical-align:middle" type="submit" value="SEND MESSAGE" ><span>REGISTER NOW </span></a>
      </div>
    </div>
    <div class="col-sm-4 col-xs-12">
      <div class="panel panel-default text-center thumbnail " style="background-color:#900000">
        <img src="{{asset('images/eng.jpg')}}" alt="...">

           <a href="#"  class="w3-btn w3-section w3-right button" style="vertical-align:middle" type="submit" value="SEND MESSAGE" ><span>REGISTER NOW </span></a>
      </div>
    </div>

</div>
<!-- Footer -->
<footer class="w3-center w3-padding-16 " style="background-color:#000;color:white !important">
      <p>Copyright © 2017 | All rights reserved |Developed by <a href="{{ url('webteam') }}" title="AM.AR.U315BCA0 15,27&67" target="_blank" class="w3-hover-text-green">Web-Team</a></p>
    </footer>

</body>

</html>
