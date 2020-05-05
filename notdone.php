<?php
session_start();
include("connection.php");
?>



<!DOCTYPE html>
<html>
<head>
	<title>HM NOT DONE</title>
	<link rel="stylesheet" type="text/css" href="admin.css">
</head>
<body>
	<div id="full">
		<div id="bg1"  style="background-image: url('img/h1.jpg');width: 100%;height: 800px">
		<div id="header" >
			<div id="logo">
				<h1>MY HOTEL</h1>
				
			</div>	


			<div id="nav">
				<ul>
					<li><a href="userhome.php">HOME</a></li>
					<li><a href="userservices.php">SERVICES</a></li>
					<li><a href="usercontact.php">CONTACT US</a></li>
					<li><a href="userhistory.php">BOOKED DETAILS</a></li>
					<li><a href="userlogout.php">LOGOUT</a></li>
				</ul>
				<div style="float: right; color: navy;font-weight: bold;"><p> Welcome:<?php echo strtoupper($_SESSION['username']) ?> </p></div>
				
			</div>
			</div>
		<div id="banner">
			<h1 style="font-family:Brush Script MT, Brush Script Std, cursive; color: white ;margin-left: 8%;margin-top: 10% "><span style="color: red">ROOM  NOT BOOKED ....ERROR OCCURED</span></h1>
 
	</div>
</div>
</div>
</body>
</html>