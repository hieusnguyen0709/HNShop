<?php
	include 'inc/header.php';
?>

 <div class="main">
    <div class="content">
    	<div class="content_top">
			<?php
			if($_SERVER['REQUEST_METHOD'] === 'POST')
			{
				$tukhoa = $_POST['tukhoa'];
			    $search_product = $product->search_product($tukhoa);
			}
			?>
    		<div class="heading">
    		<h3>Keyword : <?php echo $tukhoa ?> </h3>
    		</div>
    		<div class="clear"></div>
    	</div>
	      <div class="" style="display: inline;">
	      	<?php
	      		if($search_product)
	      		{
	      			while($result = $search_product->fetch_assoc())
	      			{
	      	?>
				<div class="grid_1_of_4 images_1_of_4" style="width: 220px; height: 420px; display: inline-block; margin-top: 20px">
					 <a href="details.php?proid=<?php echo $result['productId'] ?>"><img height="200px" width="200px" src="admin/uploads/<?php echo $result['image'] ?>" alt="" /></a>
					 <h2><?php echo $result['productName'] ?></h2>
					 <p><?php echo $fm->textShorten($result['product_desc'], 10) ?></p>
					 <p><span class="price"><?php echo $fm->format_currency($result['price']) ?></span></p>
				     <div class="button"><span><a href="details.php?proid=<?php echo $result['productId'] ?>" class="details">Details</a></span></div>
				</div>
			</div>
			<?php
	      			}
	      		}
	      		else
	      		{
	      			echo '<span style="color:red; font-size:18px;">Keyword does not match</span>';
	      		}
			?>
	
	
    </div>
 </div>
<?php
	//include 'inc/footer.php';
?>