

<?php
session_start();
include("../connection.php");
?>


<!DOCTYPE html>
<html>
<head>
	<title>HM ADMIN LOG</title>
	<link rel="stylesheet" type="text/css" href="../admin.css">
</head>
<body>
	<div id="full">
		<div id="bg1"  style="background-image: url('../img/h1.jpg');width: 100%;height: 600px">
		<div id="header" >
			<div id="logo">
				<h1>MY HOTEL</h1>
				<!--<img src="img/logo1.png" height="15px" width="15px">-->
			</div>	


			<div id="nav">
				<ul>
					<li><a href="../generalhome.php">HOME</a></li>
					<li><a href="../generalservices.php">SERVICES</a></li>
					<li><a href="../generalcontact.php">CONTACT US</a></li>
					<li><a href="../userlogin.php">BOOKING</a></li>
					<li><a href="adminlogin.php">ADMIN</a></li>
				</ul>
			</div>
			</div>
		<div id="banner">

			<div id="form">
				<h1 style="color: white ;margin-left: 8%">ADMIN LOGIN</h1>
				<form action="" method="post">
			<table>
				
				<tr>
					<td>USER NAME:</td>
					<td><input type="text" name="username" placeholder="Enter Admin User Name" title="Enter username"></td>
				</tr>
				<tr>
					<td>PASSWORD:</td>
					<td><input type="password" name="password" placeholder="Enter Password" title="Enter password"></td>
				</tr>				
				<tr>					
				<td colspan="2"><input style="width:130px; height:30px; border-radius: 20px" type="submit" value="LOGIN" name="submit"></td>
				</tr>

			</table>
			</form>

			<?php
			if(isset($_POST['submit']))
			{
				$username=$_POST['username'];
				$password=$_POST['password'];
				
				$query2="select * from admin where username='$username' and password='$password'";
				$query2_run=mysqli_query($conn1,$query2);
				if(mysqli_num_rows($query2_run)>0)
				{
					$_SESSION['username']=$username;
					header("location:adminhome.php");
				}
				else
				{
					
					echo '<script type="text/javascript" > alert("ENTER THE CORRECT PASSWORD......")</script>';
				}

				


				
			}



			?>
			

			
		</div>
		</div>
		</div>
		</div>

</body>
</html>