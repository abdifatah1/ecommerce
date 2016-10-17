<?php

$con=mysqli_connect ("localhost","root","salmaan1","ecommerce")or die("Could not connect: " . mysql_error());

if (mysqli_connect_errno()){

	echo "Failed  to connect MySQL:" . mysqli_connect();
}

?>
