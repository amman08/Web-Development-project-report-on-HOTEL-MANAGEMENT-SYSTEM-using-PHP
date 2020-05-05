
<?php

session_start();
include("connection.php");

?>



<!DOCTYPE html>
<html>
<head>
	<title>HM SERVICES</title>
	<link rel="stylesheet" type="text/css" href="admin.css">
</head>
<body>
	<div id="full">
		<div id="bg1"  style="background-image: url('img/h1.jpg');width: 100%;height: 1200px">
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

			<div id="form">
				<h2 style="color: white ;margin-left: 8%">SERVICES</h2>
			<table>
				<tr>
					<td>
						<p style="color: white ;margin-left: 8%">

							Hotel services, their number and the amount of people engaged in them depends on the size of the hotel as well as on its status. Typically, the basic hotel services include reception guests, room service, food service, including restaurants in the hotel, and security. Sometimes in the small hotels the duties of security, a cook and a cleaner are performed by the owner himself.� by city-of-hotels.com. Please include a link to the source page: https://www.city-of-hotels.com/165/hotel-services-business.html

						</p>
 					</td>
 				
					
 				</tr>
 				<tr>
					<td>
						<p style="color: white ;margin-left: 8%">

							Other services offered to guests of the hotel, can be considered as bonuses. These are the laundry service, massage room, fitness gyms, conference rooms, lock boxes for valuable assets and many other things. These services can be included in the price of the room or paid separately.<br>

							Recently, the hotel industry trends towards separating the services sector between hotels. Many hotels nowadays offer recreation for a particular group of tourists. Popular family hotels, hotels for the newlyweds and hotels for people with disabilities – each of them has its unique set of services. For example in the family hotel clients are offered services of child care and game rooms. In the hotel for the newlyweds there is a special service for weddings. In the hotel for disabled persons there is medical support service.by city-of-hotels.com. Please include a link to the source page: https://www.city-of-hotels.com/165/hotel-services-business.html


						</p>
 					</td>
 				
					
 				</tr>

 				</table>

 				<div id="service" style="padding-top: 300px ;color: white">
 					<table width="200px">
 						<tr>
 							<th style="width: auto;">CLEANING SERVICE</th>
 							<th style="width: auto">FOOD & BAR SERVICE</th>
 							<th style="width: auto">CUSTOMER SERVICE</th>
 							<th style="width: auto;">CLEAN AIR SERVICE</th>
 						</tr>

 						<tr>
 							<td style="width: auto;"><img src="img/s2.png" width="150px" height="150px"></td>

 							<td style="width: auto;"><img src="img/s4.png" width="150px" height="150px"></td>
 							<td style="width: auto;"><img src="img/s6.png" width="150px" height="150px"></td>
 							<td style="width: auto;"><img src="img/s8.png" width="150px" height="150px"></td>
 						</tr>

 					</table>
 				</div>
					 


		</div>
	</div>
</div>
</div>
</body>
</html>