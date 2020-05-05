<?php
session_start();
include("connection.php");
?>


<!DOCTYPE html>
<html>
<head>
	<title>HM USER LOG</title>
	<link rel="stylesheet" type="text/css" href="admin.css">
</head>
<body>
	<div id="full">
		<div id="bg1"  style="background-image: url('h1.jpg');width: 100%;height: 600px">
		<div id="header" >
			<div id="logo">
				<h1>MY HOTEL</h1>
				<!--<img src="img/logo1.png" height="15px" width="15px">-->
			</div>	


			<div id="nav">
				<ul>
					<li><a href="generalhome.php">HOME</a></li>
					<li><a href="generalservices.php">SERVICES</a></li>
					<li><a href="generalcontact.php">CONTACT US</a></li>					
					<li><a href="userlogin.php">BOOKING</a></li>
					<li><a href="Admin/adminlogin.php">ADMIN</a></li>
				</ul>
			</div>
			</div>
		<div id="banner">

			<div id="form">
				<h1 style="color: white ;margin-left: 8%">USER LOGIN</h1>
				<form action="userlogin.php" method="post">
			<table>
				
				<tr>
					<td>USER NAME:</td>
					<td><input type="text" name="username" placeholder="Enter Admin User Name" title="Enter username" required></td>
				</tr>
				<tr>
					<td>PASSWORD:</td>
					<td><input type="password" name="password" placeholder="Enter Password" title="Enter password" required ></td>
				</tr>				
				<tr>					
				<td><input style="width:130px; height:30px; border-radius: 20px" type="submit" value="LOGIN" name="submit"></td>

				<td ><a href="userregistration.php"><input style="width:130px; height:30px; border-radius: 20px" type="button" id="back_btn" value="REGISTER" name="submit1"></a></td>
				</tr>

			</table>
			</form>
			<?php 
			if(isset($_POST['submit1'])){
				header("Location:userregistration.php");
			}
			?>


			<?php
			if(isset($_POST['submit']))
			{
				$username=$_POST['username'];
				$password=$_POST['password'];
				
				$query2="select * from usertable where username='$username' and password='$password'";
				$query2_run=mysqli_query($conn1,$query2);
				//echo $username;
				if(mysqli_num_rows($query2_run)>0)
				{
					$row=mysqli_fetch_assoc($query2_run);
					$_SESSION['username']=$row['username'];
					$_SESSION['userid']=$row['userid'];
					$_SESSION['img']=$row['img'];
					header("location: userhome.php");
				}
				else
				{
					
					echo '<script type="text/javascript" > alert("ENTER THE CORRECT CREDENTIALS......")</script>';
				}

				


				
			}



			?>
			

			
		</div>
		</div>
		</div>
		</div>

</body>
</html>