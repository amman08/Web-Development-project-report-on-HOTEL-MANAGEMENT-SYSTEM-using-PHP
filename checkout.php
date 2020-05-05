<?php
session_start();
include("../connection.php");
?>


<?php 
date_default_timezone_set('Asia/Kolkata');
$date =date("Y/m/d");
?>


<?php 
$resid=$_GET['resid'];
//echo $resid;

$queryupdate="update reservationtable set status='OUT',checkout='$date' where resid='$resid'";
$run=mysqli_query($conn1,$queryupdate);
if($run)
{
	
	echo '<script type="text/javascript" > alert(" UPDATION DONE")</script>';
	if (True) {
		# code...
		header("Location:bookinglist.php");
	}
	
	
}
else
{
	echo '<script type="text/javascript" > alert(" UPDATION NOT DONE")</script>';

}


?>
