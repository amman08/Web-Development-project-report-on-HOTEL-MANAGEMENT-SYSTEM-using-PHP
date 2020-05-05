

<?php
include("connection.php");
session_start();
$location=$_POST['location'];
$checkin=$_POST['checkin'];
$checkout=$_POST['checkout'];
$roomtype=$_POST['roomtype'];

?>


<?php  
$usi=$_SESSION['username'];

$query1="select * from usertable where username='$usi'";
$query1_run=mysqli_query($conn1,$query1);
$r=mysqli_fetch_assoc($query1_run);
?>

<?php 
		
	$query2="select roomid from room where location='$location' and roomtype='$roomtype' order by roomid ASC ";
	$query2_run=mysqli_query($conn1,$query2);
	$room=mysqli_num_rows($query2_run);
	//echo $room;
	$ro=mysqli_fetch_array($query2_run);
	//echo $ro['roomid'];



	$data=[];
  
	if(mysqli_num_rows($query2_run)>0){
		while ($row=mysqli_fetch_array($query2_run)) {

			$data[]=$row['roomid'];
			
		}
	}

	//print_r($data);

	//echo $data;
	//$object=json_encode($data);
	//echo $object;

	$query3="select DISTINCT roomid from reservationtable where location='$location' and roomtype='$roomtype'";
	$query3_run=mysqli_query($conn1,$query3);
	$reservation=mysqli_num_rows($query3_run);
	//echo $reservation;
	$ro2=mysqli_fetch_array($query3_run);

	$data1=[];

	if(mysqli_num_rows($query3_run)>0){
		while ($row1=mysqli_fetch_array($query3_run)) {

			$data1[]=$row1['roomid'];
			
		}
	}
	//print_r($data1);

	//echo $data1;
	//$object1=json_encode($data1);
	//echo $object1;  

	




	$query4="select roomid from reservationtable where checkout<'$checkin' and location='$location' and roomtype='$roomtype'";
	$query4_run=mysqli_query($conn1,$query4);
	$room1=mysqli_num_rows($query4_run);

	$ro1=mysqli_fetch_array($query4_run);
	//echo $ro1['roomid'];


	$data2=[];
	if(mysqli_num_rows($query4_run)>0){
		while ($row2=mysqli_fetch_array($query4_run)) {

			$data2[]=$row2['roomid'];
			
		}
	}

	//print_r($data2);

	//echo $data2;
	//$object2=json_encode($data2);
	//echo $object2;


	//echo $object[-3];


?>

<?php
	//echo $room;
	//echo $reservation;
    if ($room>=$reservation)
    {
    		$xy= $ro['roomid'];
    		$query5="select * from room where roomid='$xy'";
	       	$query5_run=mysqli_query($conn1,$query5);
			$r1=mysqli_fetch_assoc($query5_run);

    }
    else if ($room1>0)
    {
    		$xy=$ro1['roomid'];
    		$query5="select * from room where roomid='$xy'";
			$query5_run=mysqli_query($conn1,$query5);
			$r1=mysqli_fetch_assoc($query5_run);

    }
?>

<!--
<?php
	$query5="select * from room where roomid='$xy'";


	if($query5_run=mysqli_query($conn1,$query5))
	$r1=mysqli_fetch_assoc($query5_run);


?>-->


<?php
//echo $checkout;
//echo gettype($checkin);

$start = strtotime($checkin);
$end = strtotime($checkout);

$days_between = ceil(abs($end - $start) / 86400);
//echo $days_between;

//echo $reservation;
//echo $room;



?>

<!DOCTYPE html>
<html>
<head>
	<title>HOTEL BOOKING PAGE</title>
	<link rel="stylesheet" type="text/css" href="admin.css">
</head>
<body>
	<div id="full">
		<div id="bg1"  style="background-image: url('img/h1.jpg');width: 100%;height: 600px">
		<div id="header">
			<div id="logo">
				<h1>MY HOTEL</h1>
				<!--<img src="img/logo1.png" height="15px" width="15px">-->
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
				<form action="payment.php" method="post">
			<table>
					<?php

						//query
							$query2="select roomid from room where location='$location' and roomtype='$roomtype'";
							$query2_run=mysqli_query($conn1,$query2);
							$room=mysqli_num_rows($query2_run);

							$query3="select DISTINCT roomid from reservationtable where location='$location' and roomtype='$roomtype'";
							$query3_run=mysqli_query($conn1,$query3);
							$reservation=mysqli_num_rows($query3_run);


							$query4="select roomid from reservationtable where checkout<'$checkin' and location='$location' and roomtype='$roomtype'";
							$query4_run=mysqli_query($conn1,$query4);
							$room1=mysqli_num_rows($query4_run);

							

						if($room>$reservation || $room1>0)

						{
							?>

							
							<tr>
								<td>FULL NAME</td>
								<td><input type="text" name="fullname"  title="fullname" readonly value= <?php echo $r['fullname']; ?>  ></td>
								<td>GENDER</td>
								<td><input type="text" name="gender"  title="gender" readonly value= <?php echo $r['gender']; ?> ></td>
							</tr>

							<tr>
								<td>Email</td>
								<td><input type="email" name="email"  title="email" readonly value= <?php echo $r['email']; ?> ></td>
								<td>MOBILE</td>
								<td><input type="text" name="phonenumber"  title="phonenumber" readonly value= <?php echo $r['phonenumber']; ?> ></td>
							</tr>
							<tr>
								<td>ADDRESS</td>
								<td><input type="text" name="address"  title="address" readonly value= <?php echo $r['address']; ?>  ></td>	
								<td>ID PROOF</td>
								<td><input type="text" name="idproof"  title="idproof" readonly value= <?php echo $r['idproof']; ?>  ></td>					
							</tr>

						

							<tr>
								<td>LOCATION</td>
								<td><input type="text" name="location" title="location" value="<?php echo $location;   ?>" readonly ></td> 
								
								<td>ROOM TYPE</td>
								<td><input type="text" name="roomtype"  title="roomtype" value="<?php echo $roomtype;   ?>" readonly ></td>	
							</tr>
						
							<tr>
								<td>ROOM ID</td>
								<td><input type="text" name="roomid"  title="roomid" value="<?php echo $xy; ?>" readonly ></td>		
								<td>No OF PERSONS</td>
								<td>
								<select name="members" required>
									
									<option>1</option>
									<option>2</option>
									<option>3</option>
									
								</select>
								</td>				
							</tr>
				
							<tr>
								<td>CHECK IN</td>
								<td><input type="date" name="checkin"  title="checkin" value="<?php echo $checkin;   ?>" readonly ></td>
								<td>CHECK OUT</td>	
								<td><input type="date" name="checkout"  title="checkout" value="<?php echo $checkout;   ?>" readonly ></td>				
							</tr>
							
							<tr>
								<td>TOTAL AMOUNT</td>
								<td><input type="text" name="amount" title="amount" readonly value= <?php echo (($r1['price'])*($days_between)); ?>  ></td> 						
							

								<td>PAYMENT MODE</td>
								<td>
									<select name="payment" required>
									
										<option>CASH</option>
										<option>ONLINE</option>
																	
									</select>
								</td>

							</tr>


							<tr>
							<td></td>
							<td><input style="width:100px; height:30px; border-radius: 20px" type="submit" value="PAYMENT" name="submit"></td>
							</tr>

						</table>
			</form>

				



					<?php 
						}

							else
							{

								?>
								
								<h1 style="font-family:Brush Script MT, Brush Script Std, cursive; color: white ;margin-left: 8%;margin-top: 10% ">Sorry for the inconvience presently the rooms are <span style="color: red">Not Available</span></h1>
						<?php

							}

						?>
			



			

					



	
		</div>
		</div>
		</div>
		</div>

</body>
</html>





<!--		<?php
			if(isset($_POST['submit']))
			{
				$name=$_POST['name'];
				$idno=$_POST['idno'];
				$address=$_POST['address'];
				$location=$_POST['location'];
				$roomtype=$_POST['roomtype'];
				$email=$_POST['email'];
				$checkin=$_POST['checkin'];
				$checkout=$_POST['checkout'];
				$members=$_POST['members'];


				$query="insert into f1 (name,idno,address,location,roomtype,email,cidate,codate,m) value('$name','$idno','$address','$location','$roomtype','$email','$checkin','$checkout','$members')";

				


				if(mysqli_query($conn1,$query))
				{
					echo '<script type="text/javascript" > alert("BOOKING DONE")</script>';
				}
				else
				{
					echo '<script type="text/javascript" > alert("NOT BOOKED ALL ROOMS ARE FILLED COME LATER")</script>';;
				}

			}
			

			?> -->



