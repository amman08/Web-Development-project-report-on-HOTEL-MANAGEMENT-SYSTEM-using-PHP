<?php
include("connection.php");
session_start();

$location=$_POST['location'];
$checkin=$_POST['checkin'];
$checkout=$_POST['checkout'];
$roomtype=$_POST['roomtype'];
$payment=$_POST['payment'];
$amount=$_POST['amount'];
$members=$_POST['members'];
$roomid=$_POST['roomid'];
echo $location;
echo $checkin;
?>

<?php
	$r= $roomid;
	$l=$location;
	$a=$amount;
	$ci=$checkin;
	$co=$checkout;
	$m=$members;
	$rt=$roomtype;
	$p=$payment;




?>

<?php
$a= $payment;
//echo $a;
?>


<?php  

$usi=$_SESSION['username'];

$query1="select * from usertable where username='$usi'";
$query1_run=mysqli_query($conn1,$query1);
$r=mysqli_fetch_assoc($query1_run);
$fullname=$r['fullname'];
$gender=$r['gender'];
$email=$r['email'];
$phonenumber=$r['phonenumber'];
$address=$r['address'];
$idproof=$r['idproof'];
$username=$r['username'];
$userid=$r['userid'];
$gender=$r['gender'];

?>

<?php
if ($payment=='ONLINE')
{
		$balance=0;
}
else
{

	$balance=$amount;
}

?>

<?php 
date_default_timezone_set('Asia/Kolkata');
$date =date("Y/m/d");
?>



<!DOCTYPE html>
<html>
<head>
	<title>PAYMENT</title>
	<link rel="stylesheet" type="text/css" href="admin.css">
</head>
<body>
	<div id="full">
		<div id="bg" style="background-image: url('img/h1.jpg');width: 100%;height: 800px ">
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
		
			
					<?php

						//query		
						
						if($payment=='ONLINE')
						{
							?>
							<form action="payment.php" method="post">
							<table>
							<tr>								
								<td>AMOUNT</td>
								<td><input type="text" name="gender"  title="gender" value= <?php echo $amount; ?> ></td>
							</tr>
							<tr>
								<td><input style="width:100px; height:30px; border-radius: 20px" type="submit" value="PAY" name="submit"></td>
							</tr>	
							</table>							
							</form>

								

							<!--extra-->
							


					<?php if(isset($_POST['submit']))

					{	
					



						$query5="insert into reservationtable (bookingdate,resid,userid,fullname,gender,roomid,location,roomtype,checkin,checkout,members,amount,payment,balance)values('$date','','$userid','$fullname','$gender','$roomid','$location','$roomtype','$checkin','$checkout','$members','$amount','$payment','$balance')";
						
						$query_run5=mysqli_query($conn1,$query5);
						if($query_run5)
						{
							//echo 'booked';
							header("location: done.php");
						}else
						{
							//echo 'sorry';
							header("location: notdone.php");
						}
					}	}

					else{

						?>
						<!--else condition -->
						<form action="payment.php" method="post">
						<table>
							<tr>
								<td><h3 style="color: white ">You Need to pay the amount on the hotel desk</h3></td>
							</tr>
							<tr>
								<td></td>
								<td><input style="width:100px; height:30px;border-radius: 20px" type="submit" value="submit" 
											name="submit"></td>
							</tr>
						</table>
								
								






						<?php	
						if(isset($_POST['submit']))

						{	






							$query6="insert into reservationtable (bookingdate,resid,userid,fullname,gender,roomid,location,roomtype,checkin,checkout,members,amount,payment,balance)values('$date','','$userid','$fullname','$gender','$roomid','$location','$roomtype','$checkin','$checkout','$members','$amount','$payment','$balance')";
							$query_run6=mysqli_query($conn1,$query6);
							if($query_run6)
							{
								//echo 'booked';
								header("location: done.php");
							}	
							else
							{
								//echo 'sorry';
								header("location: notdone.php");

							}
						}



					}
						?>

						</form>
			

			

						
			

	
		</div>




		</div>
		</div>  