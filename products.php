<?php
	include 'inc/header.php';
?>
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
 <div class="main">
    <div class="content">

    	<div class="content_top">
    		<div class="heading">
    		<h3>Self-help</h3>
    		</div>
    		<div class="clear"></div>
    	</div>

	      <div class="section group" style="display: inline;">
	      	<?php
    		$getIphone = $product->getIphone();
    		if($getIphone)
    		{
    			while($result = $getIphone->fetch_assoc())
    			{

    		?>	
				<div class="grid_1_of_4 images_1_of_4">
					 <a href="details.php?proid=<?php echo $result['productId']?>"><img height="200px" width="200px" src="admin/uploads/<?php echo $result['image'] ?>" alt="" /></a>
					 <h2><?php echo $result['productName'] ?></h2>
					 <p><?php echo $fm->textShorten($result['product_desc'], 30) ?></p>
					 <p><span class="price"><?php echo $fm->format_currency($result['price']) ?></span></p>
				     <div class="button"><span><a href="details.php?proid=<?php echo $result['productId']?>" class="details">Details</a></span></div>
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
						echo '<a class="number" href="products.php?trang='.$i.'">'.$i.'</a>';
					}				
				?>
			</div>
    		</div>
    		<div class="clear"></div>
    	</div>

    	<div class="content_top">
    		<div class="heading">
    		<h3>Tiểu thuyết</h3>
    		</div>
    		<div class="clear"></div>
    	</div>

	      <div class="section group" style="display: inline;">
	      	<?php
    		$getSamsung = $product->getSamsung();
    		if($getSamsung)
    		{
    			while($result = $getSamsung->fetch_assoc())
    			{

    		?>	
				<div class="grid_1_of_4 images_1_of_4">
					 <a href="details.php?proid=<?php echo $result['productId']?>"><img height="200px" width="200px" src="admin/uploads/<?php echo $result['image'] ?>" alt="" /></a>
					 <h2><?php echo $result['productName'] ?></h2>
					 <p><?php echo $fm->textShorten($result['product_desc'], 30) ?></p>
					 <p><span class="price"><?php echo $fm->format_currency($result['price']) ?></span></p>
				     <div class="button"><span><a href="details.php?proid=<?php echo $result['productId']?>" class="details">Details</a></span></div>
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
						echo '<a class="number" href="products.php?trang='.$i.'">'.$i.'</a>';
					}				
				?>
			</div>
    		</div>
    		<div class="clear"></div>
    	</div>

    	<div class="content_top">
    		<div class="heading">
    		<h3>Lãng mạn</h3>
    		</div>
    		<div class="clear"></div>
    	</div>

	      <div class="section group" style="display: inline;">
	      	<?php
    		$getXiaomi = $product->getXiaomi();
    		if($getXiaomi)
    		{
    			while($result = $getXiaomi->fetch_assoc())
    			{

    		?>	
				<div class="grid_1_of_4 images_1_of_4">
					 <a href="details.php?proid=<?php echo $result['productId']?>"><img height="200px" width="200px" src="admin/uploads/<?php echo $result['image'] ?>" alt="" /></a>
					 <h2><?php echo $result['productName'] ?></h2>
					 <p><?php echo $fm->textShorten($result['product_desc'], 30) ?></p>
					 <p><span class="price"><?php echo $fm->format_currency($result['price']) ?></span></p>
				     <div class="button"><span><a href="details.php?proid=<?php echo $result['productId']?>" class="details">Details</a></span></div>
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
						echo '<a class="number" href="products.php?trang='.$i.'">'.$i.'</a>';
					}				
				?>
			</div>
    		</div>
    		<div class="clear"></div>
    	</div>

    	<div class="content_top">
    		<div class="heading">
    		<h3>Truyện tranh</h3>
    		</div>
    		<div class="clear"></div>
    	</div>

	      <div class="section group" style="display: inline;">
	      	<?php
    		$getOppo = $product->getOppo();
    		if($getOppo)
    		{
    			while($result = $getOppo->fetch_assoc())
    			{

    		?>	
				<div class="grid_1_of_4 images_1_of_4">
					 <a href="details.php?proid=<?php echo $result['productId']?>"><img height="200px" width="200px" src="admin/uploads/<?php echo $result['image'] ?>" alt="" /></a>
					 <h2><?php echo $result['productName'] ?></h2>
					 <p><?php echo $fm->textShorten($result['product_desc'], 30) ?></p>
					 <p><span class="price"><?php echo $fm->format_currency($result['price']) ?></span></p>
				     <div class="button"><span><a href="details.php?proid=<?php echo $result['productId']?>" class="details">Details</a></span></div>
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
						echo '<a class="number" href="products.php?trang='.$i.'">'.$i.'</a>';
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