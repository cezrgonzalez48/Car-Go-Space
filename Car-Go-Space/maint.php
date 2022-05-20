<!doctype html>
<?php
include "connection.php";
?>
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
			footer 
			{
			  	text-align: center;
			  	padding: 3px;
			  	background-color: #add8e6;
			  	color: black;
			  	position: absolute;
			  	bottom:0;
			  	width:100%;
			}
			body
			{
				margin: 0;
				padding: 0;
				min-height: 100vh;
				display: flex;
				flex-direction: column;
				
			}
			table,th,tr,td
            {
                border: 1px solid black;
            }
		</style>
		<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">	
<meta charset="utf-8">
<title>maint</title>
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
							<a class="nav-link active position-absolute top-10% end-0" style = "background-color:#add8e6; font-size: 16; font-family: Verdana; color: black" href="signout.php"><img src="loginicon.png" style="width:20px;height:20px;"><b>  Log Out</b></a>
						</li>
							
					</ul>
					</ul>
						
				</div>
				</div>
			</nav>
		<!--End masterpage settings-->
		<br>
		<?php    #shows message on new customer to change their password
			session_start();
		if($_SESSION['customer_pass']==='cgpass'){ ?>
			<h1 align = "center">Please change default password <?php echo $_SESSION['customer_name']; ?></h1><br>
			<form action="edit.php" method="post" align = "center">
			<input type = "text" name="newpass"><input type="submit">
			</form>
		<?php } 
		
		else{ ?>
		<?php     #for returning customers, shows maintenance menu and generates a table showing upcoming mainenance orders
		$custName = $_SESSION['customer_name'];
		$query = "SELECT * FROM maintenance WHERE customer_name ='$custName'";
		$result = mysqli_query($conn, $query);
		?>
		<h1 align="center">Welcome <?php echo $_SESSION['customer_name'];?>, We hope you are enjoying your
				<?php echo $_SESSION['car_model'];?>!!
				</h1><br><br>		
		<h1 align="center">Maintenance Menu</h1>
		<form action="edit.php" method="post" align="center">
  			<label for="maint">Maintenance schedule:</label>
  			<input type="datetime-local" id="maint" name="maint"><br><br>
			<label for="Topic">Category:</label>
    			<select id="TypeMaint" name="TypeMaint">
      				<option value="Category">Please select a routine maintenance option</option>
	   				<option value="Flux">Flux Capacitor (Every 5000 Lightyears)</option>
	   				<option value="Oil">Liquid Cooled Oil (Every 1000 Lightyears)</option>
	   				<option value="Battery">Multi-Verse Battery (As needed)</option>
	   				<option value="Tires">Warp Speed Tires (When below 1/16th" tread )</option>
	   				<option value="Wipers">Solar Windshield Wipers (As needed)</option>
				</select><br><br>
  			<input type="submit">
		</form>
		<br><br>
		<h1 align="center">Maintenance Orders</h1>
			<table style="background-color: white; margin-left:30px; margin-right:30px" align = left>
			<tr>
                <th>Id</th>
                <th>Customer Name</th>
			 	<th>Phone Number</th>
			 	<th>Car Model</th>
			 	<th>Date Scheduled</th>
			 	<th>Work Description</th>
	
            </tr>

            <?php while($row1 = mysqli_fetch_array($result)):;
				#while loop used to populate table results
				?>
            <tr>
                <td><?php echo $row1[0];?></td>
                <td><?php echo $row1[1];?></td>
                <td><?php echo $row1[2];?></td>
                <td><?php echo $row1[3];?></td>
				<td><?php echo $row1[4];?></td>
                <td><?php echo $row1[5];?></td>
				
            </tr>
            <?php endwhile;?>
			</table>
		<?php } ?>
		
		<br><br><br>
		<br><br><br>
		<br><br><br>
		<br><br><br>
		<br><br><br>
		
		<footer>
          <p><b>Authors: Cesar Gonzalez - Leslie De Anda Lopez - Braden Hooper<br>
            <small>&copy; Copyright 2022, Car-Go-Space </small></p>
          <p> <a href="contact-us.php" target="_self" style="color:black">Contact us</a></p>
	</footer>
</body>
</html>
