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

<style>
body,h1,h2,h3,h4,h5,h6 {font-family: "Lato", sans-serif;}
body, html {
    height: 100%;
    color: #777;
    line-height: 1.8;
}

/* Create a Parallax Effect */
.bgimg-2, .bgimg-4, .bgimg-5, .bgimg-6 {
    opacity: 0.9;
    background-attachment: fixed;
    background-position: center;
    background-repeat: no-repeat;
    background-size: cover;
}

/* First image (Logo. Full height) */
.bgimg-1 {
    background-image: url('images/bio.jpg');
    min-height: 100%;
    opacity: 0.9;
    background-color: #fff;
    background-attachment: fixed;
    background-position: center;
    background-repeat: no-repeat;
    background-size: 1550px;
    width: auto;
}

/* Third image (Contact) */
.bgimg-3 {
    background-image: url('images/contact2.png');
    background-color: #fff;
    min-height: 200px;
    min-width: 400px;
    opacity: 0.9;
    background-attachment: fixed;
    background-position: center;
    background-repeat: no-repeat;
    height: auto;
}

/* sixth image (footprint)*/
.bgimg-6 {
    background-image: url('images/rules1.jpg');
    min-height: 350px;
}

.w3-wide {letter-spacing: 10px;}
.w3-hover-opacity {cursor: pointer;}

/* Turn off parallax scrolling for tablets and phones */
@media only screen and (max-width: 1024px) {
    .bgimg-1, .bgimg-2, .bgimg-3, .bgimg-4, .bgimg-5, .bgimg-6 {
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
.w3-navbar {
    list-style-type: none;
    margin: 0;
    padding: 0;
    overflow: hidden;
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


/* Skew Forward */
.hvr-skew-forward {
  display: inline-block;
  vertical-align: middle;
  -webkit-transform: perspective(1px) translateZ(0);
  transform: perspective(1px) translateZ(0);
  box-shadow: 0 0 1px transparent;
  -webkit-transition-duration: 0.3s;
  transition-duration: 0.3s;
  -webkit-transition-property: transform;
  transition-property: transform;
  -webkit-transform-origin: 0 100%;
  transform-origin: 0 100%;

}
.hvr-skew-forward:hover, .hvr-skew-forward:focus, .hvr-skew-forward:active {
  -webkit-transform: skew(-10deg);
  transform: skew(-10deg);
  -webkit-transform: translateX(8px);
  transform: translateX(8px);
}

</style>
<script src="{{ asset('js/app.js') }}"></script>
<body>

<!-- Navbar (sit on top) -->

@if (Session::has('success'))
    <div class="modal fade" id="myModal" tabindex="-1">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                    <h4 class="modal-title" id="myModalLabel">Success!</h4>
                </div>
                <div class="modal-body">
                    {{ Session::get('success') }}
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                </div>
            </div>
        </div>
    </div>
    <script type="text/javascript">
        $('#myModal').modal('show');
    </script>
@endif
<div class="w3-top" data-spy="scroll" style="color:#fff !important">
  <ul class="w3-navbar w3-card-2 w3-animate-top w3-black" style="color:#000;" id="myNavbar">
    <li><a href="#">HOME</a></li>
    <li class="w3-hide-small w3-right">
    <nav class="collapse navbar-collapse navbar-right " role="navigation">
                        <li><a href="{{ url('registernow') }}">Register Now</a></li>
                        <li><a href="#events">Events </a></li>
                    <!--    <li><a href="#cricketteams">Cricket Teams</a></li> -->
                        <li><a href="{{ url('register') }}">Registrations</a></li>
                    <!--    <li><a href="#superoverregistration">SuperOver Registration</a></li>-->
                        <li><a href="#rules">Rules</a></li>
                        <li><a href="#contact">Contact</a></li>
                    @if (Auth::check())
                        <li> <a href="{{ url('/results') }}">Result Entry</a></li>
                        <li> <a href="{{ url('result_view') }}">View Results</a></li>
                   @endif
                    </nav>
                    </li>
  </ul>
</div>
<!-- First Parallax Image with Logo Text -->

<div class="bgimg-1 w3-display-container" id="registernow">
  <div class="w3-display-middle" style="white-space:nowrap;">
<br>
  </div>
</div>

<!-- Container (About Section) -->
<div style=" opacity: 0.7;background-attachment: fixed; background-position: center; background-repeat: no-repeat; background-size: cover; width: auto; background-image:url('images/events.jpg')">

<div id="events" class="w3-content w3-container w3-padding-64" style="color:#000">
  <h3 class="w3-center slideanim">Events</h3>
  <p class="w3-center slideanim"></p>
  <div class="row">
        <table class="table table-striped table-hover table-bordered slideanim" id="event_table" style="background-color: #fff">
        <tr>
            <th>Men</th>
            <th>Women</th>
        </tr>
        <tr>
            <td style="background-color:blue; color:#fff;" >100mtr</td>
            <td style="background-color:green; color:#fff;" >100mtr</td>
        </tr>
        <tr>
            <td style="background-color:blue; color:#fff;" >200mtr</td>
            <td style="background-color:green; color:#fff;" >200mtr</td>
        </tr>
        <tr>
            <td style="background-color:blue; color:#fff;" >400mtr</td>
            <td style="background-color:green; color:#fff;" >400mtr</td>
        </tr>
        <tr>
            <td style="background-color:blue; color:#fff;" >800mtr</td>
            <td style="background-color:green; color:#fff;" >800mtr</td>
        </tr>
        <tr>
            <td style="background-color:blue; color:#fff;" >1500mtr</td>
            <td style="background-color:green; color:#fff;" >1500mtr</td>
        </tr>
        <!--<tr>
            <td style="background-color:blue; color:#fff;" >5000mtr</td>
            <td style="background-color:blue; color:#fff;" >100mtr hurdles</td>
        </tr>-->
        <tr>
            <td style="background-color:blue; color:#fff;" ></td>
            <!--<td style="background-color:blue; color:#fff;" >10000mtr</td>-->
            <td style="background-color:green; color:#fff;" >medley relay</td>
        </tr>
        <tr>
            <td style="background-color:blue; color:#fff;" >110mtr hurdles</td>
            <td style="background-color:green; color:#fff;" >4x100mtr relay</td>
        </tr>
        <tr>
            <td style="background-color:blue; color:#fff;" >400mtr hurdles</td>
            <td style="background-color:green; color:#fff;" >Triple jump</td>
        </tr>
        <tr>
            <td style="background-color:blue; color:#fff;" >4x100mtr relay</td>
            <td style="background-color:green; color:#fff;" >long jump</td>
        </tr>
        <tr>
            <td style="background-color:blue; color:#fff;" >4x400mtr relay</td>
            <td style="background-color:green; color:#fff;" ></td>
        </tr>
        <tr>
            <td style="background-color:blue; color:#fff;" >long jump</td>
            <td style="background-color:green; color:#fff;" >discuss throw</td>
        </tr>
        <tr>
            <td style="background-color:blue; color:#fff;" >high jump</td>
            <td style="background-color:green; color:#fff;" >hammer throw</td>
        </tr>
        <tr>
            <td style="background-color:blue; color:#fff;" >triple jump</td>
            <td style="background-color:green; color:#fff;" >javelin throw</td>
        </tr>
        <tr>
            <td style="background-color:blue; color:#fff;" >shot put</td>
            <td style="background-color:green; color:#fff;" >shot put</td>
        </tr>
        <tr>
            <td style="background-color:blue; color:#fff;" >javelin throw</td>
            <td style="background-color:green; color:#fff;" ></td>
        </tr>
        <tr>
            <td style="background-color:blue; color:#fff;" >Hammer throw</td>
            <td style="background-color:green; color:#fff;" ></td>
        </tr>
        <tr>
            <td style="background-color:blue; color:#fff;" >Discuss throw</td>
            <td style="background-color:green; color:#fff;" ></td>
        </tr>
        </table>
  </div>
</div>
</div>
</div>

<div style=" opacity: 0.7;background-attachment: fixed; background-position: center; background-repeat: no-repeat; background-size: cover; width: auto; background-image:url('images/departments.jpg')">
<div id="departments" class="w3-content w3-container w3-padding-64" style="color:#fff!important">
<h3 class="w3-center w3-container slideanim"></h3>
  <p class="w3-container w3-center slideanim"></p>
  <h2 class="slideanim"><center>Departments</center></h2>
  <br>
  <br>
  <div class="panel-group slideanim"  id="accordion" role="tablist" aria-multiselectable="true">
<div class="panel panel-default" style="background-color:#a52a2a; box-shadow:20px " >
 <div class="panel-heading" role="tab" id="headingOne" style="background-color:#a52a2a ; border-radius:50px;">
    <h4 class="panel-title" style="border-radius:50px; ">
     <a style="border-radius:50px; color:#fff;" class="collapsed" role="button" data-toggle="collapse"  data-parent="#accordion" href="#collapseOne" aria-expanded="false" aria-controls="collapseOne">
        <h3><center>First Year</center></h3>
      </a>
    </h4>
  </div>

  <div id="collapseOne" class="panel-collapse collapse "  role="tabpanel" aria-labelledby="headingOne">
    <div class="panel-body" style= "border-radius:50px;">
        <p><center>BSC BIOTECHNOLOGY</center></p>
        <p><center>BSC MICROBIOLOGY</center></p>
    </div>
  </div>
</div>

<div class="panel panel-default" style="background-color:#a52a2a ">
  <div class="panel-heading" role="tab" id="headingTwo" style="background-color:#a52a2a; border-radius:50px; ">
    <h4 class="panel-title" style="border-radius:50px;">
      <a style="border-radius:50px; color:#fff;"  class="collapsed" role="button" data-toggle="collapse" data-parent="#accordion" href="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
        <h3 ><center>Second Year</center></h3>

      </a>
    </h4>
  </div>
  <div id="collapseTwo" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingTwo">
    <div class="panel-body" style="border-radius:50px;">
        <p><center>BSC BIOTECHNOLOGY</center></p>
        <p><center>BSC MICROBIOLOGY</center></p>
  </div>
</div>
</div>
<div class="panel panel-default" style="background-color:#a52a2a ">
  <div class="panel-heading" role="tab" id="headingThree" style="background-color:#a52a2a; border-radius:50px; ">
    <h4 class="panel-title" style="border-radius:50px;">
      <a style="border-radius:50px; color:#fff;"  class="collapsed" role="button" data-toggle="collapse" data-parent="#accordion" href="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
          <h3><center>Third Year</center></h3>
      </a>
    </h4>
  </div>
  <div id="collapseThree" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingThree">
    <div class="panel-body" style="border-radius:50px;">
        <p><center>BSC BIOTECHNOLOGY</center></p>
        <p><center>BSC MICROBIOLOGY</center></p>
  </div>
</div>
</div>
<div class="panel panel-default" style="background-color:#a52a2a ">
  <div class="panel-heading" role="tab" id="headingFour" style="background-color:#a52a2a; border-radius:50px; ">
    <h4 class="panel-title" style="border-radius:50px;">
      <a style="border-radius:50px; color:#fff;"  class="collapsed" role="button" data-toggle="collapse" data-parent="#accordion" href="#collapseFour" aria-expanded="false" aria-controls="collapseFour">
        <h3 ><center>Msc</center></h3>
      </a>
    </h4>
  </div>
  <div id="collapseFour" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingFour">
    <div class="panel-body" style="border-radius:50px;">
        <p><center>BSC BIOTECHNOLOGY</center></p>
        <p><center>BSC MICROBIOLOGY</center></p>
  </div>
</div>
</div>

</div>
</div>
 </div>

 <div id="rules" class="bgimg-6 w3-display-container">
   <div class="w3-display-middle">
     <span class="w3-xxlarge w3-text-light-grey w3-wide">Rules &  Regulations</span>
   </div>
 </div>


 <!-- Container (Portfolio Section) -->
 <div style="background-color:#000;color:#fff!important;">
 <div  class="w3-content w3-container w3-padding-64">
   <h2 class=" w3-container slideanim">Rules & Regulations</h2>
   <h2 class=" w3-container slideanim">__________________________________________________________________________</h2>
  <!-- <p class="w3-container w3-center " style="background-color:#fff;color:#000!important"></p>-->
  </div>
 <div class="row" style="background-color:#000;color:#fff!important">
   <div class="col-sm-12 col-xs-70" style="background-color:#000;color:#fff!important">
   <div>
       <ul class="col-md-offset-3">
           <li class="fa fa-check"> All students on the rolls of Amrita School Of Biotechnology are eligible to participate.</li><br>
           <li class="fa fa-check"> The sports meet is conducted on Year Basis.</li><br>
           <li class="fa fa-check"> A single student can enter for a maximum of 3 individual items.</li><br>
           <li class="fa fa-check"> An individual event will be conducted only if there is a minimum of 3 participants.</li><br>
           <li class="fa fa-check"> For team events,there can be a maximum of two team per batch. </li><br>
           <li class="fa fa-check"> First, second, and third prizes will be given for each individual item.</li><br>
           <li class="fa fa-check"> The overall championship will be awarded to the year scoring maximum points based on the points for sports events.</li><br>
           <li class="fa fa-check"> Registration will be closed at 2:00pm on 25th Jan</li>
       </ul>

   </div>
 </div>
 </div>
 </div>



<!-- Third Parallax Image with Portfolio Text -->

<!-- Container (Contact Section) -->
<div style="background-color:#fff;">
<div id="contact" class="w3-content w3-container w3-padding-64">
  <h3 class="w3-center slideanim"></h3>
  <div class="container">

    <form class="well form-horizontal slideanim" style="background-color:#000;">
<fieldset style="border-color:#fff; background-color:#000;">

<!-- Form Name -->
<legend style="color:#fff;">Contact Us  !</legend>

<!-- Text input-->

<div class="form-group slideanim">
  <label class="col-md-4 control-label">Name</label>
  <div class="col-md-4 inputGroupContainer">
  <div class="input-group">
  <span class="input-group-addon"><i class="fa fa-user"></i></span>
  <input  name="first_name"  class="form-control"  type="display" style="background-color:#000; color:#fff;" value="KAVITHA (Physical Education Department)" readonly>
    </div>
  </div>
</div>
<!-- Text input-->
<div class="slideanim">
       <div class="form-group ">
  <label class="col-md-4 control-label">E-Mail</label>
    <div class="col-md-4 inputGroupContainer">
    <div class="input-group">
        <span class="input-group-addon"><i class="fa fa-envelope"></i></span>
  <input name="email" class="form-control"  type="display" style="background-color:#000; color:#fff;" value="arjunnmisme@gmail.com" readonly >
    </div>
  </div>
</div>

<!-- Text input-->
<div class="form-group ">
  <label class="col-md-4 control-label">Phone #</label>
    <div class="col-md-4 inputGroupContainer">
    <div class="input-group">
        <span class="input-group-addon"><i class="fa fa-phone-square"></i></span>
  <input name="phone" class="form-control" type="display" style="background-color:#000; color:#fff;" value="9995097178" readonly>
    </div>
  </div>
</div>
</div>
</fieldset>
</div>
</div>
<!-- Text input-->
<!-- Text input-->
<!-- Footer -->
<footer class="w3-center  w3-padding-16  w3-hover-opacity-on" style="background-color:#000;color:white !important">
  <p>Copyright © 2016 | All rights reserved |Developed by <a href="{{ url('/webteam') }}" title="AM.AR.U315BCA0 15,27&67" target="_blank" class="w3-hover-text-green">Web-Team</a></p>
</footer>

<!-- Add Google Maps -->
<script src="https://maps.googleapis.com/maps/api/js"></script>
<script>
<!-- Google Map Location -->
var myCenter = new google.maps.LatLng(9.093855, 76.491880);

function initialize() {
var mapProp = {
  center: myCenter,
  zoom: 12,
  scrollwheel: false,
  draggable: false,
  mapTypeId: google.maps.MapTypeId.ROADMAP
  };

var map = new google.maps.Map(document.getElementById("googleMap"),mapProp);

var marker = new google.maps.Marker({
  position: myCenter,
});

marker.setMap(map);
}

google.maps.event.addDomListener(window, 'load', initialize);

// Modal Image Gallery
function onClick(element) {
  document.getElementById("img01").src = element.src;
  document.getElementById("modal01").style.display = "block";
  var captionText = document.getElementById("caption");
  captionText.innerHTML = element.alt;
}

// Change style of navbar on scroll
window.onscroll = function() {myFunction()};
function myFunction() {
    var navbar = document.getElementById("myNavbar");
    if (document.body.scrollTop > 100 || document.documentElement.scrollTop > 100) {
        navbar.className = "w3-navbar" + " w3-card-2" + " w3-animate-top" + " w3-black";
    } else {
        navbar.className = navbar.className.replace("w3-card-2 w3-animate-top w3-black", "");
    }
}
//any problem remove the below code
$(document).ready(function(){
  // Add smooth scrolling to all links in navbar + footer link
  $(".navbar a, footer a[href='#myPage']").on('click', function(event) {
    // Make sure this.hash has a value before overriding default behavior
    if (this.hash !== "") {
      // Prevent default anchor click behavior
      event.preventDefault();

      // Store hash
      var hash = this.hash;

      // Using jQuery's animate() method to add smooth page scroll
      // The optional number (900) specifies the number of milliseconds it takes to scroll to the specified area
      $('html, body').animate({
        scrollTop: $(hash).offset().top
      }, 900, function(){

        // Add hash (#) to URL when done scrolling (default click behavior)
        window.location.hash = hash;
      });
    } // End if
  });

  $(window).scroll(function() {
    $(".slideanim").each(function(){
      var pos = $(this).offset().top;

      var winTop = $(window).scrollTop();
        if (pos < winTop + 600) {
          $(this).addClass("slide");
        }
    });
  });
})

</script>
</body>
</html>
