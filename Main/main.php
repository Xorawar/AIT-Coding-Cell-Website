<!DOCTYPE html>
<html lang="en">
<head>
  <title>Competitive Programming</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">
  <link href="https://fonts.googleapis.com/css?family=Montserrat" rel="stylesheet" type="text/css">
  <link href="https://fonts.googleapis.com/css?family=Lato" rel="stylesheet" type="text/css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script>
  <style>
  body {
    font: 400 15px Lato, sans-serif;
    line-height: 1.8;
    color: #818181;
  }
  h2 {
    font-size: 24px;
    text-transform: uppercase;
    color: #303030;
    font-weight: 600;
    margin-bottom: 30px;
  }
  h4 {
    font-size: 19px;
    line-height: 1.375em;
    color: #303030;
    font-weight: 400;
    margin-bottom: 30px;
  }  
  .jumbotron {
    background-color: #f4511e;
    color: #fff;
    padding: 100px 25px;
    font-family: Montserrat, sans-serif;
  }
  .container-fluid {
    padding: 60px 50px;
  }
  .bg-grey {
    background-color: #f6f6f6;
  }
  .logo-small {
    color: #f4511e;
    font-size: 50px;
  }
  .logo {
    color: #f4511e;
    font-size: 200px;
  }
  .thumbnail {
    padding: 0 0 15px 0;
    border: none;
    border-radius: 0;
  }
  .thumbnail img {
    width: 100%;
    height: 100%;
    margin-bottom: 10px;
  }
  .carousel-control.right, .carousel-control.left {
    background-image: none;
    color: #f4511e;
  }
  .carousel-indicators li {
    border-color: #f4511e;
  }
  .carousel-indicators li.active {
    background-color: #f4511e;
  }
  .item h4 {
    font-size: 19px;
    line-height: 1.375em;
    font-weight: 400;
    font-style: italic;
    margin: 70px 0;
  }
  .item span {
    font-style: normal;
  }
  .panel {
    border: 1px solid #f4511e; 
    border-radius:0 !important;
    transition: box-shadow 0.5s;
  }
  .panel:hover {
    box-shadow: 5px 0px 40px rgba(0,0,0, .2);
  }
  .panel-footer .btn:hover {
    border: 1px solid #f4511e;
    background-color: #fff !important;
    color: #f4511e;
  }
  .panel-heading {
    color: #fff !important;
    background-color: #f4511e !important;
    padding: 25px;
    border-bottom: 1px solid transparent;
    border-top-left-radius: 0px;
    border-top-right-radius: 0px;
    border-bottom-left-radius: 0px;
    border-bottom-right-radius: 0px;
  }
  .panel-footer {
    background-color: white !important;
  }
  .panel-footer h3 {
    font-size: 32px;
  }
  .panel-footer h4 {
    color: #aaa;
    font-size: 14px;
  }
  .panel-footer .btn {
    margin: 15px 0;
    background-color: #f4511e;
    color: #fff;
  }
  .navbar {
    margin-bottom: 0;
    background-color: #f4511e;
    z-index: 9999;
    border: 0;
    font-size: 12px !important;
    line-height: 1.42857143 !important;
    letter-spacing: 4px;
    border-radius: 0;
    font-family: Montserrat, sans-serif;
  }
  .navbar li a, .navbar .navbar-brand {
    color: #fff !important;
  }
  .navbar-nav li a:hover, .navbar-nav li.active a {
    color: #f4511e !important;
    background-color: #fff !important;
  }
  .navbar-default .navbar-toggle {
    border-color: transparent;
    color: #fff !important;
  }
  footer .glyphicon {
    font-size: 20px;
    margin-bottom: 20px;
    color: #f4511e;
  }
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
  @media screen and (max-width: 768px) {
    .col-sm-4 {
      text-align: center;
      margin: 25px 0;
    }
    .btn-lg {
      width: 100%;
      margin-bottom: 35px;
    }
  }
  @media screen and (max-width: 480px) {
    .logo {
      font-size: 150px;
    }
  }
  </style>
</head>
<body id="myPage" data-spy="scroll" data-target=".navbar" data-offset="60">

<nav class="navbar navbar-default navbar-fixed-top">
  <div class="container">
    <div class="navbar-header">
      <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>                        
      </button>
      <a class="navbar-brand" href="./cf.html"> <li>CODING CELL</li></a>
    </div>
    <div class="collapse navbar-collapse" id="myNavbar">
      <ul class="nav navbar-nav navbar-right">
        <li><a href="#about">ABOUT</a></li>
        <li><a href="#services">PLATFORMS</a></li>
        <li><a href="#portfolio">GUIDE</a></li>
        <li><a href="#events">COMING EVENTS</a></li>
        <li><a href="#contact">CONTACT</a></li>
	<li><a href="../login/signup.php">LOGIN</a></li>
      </ul>
    </div>
  </div>
</nav>

<div class="jumbotron text-center">
  <h1>AIT CODING CLUB</h1> 
  <p>we are the semicolon to the statements ;</p> 
  <form method = "post" action="connect.php">
    <div class="input-group">
      <input type="email" name ="email" class="form-control" size="50" placeholder="Email Address" >
      <div class="input-group-btn">
        <button type="button" class="btn btn-danger">Subscribe</button>
      </div>
    </div>
  </form>
</div>

<!-- Container (About Section) -->
<div id="about" class="container-fluid">
  <div class="row">
    <div class="col-sm-8">
      <h2>About Club</h2><br>
      <h4>Everyday life is like programming, I guess. If you love something you can put beauty into it. 
	<br><b>By- donald_knuth</h4><br>
      <p>One of the biggest problem faced by newbies in competitive programming is to where to start.... where to study.... where to practice.... etc. etc. This page is particularly made to help these 	guys. We will help you people to start your programming and guide you throughout your journey. We will provide you platform where you can practice coding and will provide you the best study 		material where you can learn at a faster pace. Hope to see you on the Leaderboard.</p>
	<h4><br><b>Happy Coding!! :) </h4>
	<a href="#contact" class="btn btn-default btn-lg" role="button" aria-pressed="true">Get in Touch</a>
    </div>
    <div class="col-sm-4">
      <span class="glyphicon glyphicon-signal logo"></span>
    </div>
  </div>
</div>

<div class="container-fluid bg-grey">
  <div class="row">
    <div class="col-sm-4">
      <span class="glyphicon glyphicon-globe logo slideanim"></span>
    </div>
    <div class="col-sm-8">
      <h2>Our Idea</h2><br>
      <h4><strong>MISSION:</strong> Our mission is to help and mentor our juniors, beginners in programming to become the Red Coders. This will also help them in their placements as well as improve their logical skills.</h4><br>
      <p><strong>VISION:</strong></br> 1. To create more employable Talent.</br> 2.Make People fall in love with Coding.</br> 3. Unlock new Opportunities.</br></p>
    </div>
  </div>
</div>

<!-- Container (Services Section) -->
<div id="services" class="container-fluid text-center">
  <h2>PLATFORMS</h2>
  <h4>What we offer</h4>
  <br>
  <div class="row slideanim">
     <div class="col-sm-4">
	<a href="https://www.hackerrank.com/dashboard" target="_blank"><img src="3.png"alt="hackerrank" height="90" width="150"></a>
	<!--<span class="glyphicon glyphicon-off logo-small"></span> -->
      <h4> <a href="https://www.hackerrank.com/dashboard" target="_blank">HACKERRANK</a> </h4>
      <p>Beginners platform for coding..</p>
    </div>    
    <div class="col-sm-4">
	<a href="https://codeforces.com/" target="_blank"><img src="2.png"alt="codeforces" height="90" width="150"></a>
	<!--<span class="glyphicon glyphicon-off logo-small"></span> -->
      <h4> <a href="https://codeforces.com/" target="_blank">CODEFORCES</a> </h4>
      <p>Best platform to practice and do contests..</p>
    </div>
     <div class="col-sm-4">
	<a href="https://www.codechef.com/" target="_blank"><img src="4.jpeg"alt="codechef" height="90" width="150"></a>
      <!--<span class="glyphicon glyphicon-lock logo-small"></span>-->
      <h4> <a href="https://www.codechef.com/" target="_blank">CODECHEF</a> </h4>
      <p>A perfect start with Long Challenges...</p>
    </div>
  </div>
  <br><br>
  <div class="row slideanim">
    <div class="col-sm-4">
	<a href="https://www.hackerearth.com/challenges/" target="_blank"><img src="5.png"alt="hackerearth" height="80" width="170"></a>
      <!--<span class="glyphicon glyphicon-leaf logo-small"></span>-->
      <h4> <a href="https://www.hackerearth.com/challenges/" target="_blank">HACKEREARTH</a> </h4>
      <p>to practice monthly Circuits...</p>
    </div>
    <div class="col-sm-4">
	<a href="https://www.topcoder.com/my-dashboard" target="_blank"><img src="6.png"alt="topcoder" height="100" width="150"></a>
      <!--<span class="glyphicon glyphicon-leaf logo-small"></span>-->
      <h4> <a href="https://www.topcoder.com/my-dashboard" target="_blank">TOPCODER</a> </h4>
      <p>to practice Ladders...</p>
    </div>
    <div class="col-sm-4">
	<a href="https://www.spoj.com/" target="_blank"><img src="7.jpeg"alt="spoj" height="90" width="120"></a>
      <!--<span class="glyphicon glyphicon-leaf logo-small"></span>-->
      <h4> <a href="https://www.spoj.com/" target="_blank">SPOJ</a> </h4>
      <p>to improve Optimization skills...</p>
    </div>
  </div>
</div>

<!-- Container (Portfolio Section) -->
<div id="portfolio" class="container-fluid text-center bg-grey">
  <h2>Graphs: </h2><br>
  <h4> journey from newbie to master...</h4>
  <div class="row text-center slideanim">
    <div class="col-sm-4">
      <div class="thumbnail">
        <img src="2.jpeg" alt="Xorawar" width="400" height="300">
        <p><strong>Xorawar</strong></p>
        <p>V - Curve</p>
      </div>
    </div>
    <div class="col-sm-4">
      <div class="thumbnail">
        <img src="1.jpg" alt="_nEro_" width="400" height="300">
        <p><strong>_nEro_</strong></p>
        <p>Consistency</p>
      </div>
    </div>
    <div class="col-sm-4">
      <div class="thumbnail">
        <img src="3.jpeg" alt="Ashishgup" width="400" height="300">
        <p><strong>Ashishgup</strong></p>
        <p>Y-axis Value Matters...</p>
      </div>
    </div>
  </div><br>
  
  <h2>Some Quick Tips... </h2>
  <div id="myCarousel" class="carousel slide text-center" data-ride="carousel">
    <!-- Indicators -->
    <ol class="carousel-indicators">
      <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
      <li data-target="#myCarousel" data-slide-to="1"></li>
      <li data-target="#myCarousel" data-slide-to="2"></li>
      <li data-target="#myCarousel" data-slide-to="3"></li>
      <li data-target="#myCarousel" data-slide-to="4"></li>
    </ol>

    <!-- Wrapper for slides -->
    <div class="carousel-inner" role="listbox">
      <div class="item active">
        <h4>As a beginner, start from hackerrank, and practice problems <br> till you get 2500-3000 points on hackerrank.</h4>
      </div>
      <div class="item">
        <h4>After that you may switch to codeforces, and start practicing <br>problems from A level first, and gradually increase <br>your level according to your performance.</h4>
      </div>
      <div class="item">
        <h4>You may also start participating in codeforces contests <br>as well as codechef long challenges which helps a lot in improvement.</h4>
      </div>
      <div class="item">
        <h4>Now on, you should start learning <br>data structure and algorithms.</h4>
      </div>
      <div class="item">
        <h4>AND THE MOST IMPORTANT THING: <br> START INTERACTING WITH YOUR SENIORS, <br> THEY WILL HELP YOU, WHENEVER YOU NEED THEM.</h4>
      </div>
    </div>

    <!-- Left and right controls -->
    <a class="left carousel-control" href="#myCarousel" role="button" data-slide="prev">
      <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
      <span class="sr-only">Previous</span>
    </a>
    <a class="right carousel-control" href="#myCarousel" role="button" data-slide="next">
      <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
      <span class="sr-only">Next</span>
    </a>
  </div>
</div>

<!-- Container (Pricing Section) -->
<div id="events" class="container-fluid">
  <div class="text-center">
    <h2>COMING EVENTS</h2>
    <h4>all upcoming contests at one place...</h4>
  </div>
  <div class="row slideanim">
    <div class="col-sm-4 col-xs-12">
      <div class="panel panel-default text-center">
        <div class="panel-heading">
          <h1>CODE-RED</h1>
        </div>
        <div class="panel-body">
          <p><strong>*</strong> This is a competitive Coding Contest.</p>
          <p><strong>*</strong> It consist of some problem statements with the input and output format.</p>
          <p><strong>*</strong> You have to solve as many problems as possible in time ,less than available time constraint.</p>
          <p><strong>*</strong> Leaderboard Topper will be the Winner.</p>
          <p><strong>:)</strong> See you at Leaderboard.</p>
        </div>
        <div class="panel-footer">
          <h3>Rs. 100</h3>
          <h4>per Team</h4>
          <button class="btn btn-lg">Register</button>
        </div>
      </div>      
    </div>     
    <div class="col-sm-4 col-xs-12">
      <div class="panel panel-default text-center">
        <div class="panel-heading">
          <h1>Debugger</h1>
        </div>
        <div class="panel-body">
          <p><strong>*</strong> This is a competitive Debugging Contest.</p>
          <p><strong>*</strong> It consist of some problem statements and their buggy solutions as well.</p>
          <p><strong>*</strong> You have to rectify bugs for as many problems as possible in least time.</p>
          <p><strong>*</strong> Leaderboard Topper will be the Winner.</p>
          <p><strong>:)</strong> See you at Leaderboard.</p>
        </div>
        <div class="panel-footer">
          <h3>Rs. 100</h3>
          <h4>per Team</h4>
          <button class="btn btn-lg">Register</button>
        </div>
      </div>      
    </div>       
    <div class="col-sm-4 col-xs-12">
      <div class="panel panel-default text-center">
        <div class="panel-heading">
          <h1>Retracer</h1>
        </div>
        <div class="panel-body">
          <p><strong>*</strong> This is a Reverse Coding Contest.</p>
          <p><strong>*</strong> You will be given some .out files, using them you have to write code.</p>
          <p><strong>*</strong> You have to reverse code for as many problems as possible in least time.</p>
          <p><strong>*</strong> Leaderboard Topper will be the Winner.</p>
          <p><strong>:)</strong> See you at Leaderboard.</p>
        </div>
        <div class="panel-footer">
          <h3>Rs. 100</h3>
          <h4>per Team</h4>
          <button class="btn btn-lg">Register</button>
        </div>
      </div>      
    </div>    
  </div>
</div>

<!-- Container (Contact Section) -->
<div id="contact" class="container-fluid bg-grey">
  <h2 class="text-center">CONTACT</h2>
  <div class="row">
    <div class="col-sm-5">
      <p>Contact us and we'll get back to you within 24 hours.</p>
      <p><span class="glyphicon glyphicon-map-marker"></span> Pune, Maharastra</p>
      <p><span class="glyphicon glyphicon-phone"></span> +00 1515151515</p>
      <p><span class="glyphicon glyphicon-envelope"></span> codingcell@gmail.com</p>
    </div>
    <div class="col-sm-7 slideanim">
      <div class="row">
        <div class="col-sm-6 form-group">
          <input class="form-control" id="name" name="name" placeholder="Name" type="text" required>
        </div>
        <div class="col-sm-6 form-group">
          <input class="form-control" id="email" name="email" placeholder="Email" type="email" required>
        </div>
      </div>
      <textarea class="form-control" id="comments" name="comments" placeholder="Comment" rows="5"></textarea><br>
      <div class="row">
        <div class="col-sm-12 form-group">
          <button class="btn btn-default pull-right" type="submit">Send</button>
        </div>
      </div>
    </div>
  </div>
</div>

<!-- Image of location/map -->
<!-- <img src="10.jpeg" class="w3-image w3-greyscale-min" style="width:100%"> -->

<footer class="container-fluid text-center">
  <a href="#myPage" title="To Top">
    <span class="glyphicon glyphicon-chevron-up"></span>
  </a>
  <p>Bootstrap Theme Made By <a href="https://codeforces.com/profile/Xorawar" title="Sachin Yadav">Xorawar</a></p>
</footer>

<script>
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

