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
<?php 
/*
$date = new MaDate("2014-02-05");
$date->addDays(2);
$date->addMonths(5);
$date->format('d/m/y');
*/
?>
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
			
			<div id="shopping_cart"> 
			<span style="float:right;font-size:18px;padding:5px;line-height:40px;">
			
			Welcome Guest!<b style="color:yellow"> Shopping Cart -</b>Total Items : <?php total_items();?> Total Price : <?php total_price();?> <a href="cart.php" style="color:yellow">Go to Cart</a>
			<a href="login.php" style="color:yellow">Login</a>
			</span>
			<div id=dollarka>
			
			
			</div>
				
			</div>
			
			<div id="product_box">
			
			<form action="login.php" method="post" enctype="multipart/form-data" >
         <table align="center" width="800" border="2"bgcolor="orange">
		     <tr>
					<td colspan="7" align="center"><h2>Inter your user name and your password</h2></td>
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
			<tr align="center">
				<td colspan="7"><a href="login.php?forget_password">Forget Password</a></td>
			</tr>
			<tr align="center">
				  <td colspan="7"><input type="submit" name="login" value="Login"/></td>
			 </tr>
			</table>
					
		<h2 style="float:right; padding-right:20px;"><a href="sign_up.php" >Sign Up</a></h2>
		
	</form>
	
	


			
			
			
			</div>
			
			</div>
			
			<?php 

if (isset ($_POST['login'])){
	//getting the text data from the fields
	$ip = getIp();
	$user = $_POST['user'];
	$pass = $_POST['pass'];
	
	$sel ="select * from customers where customer_user='$user' AND customer_pass='$pass'";
	
	$run =mysqli_query ($con, $sel);
	
	$check_customer = mysqli_num_rows($run);
	
	if ($check_customer==0) {
		echo "<script>alert ('user or password is incorect!')</script>";
		
	}
	$ip=getIP();
	$sel_cart ="select * from cart where ip_add='$ip'";
	
	$run_cart = mysqli_query ($con,$sel_cart);
	
	$check_cart = mysql_num_rows($run_cart);
	if ($check_customer>0 AND $check_cart==0){
		
		$_SESSION['user']=$user;
		echo "<script>alert ('you logged successfull!')</script>";
		echo "<script>window.open('myaccount.php',_'self')</script>";	
		
		}
		
		else {
		$_SESSION['user']=$user;
		echo "<script>alert ('you logged successfull!')</script>";
		echo "<script>window.open('checkout.php',_'self')</script>";	
			
			
		}
}
	
	?>
			
			
			
			<div id="footer">
			
			<h2 style="text-align:center;padding-top:30px;" >&copy; 2016 by taajsweden.com</h2>
			
			</div>
		
		</div>
		
		
          </div>


</body>
</html>



