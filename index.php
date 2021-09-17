<style type="text/css">
.page
{
	color:#602D8D; font-size:22px;font-family: "Monda", sans-serif;
}
.number
{
	margin:0 3px; background-color:#602D8D; color:white; font-size:25px; font-family: "Monda", sans-serif;
}
</style>
<?php
	include 'inc/header.php';
	include 'inc/slider.php';
?>
 <div class="main">
    <div class="content">
    	<div class="content_top">
    		<div class="heading">
    		<h3>Sản phẩm nổi bật</h3>
    		</div>
    		<div class="clear"></div>
    	</div>
	      <div class="section group">
	      	<?php
	      		$product_featured = $product->getproduct_featured();
	      		if($product_featured)
	      		{	
	      			while($result = $product_featured->fetch_assoc())
	      			{  				
	      	?>
				<div class="grid_1_of_4 images_1_of_4">
					 <a href="details.php?proid=<?php echo $result['productId']?>"><img height="200px" width="200px" src="admin/uploads/<?php echo $result['image'] ?>" alt="" /></a>
					 <h2><?php echo $result['productName'] ?></h2>
					 <p><?php echo $fm->textShorten($result['product_desc'], 30) ?></p>
					 <p><span class="price"><?php echo $fm->format_currency($result['price']) ?></span></p>
				     <div class="button"><span><a href="details.php?proid=<?php echo $result['productId']?>" class="details">Chi tiết</a></span></div>
				</div>
			<?php
					}
				}
			?>
			</div>
			<div class="content_bottom">
    		<div class="heading">
    		<h3>Sản phẩm mới</h3>
    		</div>
    		<div class="clear"></div>
    	</div>
			<div class="section group">
			<?php
	      		$product_new = $product->getproduct_new();
	      		if($product_new)
	      		{	
	      			while($result = $product_new->fetch_assoc())
	      			{  				
	      	?>
				<div class="grid_1_of_4 images_1_of_4">
					 <a href="details.php?proid=<?php echo $result['productId']?>"><img height="200px" width="200px" src="admin/uploads/<?php echo $result['image'] ?>" alt="" /></a>
					 <h2><?php echo $result['productName'] ?></h2>
					 <p><?php echo $fm->textShorten($result['product_desc'], 30) ?></p>
					 <p><span class="price"><?php echo $fm->format_currency($result['price']) ?></span></p>
				     <div class="button"><span><a href="details.php?proid=<?php echo $result['productId']?>" class="details">Chi tiết</a></span></div>
				</div>
				
			<?php
					}
				}
			?>
			</div>
			<div class="content_top">
    		<div class="heading">
    		<div style="">
				<?php
					$product_all = $product->get_all_product();
					$product_count = mysqli_num_rows($product_all);
					$product_button = ceil($product_count/4);
					$i = 1;
					echo'<p class="page">PAGES : </p>';
					for($i=1;$i<=$product_button;$i++)
					{
						echo '<a class="number" href="index.php?trang='.$i.'">'.$i.'</a>';
					}				
				?>
			</div>
    		</div>
    		<div class="clear"></div>
    	</div>
			
    </div>
 </div>
<?php
	include 'inc/footer.php';
?>