<?php
$connect = mysqli_connect("localhost","root","","db_ar");
 
if (mysqli_connect_errno())
{
	echo "Database Connection Error: " . mysqli_connect_error();
}
?>