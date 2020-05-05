<?php
session_start();
include("../connection.php");
?>



<?php 
$sno=$_GET['sno'];
//$query="select * from comments where sno='$sno'";



$queryinsert="update comments set status='checked' where sno='$sno'";
$run1=mysqli_query($conn1,$queryinsert);


if($run1)
{
	
	echo '<script type="text/javascript" > alert(" UPDATION DONE")</script>';
	
	
}
else
{
	echo '<script type="text/javascript" > alert(" UPDATION NOT DONE ")</script>';
	
}



?>
