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
				<?php cart();?>
			<div id="shopping_cart"> 
			<span style="float:right;font-size:18px;padding:5px;line-height:40px;">
			
						Welcome Guest!<b style="color:yellow"> Shopping Cart -</b>Total Items : <?php total_items();?> Total Price : <?php total_price();?> <a href="cart.php" style="color:yellow">Go to Cart</a>
						<a href="login.php" style="color:yellow">Login</a>
			
			</span>
			<div id=dollarka>
			
			
			</div>
				
			</div>
			
			<div id="product_box">
			
				<form action="ecommerce/cart.php" method="post" enctype="multipart/from-data">
			<table align="center" width="800" bgcolor="skyblue">
			
			<tr align="center">
			     <th>Remove</th>
				 <th>Product(s)</th>
				 <th>Quantity</th>
				 <th>Total Price</th>
			</tr>
			<?php 
			$total = 0;
         global $con;
		$ip = getIp();
	    

       $sel_price = "select * from cart where ip_add = '$ip'";
	   
	   $run_price = mysqli_query ($con,$sel_price);
	   
	while ($p_price = mysqli_fetch_array($run_price)) {
		   
		   
		   $pro_id = $p_price ['p_id'];
		   $pro_price = "select * from products where product_id = '$pro_id'";
		   $run_pro_price = mysqli_query($con,$pro_price);
	while ($pp_price = mysqli_fetch_array($run_pro_price)){
		
		$product_price = array ($pp_price['product_price']);
		
		$product_title= $pp_price ['product_title'];
		
		$product_image = $pp_price ['product_image'];
		
		$single_price= $pp_price['product_price'];
		
		$values = array_sum($product_price);
		$total +=$values;
			
			?>
			
			<tr align="center">
			    <td><input type="checkbox" name "remove[]"/></td>
				<td><?php echo $product_title; ?><br>
				<img src="admin_area/product_images/<?php echo $product_image;?>" width="60"height="60" />
				</td>
				<td><input type="text" size="1" name="qty"/></td>
				<td><?php echo "$". $single_price; ?></td>
			</tr>
			
			<?php } }?>
			
			
			<tr align="right">
				<td colspan="2"><b>Sub Total</b></td>
				<td><?php echo "$". $total ?></td>
			
			</tr>
			<tr align="center">
				<td colspan="1"><input type="submit" name ="update_cart" value="updaten cart" /></td>
				
				<td><button><a href="index.php">Continue Shopping</a></button></td>
				<td><button><a href="checkout.php">Checkout</a></button></td>
			
			</tr>
			
			
			</table>
			</form>
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
