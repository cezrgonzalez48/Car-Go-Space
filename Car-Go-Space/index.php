<html>
    <head>
		<style>

			* {box-sizing: border-box}
			body {font-family: Verdana, sans-serif; margin:0}
			.mySlides {display: none}
			img {vertical-align: middle;}

			/* Slideshow container */
			.slideshow-container {
			  max-width: 1000px;
			  position: relative;
			  margin: auto;
			}

			/* Next & previous buttons */
			.prev, .next {
			  cursor: pointer;
			  position: absolute;
			  top: 50%;
			  width: auto;
			  padding: 16px;
			  margin-top: -22px;
			  color: white;
			  font-weight: bold;
			  font-size: 18px;
			  transition: 0.6s ease;
			  border-radius: 0 3px 3px 0;
			  user-select: none;
			}

			/* Position the "next button" to the right */
			.next {
			  right: 0;
			  border-radius: 3px 0 0 3px;
			}

			/* On hover, add a black background color with a little bit see-through */
			.prev:hover, .next:hover {
			  background-color: rgba(0,0,0,0.8);
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
			  cursor: pointer;
			  height: 15px;
			  width: 15px;
			  margin: 0 2px;
			  background-color: #bbb;
			  border-radius: 50%;
			  display: inline-block;
			  transition: background-color 0.6s ease;
			}

			.active, .dot:hover {
			  background-color: #717171;
			}

			/* Fading animation */
			.fade {
			  animation-name: fade;
			  animation-duration: 1.5s;
			  animation-fill-mode: forwards;
			}

			@keyframes fade {
			  from {opacity: .4} 
			  to {opacity: 1}
			}

			/* Navigation bar */
			#navbarNav 
			{
			  text-align: center;
			  margin: 0;	      
			}
			
			ul
			{
			  list-style: none;
			  display: inline-block;
			  text-align: center;
				
			}
			
			ul li
			{
			  float: left;
			  margin: 0 30px;			
			}
			
			footer
			{
			  text-align: center;
			  width:100%;
			  padding: 3px;
			  background-color: #add8e6;
			  color: black;
			  
			  bottom:0;
			}
			
			/* Gallery of buttons */
			#container{
			width: 800px; 
			margin: 0 auto;

			}
			
			div.gallery {
			  margin: 5px;
			  border: 1px solid #ccc;
			  float: left;
			  width: 180px;


			}

			div.gallery:hover {
			  border: 1px solid #777;
			}

			div.gallery img {
			  width: 100%;
			  height: auto;
			}

			div.desc {
			  padding: 15px;
			  text-align: center;
			}
		</style>
		
		<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    
	</head>
	
    <body style="background-color: white;">
		
		<!--Start masterpage settings-->
			<nav class="navbar navbar-expand-lg navbar-light" style = "background-color:#add8e6">
				<div class="container-fluid">
					<a class="navbar-brand" href="index.php" style="color: black; font-size: 25; font-family: Verdana">
					<img src="logo.png" alt="" width="40" height="34" class="d-inline-block align-text-top"> <b>Car-Go-Space</b></a>
					<button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
					<span class="navbar-toggler-icon"></span>
					</button>
				<div class="collapse navbar-collapse" id="navbarNav">
					
					
  
	  <ul class="navbar-nav">
		  				<div class="topnav-centered">
		  				<li class="nav-item">
							<a aria-current="page" href="products.php" style="color: black; font-size: 16; font-family: Verdana; text-decoration: none;"><b>Products</b></a>
						</li>
		  
						<li class="nav-item">
							<a href="customize-and-quote.php" style="color: black; font-size: 16; font-family: Verdana; text-decoration: none;"><b>Customize & Quote</b></a>
						</li>
		  
						<li class="nav-item">
							<a href="contact-us.php" style="color: black; font-size: 16; font-family: Verdana; text-decoration: none;"><b>Contact Us</b></a>
						</li>
		  
		  				<li class="nav-item">
							<a href="dealership.php" style="color: black; font-size: 16; font-family: Verdana; text-decoration: none;"><b>Dealership Locations</b></a>
						</li>
						
					
					
					<ul class= "nav nav-pills" >
						
						<li>
							<a class="nav-link active position-absolute top-10% end-0" style = "background-color:#add8e6; font-size: 16; font-family: Verdana; color: black" href="sign-in.php"><img src="loginicon.png" style="width:20px;height:20px;"><b>  My Account</b></a>
						</li>
							
					</ul>
					</ul>
						
				</div>
				</div>
			</nav>
		
    			<p>&nbsp;</p>
		
		<div class="slideshow-container">

<div class="mySlides fade">
  <div class="numbertext">1 / 5</div>
  <img src="van1.jpg" style="width:100%">
  <div class="text">Today Is Made For Thrill</div>
</div>

<div class="mySlides fade">
  <div class="numbertext">2 / 5</div>
  <img src="interior_s.jpg" style="width:100%">
  <div class="text">Breathtaking Details</div>
</div>

<div class="mySlides fade">
  <div class="numbertext">3 / 5</div>
  <img src="mercedes2_s.jpeg" style="width:100%">
  <div class="text">An Electrifying New Experience</div>
</div>
			
<div class="mySlides fade">
  <div class="numbertext">4 / 5</div>
  <img src="van2.jpg" style="width:100%">
  <div class="text">Gear Up. Head Out.</div>
</div>
			
<div class="mySlides fade">
  <div class="numbertext">5 / 5</div>
  <img src="mercedes_s.jpeg" style="width:100%">
  <div class="text">Something for Everyone</div>
</div>

<a class="prev" onclick="plusSlides(-1)">❮</a>
<a class="next" onclick="plusSlides(1)">❯</a>

</div>
<br>

<div style="text-align:center">
  <span class="dot" onclick="currentSlide(1)"></span> 
  <span class="dot" onclick="currentSlide(2)"></span> 
  <span class="dot" onclick="currentSlide(3)"></span>
  <span class="dot" onclick="currentSlide(4)"></span>
  <span class="dot" onclick="currentSlide(5)"></span> 
</div>

<script>
let slideIndex = 1;
showSlides(slideIndex);

function plusSlides(n) {
  showSlides(slideIndex += n);
}

function currentSlide(n) {
  showSlides(slideIndex = n);
}

function showSlides(n) {
  let i;
  let slides = document.getElementsByClassName("mySlides");
  let dots = document.getElementsByClassName("dot");
  if (n > slides.length) {slideIndex = 1}    
  if (n < 1) {slideIndex = slides.length}
  for (i = 0; i < slides.length; i++) {
    slides[i].style.display = "none";  
  }
  for (i = 0; i < dots.length; i++) {
    dots[i].className = dots[i].className.replace(" active", "");
  }
  slides[slideIndex-1].style.display = "block";  
  dots[slideIndex-1].className += " active";
}
</script>

		<br><br>
		<div id="container">
		<div class="gallery">
  <a target="_self" href="contact-us.php">
    <img src="hear_from_you.jpg" width="600" height="400">
  </a>
  <div class="desc">We want to hear from you!</div>
</div>

<div class="gallery">
  <a target="_self" href="products.php">
    <img src="lineup.jfif" width="600" height="400">
  </a>
  <div class="desc">See our full lineup of vehicles</div>
</div>

<div class="gallery">
  <a target="_self" href="customize-and-quote.php">
    <img src="customm.jpg" width="600" height="400">
  </a>
  <div class="desc">Create your own Car-Go</div>
</div>

<div class="gallery">
  <a target="_self" href=dealership.php>
    <img src="cardealer.jpg" width="600" height="400">
  </a>
  <div class="desc">Let us sweeten the deal. Visit us!</div>
</div>
</div>
		
		<p>&nbsp;</p><p>&nbsp;</p><p>&nbsp;</p>
		<p>&nbsp;</p><p>&nbsp;</p><p>&nbsp;</p>
		<p>&nbsp;</p><p>&nbsp;</p>
		<h1 style="font-size: 60px; text-align: center">Explore All Vehicles</h1>
<p>&nbsp;</p>
		<p>&nbsp;</p>
		<h1 style="font-size: 45px; text-align: center" >Interstella Sedan</h1>
				<p>&nbsp;</p>
		<h2 style="text-align: center">2023 Star 2X</h2>
		<h3 style="text-align: center">The balance of</h3>
		<h3 style="text-align: center">efficiency and power.</h3><br><br>

		
	<p style="text-align: center">
	<img loading="lazy" src="mercedes.png" alt="Mercedes"  height= "50%" width= "50%" >	
	</p>
		<br><br><br><br>
		<p>&nbsp;</p>
		<h2 style="text-align: center">2023 Moon 2X</h2>
		<h3 style="text-align: center">The first-class car that</h3>
		<h3 style="text-align: center">will make you feel like you are flying. </h3><br><br>

		
	<p style="text-align: center">
	<img loading="lazy" src="mercedes2.png" alt="Mercedes"  height= "55%" width= "50%" >	
	</p>
		
		
		<br><br><br><br>
		<p>&nbsp;</p>
		<h2 style="text-align: center">2023 Sea 2X</h2>
		<h3 style="text-align: center">Style. Power.</h3>
		<h3 style="text-align: center">Discovery. Adventure.</h3><br><br>

		
	<p style="text-align: center">
	<img loading="lazy" src="bmw.png" alt="Mercedes" height= "50%" width= "50%" >	
	</p>
				<br><br><br><br>
						<p>&nbsp;</p>
		<h1 style="font-size: 45px; text-align: center" >Galactic SUVs</h1>
				<p>&nbsp;</p>
		<h2 style="text-align: center">2023 Gemini 3S</h2>
		<h3 style="text-align: center">Bolder, edgier,</h3>
		<h3 style="text-align: center">smarter.</h3><br><br>
				
	<p style="text-align: center">
	<img loading="lazy" src="suv.png" height= "55%" width= "50%" >	
	</p>
		<br><br><br><br>
		<p>&nbsp;</p>
		<h2 style="text-align: center">2023 Pisces 3S</h2>
		<h3 style="text-align: center">Gutsy outside.</h3>
		<h3 style="text-align: center"> Glam inside.</h3><br><br>

		
	<p style="text-align: center">
	<img loading="lazy" src="suv1.jpg" height= "70%" width= "50%" >	
	</p>
				<br><br><br><br>
		<p>&nbsp;</p>
		<h2 style="text-align: center">2023 Scorpio 3S</h2>
		<h3 style="text-align: center">Set your sights</h3>
		<h3 style="text-align: center">on new adventures.</h3><br><br>

		
	<p style="text-align: center">
	<img loading="lazy" src="suv2.webp" height= "50%" width= "50%" >	
	</p>
				<br><br><br><br>
						<p>&nbsp;</p>
		<h1 style="font-size: 45px; text-align: center" >Cyber Trucks</h1>
				<p>&nbsp;</p>
		<h2 style="text-align: center">2023 Asteroid 2M</h2>
		<h3 style="text-align: center">Anything seems</h3>
		<h3 style="text-align: center">possible.</h3><br><br>
				
	<p style="text-align: center">
	<img loading="lazy" src="truck1.png" height= "50%" width= "50%" >	
	</p>
				
				<br><br><br><br>
		<p>&nbsp;</p>
		<h2 style="text-align: center">2023 Comet 2M</h2>
		<h3 style="text-align: center">It can’t help but</h3>
		<h3 style="text-align: center">be noticed.</h3><br><br>

		
	<p style="text-align: center">
	<img loading="lazy" src="truck2.webp" height= "50%" width= "50%" >	
	</p>
								<br><br><br><br>
		<p>&nbsp;</p>
		<h2 style="text-align: center">2023 Galaxy 2M</h2>
		<h3 style="text-align: center">Engineered</h3>
		<h3 style="text-align: center">for adventure.</h3><br><br>

		
	<p style="text-align: center">
	<img loading="lazy" src="truck3.png" height= "70%" width= "50%" >	
	</p>
				<p>&nbsp;</p><p>&nbsp;</p>
				
		<!--End masterpage settings-->	
		<footer>
          <p><b>Authors: Cesar Gonzalez - Leslie De Anda Lopez - Braden Hooper<br>
            <small>&copy; Copyright 2022, Car-Go-Space </small></p>
          <p> <a href="contact-us.php" target="_self" style="color:black">Contact us</a></p>
	</footer>
	</body>
</html>