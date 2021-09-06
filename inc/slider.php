	<div class="header_bottom">
		<div class="header_bottom_left">
			<div class="section group">
				<?php
					$getLastestIphone = $product->getLastestIphone();
					if($getLastestIphone)
					{
						while($result = $getLastestIphone->fetch_assoc())
						{
				?>
				<div class="listview_1_of_2 images_1_of_2">
					<div class="listimg listimg_2_of_1">
						 <a href="details.php?proid=<?php echo $result['productId']?>"> <img src="admin/uploads/<?php echo $result['image'] ?>" alt="" /></a>
					</div>
				    <div class="text list_2_of_1">
						<h2>Iphone</h2>
						<p><?php echo $result['productName'] ?></p>
						<div class="button"><span><a href="details.php?proid=<?php echo $result['productId']?>">Add to cart</a></span></div>
				   </div>
			   </div>	
			   <?php
			   			}
			   		}
			   ?>		
				<?php
					$getLastestSamsung = $product->getLastestSamsung();
					if($getLastestSamsung)
					{
						while($result = $getLastestSamsung->fetch_assoc())
						{
				?>
				<div class="listview_1_of_2 images_1_of_2">
					<div class="listimg listimg_2_of_1">
						  <a href="details.php"><img src="admin/uploads/<?php echo $result['image'] ?>" alt="" / ></a>
					</div>
					<div class="text list_2_of_1">
						  <h2>Samsung</h2>
						  <p><?php echo $result['productName'] ?></p>
						  <div class="button"><span><a href="details.php?proid=<?php echo $result['productId']?>">Add to cart</a></span></div>
					</div>
				</div>
					<?php
			   				}
			   			}
			  		 ?>	
			</div>
			<div class="section group">
				<?php
					$getLastestXiaomi = $product->getLastestXiaomi();
					if($getLastestXiaomi)
					{
						while($result = $getLastestXiaomi->fetch_assoc())
						{
				?>
				<div class="listview_1_of_2 images_1_of_2">
					<div class="listimg listimg_2_of_1">
						 <a href="details.php"><img src="admin/uploads/<?php echo $result['image'] ?>" alt="" / ></a>
					</div>
				    <div class="text list_2_of_1">
						<h2>Xiaomi</h2>
						<p><?php echo $result['productName'] ?></p>
						<div class="button"><span><a href="details.php?proid=<?php echo $result['productId']?>">Add to cart</a></span></div>
				   </div>
			   </div>
			   	<?php
			   			}
			   		}
			  	?>		
				<?php
					$getLastestOppo = $product->getLastestOppo();
					if($getLastestOppo)
					{
						while($result = $getLastestOppo->fetch_assoc())
						{
				?>
				<div class="listview_1_of_2 images_1_of_2">
					<div class="listimg listimg_2_of_1">
						 <a href="details.php"><img src="admin/uploads/<?php echo $result['image'] ?>" alt="" / ></a>
					</div>
					<div class="text list_2_of_1">
						  <h2>Oppo</h2>
						  <p><?php echo $result['productName'] ?></p>
						  <div class="button"><span><a href="details.php?proid=<?php echo $result['productId']?>">Add to cart</a></span></div>
					</div>
				</div>
				<?php
			   			}
			   		}
			  	?>		
			</div>
		  <div class="clear"></div>
		</div>
			 <div class="header_bottom_right_images">
		   <!-- FlexSlider -->
             
			<section class="slider">
				  <div class="flexslider">
					<ul class="slides">
						<?php
							$get_slider = $product->select_slider();
							if($get_slider)
							{
								while($result = $get_slider->fetch_assoc())
								{
						?>
						<li><img width="400px" height="200px" src="admin/uploads/<?php echo $result['slider_image'] ?>" alt="<?php echo $result['sliderName'] ?>"/></li>
						<?php									
								}
							}
						?>
				    </ul>
				  </div>
	      </section>
<!-- FlexSlider -->
	    </div>
	  <div class="clear"></div>
  </div>	
