<?php

include("connection.php");
?>


<!DOCTYPE html>
<html>
<head>
	<title>HM ADMIN LOG</title>
	<link rel="stylesheet" type="text/css" href="admin.css">
</head>
<body>
	<div id="full">
		<div id="bg1"  style="background-image: url('h1.jpg');width: 100%;height: 1000px;">
		<div id="header" >
			<div id="logo">
				<h1>MY HOTEL</h1>
				<!--<img src="img/logo1.png" height="15px" width="15px">-->
			</div>	


			<div id="nav">
				<ul>
					<li><a href="generalhome.php">HOME</a></li>
					<li><a href="generalcontact">CONTACT US</a></li>
					<li><a href="userlogin.php">BOOK MY STAY</a></li>
					<li><a href="generalservices.php">SERVICES</a></li>
					<li><a href="adminlogin.php">ADMIN</a></li>
				</ul>
			</div>
			</div>
		<div id="banner">

			<div id="form">
				<h1 style="color: white ;margin-left: 8%">USER REGISTRATION</h1>
				<form action="" method="post">
			<center><table>
				
				<tr>
					<td>FULL NAME:</td>
					<td><input type="text" name="fullname" placeholder="Enter Full Name" title="Enter username" required></td>
				</tr>
				<tr>
					<td>GENDER</td>
					<td>
						<input name="gender" type="radio" class="radiobtns" value="male"  checked required > Male
						<input name="gender" type="radio" class="radiobtns" value="female"   required > Female<br>
					</td>

				</tr>

				<tr>
					<td>EMAIL:</td>
					<td><input type="email" name="email" placeholder="Enter Email" title="Enter email" required></td>
				</tr>	
				<tr>
					<td>PHONE NUMBER:</td>
					<td><input type="test" name="phonenumber" placeholder="Enter Mobile Number" title="Enter mobile" required></td>
				</tr>	
				<tr>
					<td>ADDRESS:</td>
					<td><input type="text" name="address" placeholder="Enter Address" title="Enter address" required></td>
				</tr>	
				<tr>
					<td>ID PROOF:</td>
					<td><input type="text" name="idproof" placeholder="Enter ID proof ID" title="Enter idproof" required></td>
				</tr>
				<tr>
					<td>USERNAME:</td>
					<td><input type="text" name="username" placeholder="Enter username" title="Enter username" required></td>
				</tr>	
				<tr>
					<td>PASSWORD:</td>
					<td><input type="password" name="password" placeholder="Enter Password" title="Enter password" required></td>
				</tr>
				<tr>
					<td>CONFIRM PASSWORD</td>
					<td><input type="password" name="cpassword" placeholder="Enter Password" title="Enter cpassword" required></td>
				</tr>
				<tr>
					
					<td><input style="width:130px; height:30px; border-radius: 20px" name="submit_btn" type="submit" id="signup_btn" value="SIGN UP"><br></td>
					<td><a href="userlogin.php"><input style="width:130px; height:30px; border-radius: 20px" type="button" id="back_btn" value="LOGIN"/></a></td>
				</tr>
			</table></center>
			</form>	

			<?php
			if(isset($_POST['submit_btn']))
			{
				
				$fullname = $_POST['fullname'];
				$gender = $_POST['gender'];
				$email = $_POST['email'];
				$phonenumber = $_POST['phonenumber'];
				$address = $_POST['address'];
				$idproof = $_POST['idproof'];				
				$username = $_POST['username'];
				$password = $_POST['password'];
				$cpassword = $_POST['cpassword'];

				$query1="select * from usertable where username='$username'";
				$query1_run=mysqli_query($conn1,$query1);
				if(mysqli_num_rows($query1_run)>0)
				{
					echo '<script type="text/javascript" > alert("user already exists...try another")</script>';
				}

				else
				{
					$query2 = "insert into usertable values ('','$fullname','$gender','$email','$phonenumber','$address','$idproof','$username','$password')";
					$query_run2=mysqli_query($conn1,$query2);

						if($query_run2)
						{
							echo '<script type="text/javascript" > alert("USER REGISTERED.....GO TO LOGIN PAGE TO LOGIN")</script>';	
						}
						else
						{
							echo '<script type="text/javascript" > alert("ERROR....")</script>';
						}
					}

				}
				
			
				





			

		?>

			

		</div>
		</div>
		</div>
		</div>

</body>
</html>