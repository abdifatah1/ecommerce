<!DOCTYPE>

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
			
			<div id="shopping_cart"> 
			<span style="float:right;font-size:18px;padding:5px;line-height:40px;">
			
			Welcome Guest!<b style="color:yellow"> Shopping Cart -</b>Total Items : Total Price : <a href="cart.php" style="color:yellow">Go to Cart</a>
			<a href="login.php" style="color:yellow">Login</a>
			
			</span>
			<div id=dollarka>
			
			
			</div>
				
			</div>
			
			<div id="product_box">
			
					<?php 
			if(!isset($_SESSION['email])){
				include ("login.php");
							
			}
			else {
				
				include("payment.php");
			}
	
			
			?>
		
		
	
			
			
			
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
