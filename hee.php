<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title></title>
  </head>
  <body>

  </body>
</html>

<form class="" action="hee.php" method="post">
  <input type="tex" name="name">
  <input type="number" name="age">
  <input type="submit" name="submit" value="submit">
</form>



<?php
$con=mysqli_connect ("localhost","root","salmaan1","user")or die("Could not connect: " . mysql_error());

if (mysqli_connect_errno()){

	echo "Failed  to connect MySQL:" . mysqli_connect();
}
if (isset ($_POST['submit'])){
	//getting the text data from the fields
	$name = $_POST['name'];
	$age = $_POST['age'];

	//getting the image from the field

	 echo  $insert_product="INSERT INTO register (user_name,user_age)
	                values ('$name','$age')";
	$insert_pro =mysqli_query ($con, $insert_product);
	if ($insert_pro) {
		echo "<script>alert('product Has been inserted !')</script>";
		echo "<script>Window.open('insert_product.php','_self')</script>";

    


	}

}




?>
