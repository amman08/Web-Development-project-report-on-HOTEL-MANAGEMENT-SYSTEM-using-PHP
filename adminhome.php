<?php
session_start();
include("../connection.php");
?>




<!DOCTYPE html>
<html>
<head>
	<title>HM ADMIN HOME</title>
	<link rel="stylesheet" type="text/css" href="../admin.css">
</head>
<body>
	<div id="full">
		<div id="bg" style="background-image: url('h1.jpg');width: 100%;height: 800px ">
		<div id="header1">
			<div id="logo">
				<h1>MY HOTEL</h1>			
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
			
			<h1 style="font-family:Brush Script MT, Brush Script Std, cursive; color: white ">Welcome Admin...</h1>
			<p style="font-family:Brush Script MT, Brush Script Std, cursive; color: white ;font-size: 30px;margin-left: 8%">“The best way to find yourself is <br>to lose yourself in the service of others.”<br> <span style="margin-left: 20%;font-weight: bold;">– Ghandi</span></p>

		<div id="banner" style="background: #12CBC4 ; margin-top: 30%">
			

			<h1 style="font-family:Brush Script MT, Brush Script Std, cursive;font-size: 50px">Users Messages:</h1>

		<table>
			<tr>
					<th bgcolor="#74b9ff" width="10%" height="50px">S.NO</th>
					<th bgcolor="#74b9ff" width="10%" height="50px">NAME</th>
					<th bgcolor="#74b9ff" width="10%" height="50px">EMAIL</th>
					<th bgcolor="#74b9ff" width="10%" height="50px">TEXT</th>
					<th bgcolor="#74b9ff" width="10%" height="50px">DATE</th>
					<th bgcolor="#74b9ff" width="10%" height="50px">STATUS</th>
					
			</tr>

			<?php

				$query3="select * from comments ";
				$query3_run=mysqli_query($conn1,$query3);
				while($row=mysqli_fetch_array($query3_run))
				{
					$sno=$row['sno'];
					$name=$row['name'];
					$email=$row['email'];
					$text=$row['text'];
					$date=$row['datesub'];
					$status=$row['status'];
				
			?>


			<tr>
				<td width="10%" height="50px" style="color: black"><center><?php echo $sno; ?></center></td>
				<td width="10%" height="50px" style="color: black"><center><?php echo $name; ?></center></td>
				<td width="10%" height="50px" style="color: black"><center><?php echo $email; ?></center></td>
				<td width="10%" height="50px" style="color: black"><center><?php echo $text; ?></center></td>
				<td width="10%" height="50px" style="color: black"><center><?php echo $date; ?></center></td>
				<td><center><?php echo $status ?></a></center></td>	
				

				

			</tr>
			<?php

			}
			?>

		</table>

		

		</div>
		
		</div>
		</div>
		

</body>
</body>
</body>
</html>