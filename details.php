<?php
	include 'inc/header.php';
	include 'inc/slider.php';
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
						<img height="150px" width="200px" src="admin/uploads/<?php echo $result['image'] ?>" alt="" />
					</div>
				<div class="desc span_3_of_2">
					<h2><?php echo $result['productName'] ?></h2>
					<p><?php echo $fm->textShorten($result['product_desc'], 30) ?></p>					
					<div class="price">
						<p>Price: <span><?php echo $result['price']." VND" ?></span></p>
						<p>Category: <span><?php echo $result['catName'] ?></span></p>
						<p>Brand:<span><?php echo $result['brandName'] ?></span></p>
					</div>
				<div class="add-cart">
					<form action="cart.php" method="post">
						<input type="number" class="buyfield" name="" value="1"/>
						<input type="submit" class="buysubmit" name="submit" value="Buy Now"/>
					</form>				
				</div>
			</div>
			<div class="product-desc">
			<h2>Product Details</h2>
			<?php echo $fm->textShorten($result['product_desc'], 30) ?>
	    </div>
				
	</div>
	<?php
	    			}
    			}
	?>
				<div class="rightsidebar span_3_of_1">
					<h2>CATEGORIES</h2>
					<ul>
				      <li><a href="productbycat.php">Mobile Phones</a></li>
    				</ul>
    	
 				</div>
 		</div>
 	</div>
<?php
	include 'inc/footer.php';
?>