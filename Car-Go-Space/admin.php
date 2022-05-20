<!doctype html>
<html>
<head>
<style>
	#navbarNav 
			{
			  text-align: center;
		      
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
			<meta charset="UTF-8">

        	<meta name="viewport" content="width=device-width, initial-scale=1.0">
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
							<a class="nav-link active position-absolute top-10% end-0" style = "background-color:#add8e6; font-size: 16; font-family: Verdana; color: black" href="sign-in.php"><img src="loginicon.png" style="width:20px;height:20px;"><b>  Sign Out</b></a>
						</li>
							
					</ul>
					</ul>
						
				</div>
				</div>
			</nav>
		<!--End masterpage settings-->
		<br>
		<h1 align="center">Admin Page</h1>
		<form action="admin.php" style="margin-left:auto; margin-right:auto" method="post">
			<input type="radio" value = "customer_details" id="customer_details" name="open"/>
			<label for="customer_details">Customer Details</label><br><br>
			<input type="radio" value = "contact_us" id="contact_us" name="open"/>
			<label for="contact_us">Contact Us</label><br><br>
			<input type="radio" value = "orders" id="orders" name="open"/>
			<label for="orders">Orders</label><br><br>
			<input type="radio" value = "maintenance" id="maintenance" name="open"/>	
			<label for="customer_details">Maintenance Orders</label><br><br>
			<input type="submit" value="Open">
			<br><br><br><br>
		</form>
		<?php    #button script, opens table data depending on which button selected.
		$button = "";
		include "connection.php";
		if(isset($_POST['open'])){
			$button = $_POST['open'];
			$query = "SELECT * FROM $button";
			$result = mysqli_query($conn, $query);
		}?>

		
		 
		<?php if($button === 'customer_details'){     #if customer details button selected, populates table
				?>
		<h1 align="center">Customer Details</h1><br>
		<table style="background-color: white; margin-left:30px; margin-right:30px" align = left>
			<tr>
				<th>Id</th>
                <th>Customer ID</th>
                <th>Customer Name</th>
                <th>Email Address</th>
			 	<th>Phone Number</th>
			 	<th>Car Model</th>
	
            </tr>

            <?php while($row1 = mysqli_fetch_array($result)):;?>
            <tr>
                <td><?php echo $row1[0];?></td>
                <td><?php echo $row1[1];?></td>
                <td><?php echo $row1[2];?></td>
                <td><?php echo $row1[3];?></td>
                <td><?php echo $row1[5];?></td>
                <td><?php echo $row1[6];?></td>
				
            </tr>
            <?php endwhile;?>
			</table>
			<br><br>
			<h1 align="center">Add New Customer</h1><br>
			<table style="background-color: white; margin-left:30px; margin-right:30px" align = left>
				<tr>
                	<th>Customer ID</th>
                	<th>Customer Name</th>
                	<th>Email Address</th>
			 		<th>Phone Number</th>
			 		<th>Car Model</th>
            	</tr>
				<form action="edit.php" method="post">
				<tr>
					<td><input type="text" name="customerID"></td>
                	<td><input type="text" name="customerName"></td>
                	<td><input type="text" name="customerEmail"></td>
                	<td><input type="text" name="customerPhone"></td>
                	<td><input type="text" name="customerCar"></td>
					<td><input type="submit" value="add"></td>
				</tr>
				</table>
				
				</form>
		
			<?php } ?>
			
			<?php if($button === 'contact_us'){     #if contact us button selected, populates table
				?>
			<h1 align="center">Contact Us</h1><br>
			<table style="background-color: white; margin-left:30px; margin-right:30px" align = left>
			<tr>
                <th>Id</th>
                <th>First Name</th>
                <th>Last Name</th>
                <th>Email Address</th>
			 	<th>Phone Number</th>
			 	<th>Country</th>
			 	<th>Category</th>
			 	<th>Comment</th>
	
            </tr>

            <?php while($row1 = mysqli_fetch_array($result)):;?>
            <tr>
                <td><?php echo $row1[0];?></td>
                <td><?php echo $row1[1];?></td>
                <td><?php echo $row1[2];?></td>
                <td><?php echo $row1[3];?></td>
				<td><?php echo $row1[4];?></td>
                <td><?php echo $row1[5];?></td>
                <td><?php echo $row1[6];?></td>
                <td><?php echo $row1[7];?></td>
				
            </tr>
            <?php endwhile;?>
			</table><br>
			<form action = "edit.php" method = "post">
				<label for="Delete" style=" margin-left:30px;">ID Number:</label>
			<input type = "text" name = "Id" value = "" size = "3"/>
			<input type = "submit" value = "Delete"/>
			</form>
			<?php } ?>
			
			<?php if($button === 'maintenance'){   #if maintenance button selected, populates table
				?>
			<h1 align="center">Maintenance Orders</h1><br>
			<table style="background-color: white; margin-left:30px; margin-right:30px" align = left>
			<tr>
                <th>Id</th>
                <th>Customer Name</th>
			 	<th>Phone Number</th>
			 	<th>Car Model</th>
			 	<th>Date Scheduled</th>
			 	<th>Work Description</th>
	
            </tr>

            <?php while($row1 = mysqli_fetch_array($result)):;?>
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
			
			<?php if($button === 'orders'){   #if orders button selected, populates table
				?>
			<h1 align="center">Orders</h1><br>
			<table style="background-color: white; margin-left:30px; margin-right:30px" align = left>
			<tr>
                <th>Id</th>
                <th>Order Number</th>
                <th>Customer Name</th>
                <th>Dealership Location</th>
			 	<th>Car Model</th>
			 	<th>Delivery Status</th>
			 	<th>Delivery Date</th>
	
            </tr>

            <?php while($row1 = mysqli_fetch_array($result)):;?>
            <tr>
                <td><?php echo $row1[0];?></td>
                <td><?php echo $row1[1];?></td>
                <td><?php echo $row1[2];?></td>
                <td><?php echo $row1[3];?></td>
				<td><?php echo $row1[4];?></td>
                <td><?php echo $row1[5];?></td>
                <td><?php echo $row1[6];?></td>
				
            </tr>
            <?php endwhile;?>
			</table>
			<?php } ?>

        
		
			
			
		
			
        <br><br>
		
			
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
