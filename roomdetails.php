<?php
session_start();
include("../connection.php");
?>

<?php

$sql="select count(DISTINCT roomid) as total from room";
$result=mysqli_query($conn1,$sql);
$data=mysqli_fetch_assoc($result);

?>






<!DOCTYPE html>
<html>
<head>
	<title>HM ADMIN ROOM DETAILS PAGE</title>
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
					<li><a href="adminlogout.php">LOGOUT</a></li>
				</ul>
				<div style="float: right; color: #c23616;font-weight: bold;"><p> Welcome:<?php echo strtoupper($_SESSION['username']) ?> </p></div>
			</div>
			</div>	
		<div>
			<h2>Room Details of Hotels:</h2>

			<?php
				$query6="select location as location ,count(DISTINCT roomid) as TotalRooms from room group by location";
				$query6_run=mysqli_query($conn1,$query6);
				while($row=mysqli_fetch_array($query6_run))
					{
						$location=$row['location'];
						$Total1=$row['TotalRooms'];
						
				
			?>
				<h5>Rooms in <?php echo $location; ?>: <?php echo $Total1; ?></h5>	
			<?php

			}

			?>	



			<h3>Total Rooms: <span style="color: red"> <?php echo $data['total']; ?></span> </h3>


			



			<table>
			<tr>
				<th bgcolor="#227093" width="10%" height="50px">ROOM ID</th>
				<th bgcolor="#227093" width="10%" height="50px">LOCATION</th>
				<th bgcolor="#227093" width="10%" height="50px">ROOM TYPE</th>
				<th bgcolor="#227093" width="10%" height="50px">PRICE</th>
				
				
			</tr>
			<?php

				$query4="select * from room";
				$query4_run=mysqli_query($conn1,$query4);
				while($row=mysqli_fetch_array($query4_run))
				{
					$roomid=$row['roomid'];
					$location=$row['location'];
					$roomtype=$row['roomtype'];
					$price=$row['price'];
					
				
		?>
			<tr>
				<td width="10%" height="50px" style="color: black"><center><?php echo $roomid; ?></center></td>
				<td width="10%" height="50px" style="color: black"><center><?php echo $location; ?></center></td>	
				<td width="10%" height="50px" style="color: black"><center><?php echo $roomtype; ?></center></td>	
				<td width="10%" height="50px" style="color: black"><center><?php echo $price; ?></center></td>	
				
				
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