<!DOCTYPE>
<?php 
include("includes/db.php");

?>
<?php include ("functions/functions.php");?>
<html>
        <head>
             <title>My Online Shop</title>
          <link rel="stylesheet" href ="styles/style.css" media="all"/>
         </head>
<body>
		<div class="main_wrapper">
		
		    <div class="header_wrapper">
			
			<a href="index.php"><img id="zaad" src ="images/zaad5.gif"/></a>
			<a href="index.php"><img id="taaj" src="images/taaj.gif"/></a>
			
			</div>
			<div class="menubar">
		<ul id= "menu">
		    <li><a href="index.php">Home</a></li>
			<li><a href="all_products.php">All Products</a></li>
			<li><a href="my_account.php">My Account</a></li>
			<li><a href="sign_up.php">Sign Up</a></li>
			<li><a href="shopping.php">Shopping Cart</a></li>
			<li><a href="contact.php">Contact Us</a></li>
		
		
		</ul>
		<div id="form">
		<form metho="get" action="results.php" enctype="multipart/from-data">
		<input type ="text" name="user_query" placeholder="search a product"/>
		<input type ="submit" name="search" value ="search"/>
		
		</form>
		
		
		</div>
			</div>
			
		<div class ="content_wrapper">
		
		    <div id="sidebar_area">
			
			   <div id="sidebar_title">Categories</div>
			 
			   
			   
				<ul id="cats">
				  	  <?php  getCats();    ?>
			
				</ul>
				
			 <div id="sidebar_title">Brands</div>
			 
				<ul id="cats">
				<?php  getBrands();    ?>
				   
				</ul>
			
			
			</div>
			
			<div id="content_area">
			<?php cart();?>
			<div id="shopping_cart"> 
			<span style="float:right;font-size:18px;padding:5px;line-height:40px;">
			
			Welcome Guest!<b style="color:yellow"> Shopping Cart -</b>Total Items : <?php total_items();?> Total Price : <?php total_price();?> <a href="cart.php" style="color:yellow">Go to Cart</a>
			<a href="login.php" style="color:yellow">Login</a>
			
			</span>

				
			</div>
			
			<div id="product_box">
			<form action="sign_up.php" method="post" enctype="multipart/form-data" >
         <table align="center" width="800" border="2"bgcolor="orange">
		     <tr>
					<td colspan="7" align="center"><h2>Please Sign Up</h2></td>
			 </tr>
			 <tr>
					<td align="right">User Name:</td>
					<td><input type="text" name="user" required/></td>
			 </tr>
			  <tr>
					<td align="right">Your Password:</td>
					<td><input type="password" name="pass" required/></td>
					<td>
			</tr>
			<tr>
					<td align="right">Email:</td>
					<td><input type="email" name="email" required/></td>
			 </tr>
			 <tr>
					<td align="right">Counry:</td>
					<td><input type="text" name="country" required/></td>
			 </tr>
			 <tr>
					<td align="right">City:</td>
					<td><input type="text" name="city" required/></td>
			 </tr>
			
			<tr align="center">
				  <td colspan="7"><input type="submit" name="signup" value="Sign Up"/></td>
			 </tr>
			</table>
		
			</div>
			
			</div>
			
			<div id="footer">
			
			<h2 style="text-align:center;padding-top:30px;" >&copy; 2016 by taajsweden.com</h2>
			
			</div>
		
		</div>
		
		
          </div>


</body>
</html>



</form>
</body>
</html>

<?php 
if (isset ($_POST['signup'])){
	//getting the text data from the fields
	$ip = getIp();
	$user = $_POST['user'];
	$pass = $_POST['pass'];
	$country = $_POST['country'];
	$city = $_POST['city'];
	$email = $_POST['email'];
	
	
	
	
	echo $create ="INSERT INTO customers (customer_ip,customer_name,customer_pass,customer_country,customer_city,customer_email)
	                values ('$ip','$user','$pass','$country','$city','$email')";
	$signup_u =mysqli_query ($con, $create);
	
	$sel_cart = "select * from cart where ip_add$'$ip'";
	$run_cart = mysqli_query ($con, $sel_cart);
	$check_cart =mysqli_num_rows($run_cart);
	if ($check_cart==0){
		$_SESSION['email']=$email;
		echo "<script>alert ('Acount has been created!')</script>";
		echo "<script>window.open('myaccount.php',_'self')</script>";
	}
	
		else {
		$_SESSION['email']=$email;
		echo "<script>alert ('Acount has been created!')</script>";
		echo "<script>window.open('checkout.php',_'self')</script>";	
			
			
		}
		
	
	
}




?>
