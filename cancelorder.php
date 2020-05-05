<?php
session_start();
include("connection.php");
?>


<?php 
date_default_timezone_set('Asia/Kolkata');
$date =date("Y/m/d");
?>


<?php 
$resid=$_GET['resid'];
$query="select * from reservationtable where resid='$resid'";

$query_run=mysqli_query($conn1,$query);
$row=mysqli_fetch_array($query_run);
$booking=$row['bookingdate'];
$resid=$row['resid'];
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

$queryinsert="insert into cancellation values('','$date','$booking','$resid','$userid','$fullname','$gender','$roomid','$location','$roomtype','$checkin','$checkout','$members','$amount','$payment','$balance')";
$run1=mysqli_query($conn1,$queryinsert);

$querycancel="delete from reservationtable where resid='$resid'";
$run=mysqli_query($conn1,$querycancel);
if($run && $run1)
{
	
	echo '<script type="text/javascript" > alert(" CANCELLATION DONE")</script>';
	
	
}
else
{
	echo '<script type="text/javascript" > alert(" CANCELLATION NOT DONE PLS CONTACT US")</script>';
	header("Location:userhistory.php");
}



?>
