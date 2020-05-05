<?php
session_start();
include("connection.php");
?>
<?php  
$usi=$_SESSION['username'];

$query1="select * from usertable where username='$usi'";
$query1_run=mysqli_query($conn1,$query1);
$r=mysqli_fetch_assoc($query1_run);
$userid=$r['userid'];
//echo $userid;
?>












<!DOCTYPE html>
<html>
<head>
	<title>HM SERVICES</title>
	<link rel="stylesheet" type="text/css" href="admin.css">
</head>
<body>
	<div id="full">
		<!--<div id="bg1"  style="background-image: url('img/h1.jpg');width: 100%;height: 800px">-->
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
			<h1 style="color: green"><?php  echo strtoupper($_SESSION['username'])  ?>  : BOOKED HISTORY</h1>
 			<table>
				<tr>
					<th bgcolor="#74b9ff" width="10%" height="50px">DOB</th>
					<th bgcolor="#74b9ff" width="10%" height="50px">RES ID</th>
					<th bgcolor="#74b9ff" width="10%" height="50px">NAME</th>
					<th bgcolor="#74b9ff" width="10%" height="50px">ROOM ID</th>
					<th bgcolor="#74b9ff" width="10%" height="50px">LOCATION</th>
					<th bgcolor="#74b9ff" width="10%" height="50px">ROOM TYPE</th>					
					<th bgcolor="#74b9ff" width="10%" height="50px">CHECK IN</th>
					<th bgcolor="#74b9ff" width="10%" height="50px">CHECK OUT</th>
					<th bgcolor="#74b9ff" width="10%" height="50px">MEMBERS</th>
					<th bgcolor="#74b9ff" width="10%" height="50px">AMOUNT</th>
					<th bgcolor="#74b9ff" width="10%" height="50px">PAYMENT</th>
					<th bgcolor="#74b9ff" width="10%" height="50px">BALANCE</th>
					<th bgcolor="#74b9ff" width="10%" height="50px">CANCEL</th>
				</tr>

			<?php

				$query3="select * from reservationtable where userid='$userid'";
				$query3_run=mysqli_query($conn1,$query3);
				while($row=mysqli_fetch_array($query3_run))
				{
					$dob=$row['bookingdate'];
					$resid=$row['resid'];
					$fullname=$row['fullname'];
					$roomid=$row['roomid'];
					$location=$row['location'];
					$roomtype=$row['roomtype'];
					$checkin=$row['checkin'];
					$checkout=$row['checkout'];
					$members=$row['members'];
					$amount=$row['amount'];
					$payment=$row['payment'];
					$balance=$row['balance'];
				
			?>


			<tr>
				<td width="10%" height="50px" style="color: black"><center><?php echo $dob; ?></center></td>
				<td width="10%" height="50px" style="color: black"><center><?php echo $resid; ?></center></td>
				<td width="10%" height="50px" style="color: black"><center><?php echo $fullname; ?></center></td>	
				<td width="10%" height="50px" style="color: black"><center><?php echo $roomid; ?></center></td>	
				<td width="10%" height="50px" style="color: black"><center><?php echo $location; ?></center></td>	
				<td width="10%" height="50px" style="color: black"><center><?php echo $roomtype; ?></center></td>	
				<td width="10%" height="50px" style="color: black"><center><?php echo $checkin; ?></center></td>	
				<td width="10%" height="50px" style="color: black"><center><?php echo $checkout; ?></center></td>	
				<td width="10%" height="50px" style="color: black"><center><?php echo $members; ?></center></td>	
				<td width="10%" height="50px" style="color: black"><center><?php echo $amount; ?></center></td>
				<td width="10%" height="50px" style="color: black"><center><?php echo $payment; ?></center></td>
				<td width="10%" height="50px" style="color: black"><center><?php echo $balance; ?></center></td>
				<td ><a style="color: red" href="cancelorder.php? resid=<?php echo $resid; ?>" >CANCEL</a></td>





				<!-- <td width="10%" height="50px"><center><?php echo $name; ?></center></td> -->
			</tr>
			<?php

			}
			?>

		</table>

	</div>

</div>
</div>
</body>
</html>