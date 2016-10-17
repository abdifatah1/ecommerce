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
			
			<?php getPro();?>
			<?php getCatPro();?>
			<?php getBrandPro();?>
			</div>
			
			</div>