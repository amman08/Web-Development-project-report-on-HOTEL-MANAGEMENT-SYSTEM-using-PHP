<?php

session_start();
include("connection.php");
?>

<?php  
$usi=$_SESSION['username'];

$query1="select * from usertable where username='$usi'";
$query1_run=mysqli_query($conn1,$query1);
$r=mysqli_fetch_assoc($query1_run);
?>




<!DOCTYPE html>
<html>
<head>
	<title>HM ADMIN LOG</title>
	<link rel="stylesheet" type="text/css" href="admin.css">
</head>
<body>
	<div id="full">
		<div id="bg1"  style="background-image: url('img/h1.jpg');width: 100%;height: 800px">
		<div id="header" >
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
				<h2 style="color: white ;margin-left: 8%">CONTACT US</h2>
			<table>
				<tr>
					<td>
						<p style="color: white ;margin-left: 8%">
						Dear Customers,<br>
						Please contact us at:<br>
						Central Administrative Office VIZAG<br>
 						Phone Number:0891-2840501<br>
						Email-us:registrar@gitam.edu<br><br>
						Address<br>
						Gandhi nagar<br>
						Rushikonda<br>
						Visakhapatnam-530045<br>
						Andhra Pradesh, INDIA.<br>
 						0891-2790101 / 202<br><br></p>
 					</td>
 				
					<td>
						<p style="color: white ;margin-left: 8%">
						Dear Customers,<br>
						Please contact us at:<br>
						Central Administrative Office BANGALORE<br>
 						Phone Number:080-2840501<br>
						Email-us:registrar@gitam.edu<br><br>
						Address<br>
						Gandhi nagar<br>
						Rushikonda<br>
						Bangalore-530045<br>
						KARNATAKA, INDIA.<br>
 						080-2790101 / 202<br><br></p>
 					</td>
 				</tr>

 				</table>
					 

					
				<form action="" method="post">
			<table>
				<p style="color: white ;margin-left: 8%">Filling this contact form below and we will get back to you.
					Thank you!</p>
				
				<tr>
					<td>FULL NAME:</td>
					<td><input type="text" name="fullname" value= <?php echo $r['fullname']; ?> readonly></td>
				</tr>
				<tr>
					<td>Email:</td>
					<td><input type="email" name="email" value= <?php echo $r['email']; ?> readonly ></td>
				</tr>	
				<tr>
					<td>TEXT HERE....!</td>
					<td><input style="width:300px; height:50px; border-radius: 5px" type="text" name="text" placeholder="Enter Comment" title="Enter emailid" required ></td>
				</tr>			
				<tr>					
				<td colspan="2"><input style="width:150px; height:30px; border-radius: 20px" type="submit" value="SUBMIT COMMENT" name="submit"></td>
				</tr>

				<?php 
				if(isset($_POST['submit']))
				{
					$name=$_POST['fullname'];
					$email=$_POST['email'];
					$text=$_POST['text'];
					//echo $name;
					$query1="insert into comments (name, email ,text) values ('$name','$email','$text')";
					$query1_run=mysqli_query($conn1,$query1);
					if($query1_run)
					{
						echo '<script type="text/javascript" > alert("DETAILS SUBMITTED WE WILL CONTACT YOU....")</script>';
					}
					else
					{
						echo '<script type="text/javascript" > alert("SORRY FOR INCONVIENCE NOT SUBMITTED")</script>';
					}
				}
				







				?>

			</table>
			</form>
		</div>
	</div>
</div>
</div>
</body>
</html>
