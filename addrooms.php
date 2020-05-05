

<?php
session_start();
include("../connection.php");
?>


<!DOCTYPE html>
<html>
<head>
	<title>HM ADMIN ROOM ADDS</title>
	<link rel="stylesheet" type="text/css" href="../admin.css">
</head>
<body>
	<div id="full">
		<div id="bg1"  style="background-image: url('../img/h1.jpg');width: 100%;height: 600px">
		<div id="header1">
			<div id="logo">
				<h1>MY HOTEL</h1>
				<!--<img src="img/logo1.png" height="15px" width="15px">-->
			</div>	


			<div id="nav">
				<ul>
					<li><a href="adminhome.php">HOME</a></li>
					<li><a href="addrooms.php">ROOM UPDATION</a></li>
					<li><a href="bookinglist.php">BOOKING</a></li>
					<li><a href="roomdetails.php">ROOM DETAILS</a></li>
					<li><a href="adminlogout.php">HELP/LOGOUT</a></li>
				</ul>
				<div style="float: right; color: #c23616;font-weight: bold;"><p> Welcome:<?php echo strtoupper($_SESSION['username']) ?> </p></div>
			</div>
			</div>
		<div id="banner">
			<div id="form">
				<form action="addrooms.php" method="post">
			<table>
				
				<tr>
					<td>ROOM NUMBER</td>
					<td><input type="text" name="roomid" placeholder="Enter Room Number" title="Enter Room Number">
					</td>
					
				</tr>
				<tr>
					<td>ROOM LOCATION</td>
					<td>
						<select name="location">
							<option>--select--</option>
							<option>VIZAG</option>
							<option>HYDERABAD</option>
							<option>BANGALORE </option>						
						</select>
					</td>
					
				</tr>

				
				<tr>
					<td>PRICE</td>
					<td><input type="text" name="price" placeholder="Enter Price" title="Enter Price"></td>
					
				</tr>
				<tr>
					<td>ROOM TYPE</td>
					<td>
						<select name="roomtype">
							<option>--select--</option>
							<option>NORMAL</option>
							<option>DELUXE</option>
							<option>SUPER DELUXE</option>
						</select>
					</td>					
				</tr>
				
				<tr>
					<td></td>
					<td><input style="width:100px; height:30px; border-radius: 20px" type="submit" value="SUBMIT" name="submit"></td>
				</tr>

			</table>
			</form>
			<?php

				if(isset($_POST['submit']))
				{
					$roomid=$_POST['roomid'];
					$location=$_POST['location'];
					$roomtype=$_POST['roomtype'];
					$price=$_POST['price'];

					$query1="insert into room (roomid,location,roomtype,price) values('$roomid','$location','$roomtype','$price')";
					if(mysqli_query($conn1,$query1))
					{
						echo '<script type="text/javascript" > alert("INSERTED")</script>';
					}
					else
					{
						echo '<script type="text/javascript" > alert("NOT INSERTED")</script>';
					}


				}


			?>


			
		</div>
		</div>
		</div>
		</div>

</body>
</html>