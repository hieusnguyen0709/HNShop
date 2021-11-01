<?php
	include 'inc/header.php';
	//include 'inc/slider.php';
?>
<?php
if(isset($_GET['proid']) || $_GET['proid']!=NULL)
{
    $id = $_GET['proid'];
}
else
{
    echo'<script>window.location=""</script>';
}
$customer_id = Session::get('customer_id');
if($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST['compare']))
{

	$productid = $_POST['productid'];
    $insertCompare = $product->insertCompare($productid,$customer_id);
}
if($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST['submit']))
{

	$quantity = $_POST['quantity'];
    $insertCart = $ct->add_to_cart($quantity,$id);
}
if(isset($_POST['binhluan_submit']))
{
	$binhluan_insert = $cs->insert_binhluan();
}
?>
 <div class="main">
    <div class="content">
    	<div class="section group">
    		<?php
    			$get_product_details = $product->get_details($id);
    			if($get_product_details)
    			{
    				while($result=$get_product_details->fetch_assoc())
    				{
    		?>
				<div class="cont-desc span_1_of_2">				
					<div class="grid images_3_of_2">
						<img height="200px" width="250px" src="admin/uploads/<?php echo $result['image'] ?>" alt="" />
					</div>
				<div class="desc span_3_of_2">
				<h2><?php echo $result['productName'] ?></h2>

				<?php
					if($result['quantity']>0)
					{
				?>
				<div class="price">
					<p>Price: <span><?php echo $fm->format_currency($result['price']) ?></span></p>
					<p>In Stock: <span><?php echo $result['quantity'] ?></span></p>
					<p>Category: <span><?php echo $result['catName'] ?></span></p>
					<p>Brand:<span><?php echo $result['brandName'] ?></span></p>
				</div>
				<div class="">
					<form action="" method="post">
						<input type="number" class="buyfield" name="quantity" value="1" min="1" />
						<input type="submit" class="buysubmit" name="submit" value="Buy Now"/>
					</form>
					</br>		
					<?php
						if(isset($AddtoCart))
						{
							echo '<span style="color:red; font-size:20px;">Product Already Added</span>';
						}
					?>		
				</div>
				<?php
					}
					else
					{
				?>
					<span class="error" style="font-family: 'Monda', sans-serif; font-size: 25px;">PRODUCT IS NOT AVAILABLE !</span></br>
				<?php 
					}
				?>
				<div class="">
					<form action="" method="POST">
						<input type="hidden" name="productid" value="<?php echo $result['productId'] ?>"/>
						
						  <?php
							$login_check = Session::get('customer_login');
						  	if($login_check)
						  	{
						  		echo'<input type="submit" class="buysubmit" name="compare" value="Save to Wishlist"/>';
						  		echo' ';
						  	}
						  	else
						  	{
						  		echo''; 
						  	}
						  ?>
						</br></br>
						<?php
							if(isset($insertCompare))
							{
								echo $insertCompare;
							}
						?>
					</form>
				</div>
			</div>
			<div class="product-desc">
			<h2>QR CODE</h2>
				<img src="admin/uploads/<?php echo $result['qrImg'] ?>" width="80px" height="80px">
	    	</div>
			<div class="product-desc">
			<h2>Preview</h2>
				<?php echo $result['product_desc'] ?>
	    	</div>			
	</div>
	<?php
	    			}
    			}
	?>
				<div class="rightsidebar span_3_of_1">
					<h2>CATEGORIES</h2>
					<ul>
						<?php
							$getall_category = $cat->select_category();
							if($getall_category)
							{
								while($result_allcat = $getall_category->fetch_assoc())
								{
						?>
				      <li><a href="productbycat.php?catid=<?php echo $result_allcat['catId'] ?>"><?php echo 
				      $result_allcat['catName'] ?></a></li>
				      <?php

								}
							}
				      ?>
    				</ul>
    	
 				</div>
 		</div>
 		<div class="comment">
 			<div class="row">
 				<div class="col-md-8">
 				<h3 style="color: #602D8D;font-family: 'Monda', sans-serif; font-size: 22px">COMMENT</h3>
 				<?php
 					if(isset($binhluan_insert))
 					{
 						echo $binhluan_insert;
 					}
 				?>
 					 <form action="" method="POST">
 					 	<p><input type="hidden" value="<?php echo $id ?>" name="product_id_binhluan"></p>
 				 		<p><input type="text" class="form-control" name="tennguoibinhluan" placeholder="Name"></p>
 						<p>
 							<textarea style="resize: none;" rows="5" placeholder="Comment..." class="form-control" name="binhluan"></textarea>
 						</p>
 						<p><input type="submit" value="Send" name="binhluan_submit" class="btn btn-success"></p>
 					</form>
 				</div>
 			</div>
 		</div>

 	</div>
<?php
	include 'inc/footer.php';
?>