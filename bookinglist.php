<?php
session_start();
include("../connection.php");
?>




<!DOCTYPE html>
<html>
<head>
	<title>HM ADMIN BOOKED DETAILS</title>
	<link rel="stylesheet" type="text/css" href="../admin.css">
</head>
<body>
	<div id="full">
		<div id="bg"> 
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
		<div>
			<h2>Booking Details of Customers:</h2>
		<table>
			<tr>
					<th bgcolor="#74b9ff" width="10%" height="50px">RES ID</th>
					<th bgcolor="#74b9ff" width="10%" height="50px">DATE OF BOOKING</th>
					<th bgcolor="#74b9ff" width="10%" height="50px">USER ID</th>
					<th bgcolor="#74b9ff" width="10%" height="50px">NAME</th>
					<th bgcolor="#74b9ff" width="10%" height="50px">GENDER</th>
					<th bgcolor="#74b9ff" width="10%" height="50px">ROOM ID</th>
					<th bgcolor="#74b9ff" width="10%" height="50px">LOCATION</th>
					<th bgcolor="#74b9ff" width="10%" height="50px">ROOM TYPE</th>					
					<th bgcolor="#74b9ff" width="10%" height="50px">CHECK IN</th>
					<th bgcolor="#74b9ff" width="10%" height="50px">CHECK OUT</th>
					<th bgcolor="#74b9ff" width="10%" height="50px">MEMBERS</th>
					<th bgcolor="#74b9ff" width="10%" height="50px">AMOUNT</th>
					<th bgcolor="#74b9ff" width="10%" height="50px">PAYMENT</th>
					<th bgcolor="#74b9ff" width="10%" height="50px">BALANCE</th>
					<th bgcolor="#74b9ff" width="10%" height="50px">CO UPDATE</th>
			</tr>

			<?php

				$query3="select * from reservationtable order by  checkin asc";
				$query3_run=mysqli_query($conn1,$query3);
				while($row=mysqli_fetch_array($query3_run))
				{
					$resid=$row['resid'];
					$dob=$row['bookingdate'];
					$userid=$row['userid'];
					$fullname=$row['fullname'];
					$gender=$row['gender'];
					$roomid=$row['roomid'];
					$location=$row['location'];
					$roomtype=$row['roomtype'];
					$checkin=$row['checkin'];
					$checkout=$row['checkout'];
					$members=$row['members'];
					$amount=$row['amount'];
					$payment=$row['payment'];
					$balance=$row['balance'];
					$status=$row['status'];
				
			?>


			<tr>
				<td width="10%" height="50px" style="color: black"><center><?php echo $resid; ?></center></td>
				<td width="10%" height="50px" style="color: black"><center><?php echo $dob; ?></center></td>
				<td width="10%" height="50px" style="color: black"><center><?php echo $userid; ?></center></td>
				<td width="10%" height="50px" style="color: black"><center><?php echo $fullname; ?></center></td>
				<td width="10%" height="50px" style="color: black"><center><?php echo $gender; ?></center></td>	
				<td width="10%" height="50px" style="color: black"><center><?php echo $roomid; ?></center></td>	
				<td width="10%" height="50px" style="color: black"><center><?php echo $location; ?></center></td>	
				<td width="10%" height="50px" style="color: black"><center><?php echo $roomtype; ?></center></td>	
				<td width="10%" height="50px" style="color: black"><center><?php echo $checkin; ?></center></td>	
				<td width="10%" height="50px" style="color: black"><center><?php echo $checkout; ?></center></td>	
				<td width="10%" height="50px" style="color: black"><center><?php echo $members; ?></center></td>	
				<td width="10%" height="50px" style="color: black"><center><?php echo $amount; ?></center></td>
				<td width="10%" height="50px" style="color: black"><center><?php echo $payment; ?></center></td>
				<td width="10%" height="50px" style="color: black"><center><?php echo $balance; ?></center></td>
				<td ><a style="color: red" href="checkout.php? resid=<?php echo $resid; ?>" ><center><?php echo $status ?></center></a></td>
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