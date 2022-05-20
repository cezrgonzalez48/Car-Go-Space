<html>
    <head>
		<style>
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
			.center 
			{
			  display: block;
			  margin-left: auto;
			  margin-right: auto;
			}
			button
			{
			  background-color: #C0C0C0;
			  color: black;
			  padding: 14px 20px;
			  margin: 8px 0;
			  border: none;
			  cursor: pointer;
			  width: 20%;
			}
			footer
			{
			  text-align: center;
			  padding: 3px;
			  background-color: #add8e6;
			  color: black;
			  bottom:0;
			  width:100%;
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
		
		<form action="build.php">
		<br><br>
		
		<img src="location.webp" width="40" height="50" class="center">
		
	<p><center><strong style="font-size:30px">Set your location</strong></center></p>
		
		
		
		<p>
		  <center style="font-size:17px">Enter your Zip Code to find dealers, <br>
		  <center style="font-size:17px">inventory, and special offers near you.</center><br>
		 </p>
		
    <br>
		  
	
			<input type="text" placeholder="Zip Code" name="textfield" id="textfield" style="height:55px">
			
	<button type="submit" style="background-color: #add8e6; border-color: black">Submit</button>
			
		<br><br><br><br>
		<br><br><br><br>
		  
		
			
	<!--End masterpage settings-->	
		
				<footer>
          <p><b>Authors: Cesar Gonzalez - Leslie De Anda Lopez - Braden Hooper<br>
            <small>&copy; Copyright 2022, Car-Go-Space </small></p>
          <p> <a href="contact-us.php" target="_self" style="color:black">Contact us</a></p>
	</footer>
    </body>
</html>