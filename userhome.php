<?php
session_start();
include("connection.php");
?>

<?php 
date_default_timezone_set('Asia/Kolkata');
$date =date("Y-m-d");
//echo $date;


?>


<!DOCTYPE html>
<html>
<head>
	<title>Hotel Management</title>
	<link rel="stylesheet" type="text/css" href="admin.css">
</head>
<body>
	<div id="full">
		<div id="bg" style="background-image: url('img/h1.jpg');width: 100%;height: 600px ">
		<div id="header">
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
		<div id="banner"></div>
		</div>
		</div>
		<div id="f1">
			<form action="booking.php" method="post">
			<center><table>
				<tr>
					<th width="20%" height="50px">LOCATION</th>
					<th width="20%" height="50px">CHECK IN</th>
					<th width="20%" height="50px">CHECK OUT</th>
					<th width="20%" height="50px">ROOM TYPE</th>
					<td rowspan="2"><input style="width:150px; height:30px; border-radius: 20px" type="submit" value="CHECK AVAILABILITY" name="submit"></td>
				</tr>
				<tr>
					<td width="20%" height="50px">
						<center><select style="width:70%; height: 35px;border-radius: 4px;" id="location" name='location' required>
							<option>Vizag</option>
							<option>Bangalore</option>
							<option>Hyderabad</option>
						</select></center>
					</td>
					<td width="20%" height="50px">
						<center><input style="width:70% ;height: 30px;border-radius: 4px;" type="date" min=<?php echo $date ?> max="2020-06-30" id="checkin" name="checkin" required></center>
					</td>
					<td width="20%" height="50px">
						<center><input style="width:70%;height: 30px;border-radius: 4px;" type="date" min=<?php echo $date ?> max="2020-06-30" id="checkout" name="checkout" required></center>
					</td>
					<td width="20%" height="50px">
						<center><select style="width:70%;height: 35px;border-radius: 4px;" id="room" name='roomtype' required>
							<option>Normal</option>
							<option>Deluxe</option>
							<option>Super Deluxe</option>
						</select></center>
					</td>
				</tr>
			</table></center>
			</form>


			<?php
			if(isset($_POST['submit']))
			{
				$location=$_POST['location'];
				$checkin=$_POST['checkin'];
				$checkout=$_POST['checkout'];
				$roomtype=$_POST['roomtype'];
				
				$query1="select roomid from room where location='$location' and roomtype='$roomtype'";
				$query1_run=mysqli_query($conn1,$query1);

				$room=mysqli_num_rows($query1_run);

				$query2="select DISTINCT roomid from reservationtable where location='$location' and roomtype='$roomtype'";
				$query2_run=mysqli_query($conn1,$query2);

				$reservation=mysqli_num_rows($query2_run);

				

			
				if($room>$reservation)
				{
					//echo 'available';
					//echo $room;
					//echo $reservation;
					//$location=$_POST['location'];
					
					//$checkin=$_POST['checkin'];
					//$checkout=$_POST['checkout'];
					//$roomtype=$_POST['roomtype'];

					
					//echo'roomavailable1';

					header("location: booking.php");
				}
				else
				{
					
					//echo 'unavailable';
					$query3="select roomid from reservationtable where checkout<'$checkin' and location='$location' and roomtype='$roomtype'";
					$query3_run=mysqli_query($conn1,$query3);
					$room1=mysqli_num_rows($query3_run);
					if($room1>0)
					{
						//echo 'room available';
						header("location: booking.php");
					}
					else
					{
						//echo 'unavailable';
						header("location:unavailable.php");
					}
					
				}

				


				
			}



			?>
		</div>
		<div id="welcome">
			<h1 align="center">WELCOME TO THE HOTEL</h1>
			<center><font size="4">
				Personalization is probably the most important point when it comes to creating descriptions for your hotel’s wide array of media content.

				It is imperative that every single visual (whether it’s a photo, video or virtual tour) has its own, unique caption – no matter how similar they may seem. Your hotel’s rooms with one king-size bed are not identical to the rooms which hold two queen-size beds, so why should your photo descriptions be? Vividly explaining the benefits of staying in an upgraded room can even entice travel shoppers to upgrade!
				<h2 style="color: navy">OUR HOTELS</h2>
			</font></center>
		</div>	
		<div id="g1">
			<div id="one"><img src="img/h6.jpg" width=100% >
			<center><h2>Visaka Hotels</h2>
				<font>Hotel Visaka is amazingly beautiful with a very <br>soothing interior and also a very eco friendly terrace with <br>a warm hospitality. A beautiful place to relax and <br>makes us feel at home. i had a great experience during my<br> stay there. The rooms are very classy with all the <br>facilities to fulfil our needs. The food served there is <br>very delicious.</font>
			</center>
			</div>

			<div id="two"><img src="img/h3.jpg" width=100%>
			<center><h2>Hyder Hotels</h2>
			<font>Hotel Hyder is amazingly beautiful with a very soothing <br>interior and also a very eco friendly terrace with a warm hospitality. A beautiful place to relax and makes us feel at<br> home. i had a great experience during my stay there. The rooms<br> are very classy with all the facilities to fulfil our <br>needs. The food served there is very delicious.
				</font>
			</center>
			</div>
			<div id="three"><img src="img/h4.jpg" width=100%>
			<center><h2>Bang Hotels</h2>
			<font>Hotel Bang is amazingly beautiful with a very soothing<br> interior and also a very eco friendly terrace with a warm <br>hospitality. A beautiful place to relax and makes us feel at <br>home. i had a great experience during my stay there. The rooms<br> are very classy with all the facilities to fulfil our <br>needs. The food served there is very delicious.</font>
			</center>
			</div>
		</div>
	</div>

</body>
</body>
</body>
</html>