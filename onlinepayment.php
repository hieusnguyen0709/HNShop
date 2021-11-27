<?php
	include 'inc/header.php';
	//include 'inc/slider.php';
?>
<?php
if(isset($_GET['orderid']))
{
	$customer_id = Session::get('customer_id');
    $insertOrder = $ct->insertOrder($customer_id);
    header('location:success.php');
    $delCart = $ct->del_all_data_cart();
}
?>
<style type="text/css">
	.box_left
	{
		width: 55%;
		border:1px solid #666;
		float: left;
		padding: 4px;
	}
	.box_right
	{
		width: 40%;
		border:1px solid #666;
		float: right;
		padding: 4px;
	}
	a.a_submit_order
	{
		padding: 7px 20px;
		color: red;
		font-size: 30px;
	}
</style>
<form action="" method="POST">
 <div class="main">
    <div class="content">
    	<div class="section group">
 		<div class="heading">
    		<h3></h3></br>
    		</div>
    		<div class="clear"></div>
    		<div class="box_left">
    				<div class="cartpage">
			    	<h2>Cart</h2>
			    	<?php
			    		if(isset($update_quantity_cart))
			    		{
			    			echo $update_quantity_cart;
			    		}
			    	?>
			    	<?php
			    		if(isset($delcart))
			    		{
			    			echo $delcart;
			    		}
			    	?>
						<table class="tblone">
							<tr>
								<th width="2%">ID</th>
								<th width="17%">Product</th>
								<th width="10%">Image</th>
								<th width="25%">Price</th>
								<th width="10%">Quantity</th>
								<th width="25%">Total Price</th>
							</tr>
							<?php
								$get_product_cart = $ct->get_product_cart();
								if($get_product_cart)
								{
									$subtotal = 0;
									$qty = 0;
									$i = 0;
									while($result = $get_product_cart->fetch_assoc())
									{	
										$i++;
							?>
							<tr>
								<td><?php echo $i ?></td>
								<td><?php echo $result['productName'] ?></td>
								<td><img src="admin/uploads/<?php echo $result['image'] ?>" alt=""/></td>
								<td><?php echo $fm->format_currency($result['price']) ?></td>
								<td>
									<?php echo $result['quantity'] ?>								</td>
								<td>
									<?php
										$total = $result['price'] * $result['quantity'];
										echo $fm->format_currency($total);
									?>
								</td>
							</tr>
							<?php
									$subtotal += $total;
									$qty = $qty + $result['quantity'];	
									}
								}
							?>
						</table>
							<?php
									$check_cart = $ct->check_cart();
									if($check_cart)
									{
										
							?>
						<table style="float:right;text-align:left; border:1px;" width="38%">
							<tr>
								<td><p style="color: #fe5800; display: inline; font-size: 20px;">Grand Total : </p>
								
									<?php
										echo $fm->format_currency($subtotal);
										Session::set('sum',$subtotal);
										Session::set('qty',$qty);
									?>
								</td>
							</tr>
					   </table>
					   <?php
					   		}
					   		else
					   		{
					   			echo '<span style="font-size:20px; color:red;">Your cart is Empty<s/span>';
					   		}
					   ?>
					</div>
    		</div>

    		<div class="box_right">
    			<div class="cartpage">
			    	<h2>Information</h2>
    				<table width="400" border="1">
    		    <tbody>
    		   	<?php
    		   		$id = Session::get('customer_id');
    		   		$get_customers = $cs->select_customers($id);
    		   		if($get_customers)
    		   		{
    		   			while($result = $get_customers->fetch_assoc())
    		   			{
    		   	?>
    		      <tr>
    		        <td width="205" height="28" style="color:#602D8D; font-family: 'Monda', sans-serif; font-size: 18px;" >NAME</td>
    		        <td width="179" style="font-family: 'Monda', sans-serif;"><?php echo $result['name'] ?></td>
  		        </tr>
    		      <tr>
    		        <td height="35" style="color:#602D8D; font-family: 'Monda', sans-serif; font-size: 18px;">EMAIL</td>
    		        <td style="font-family: 'Monda', sans-serif;"><?php echo $result['email'] ?></td>
  		        </tr>
    		      <tr>
    		        <td height="35" style="color:#602D8D; font-family: 'Monda', sans-serif; font-size: 18px;">PHONE</td>
    		        <td style="font-family: 'Monda', sans-serif;"><?php echo $result['phone'] ?></td>
  		        </tr>
    		      <tr>
    		        <td height="35" style="color:#602D8D; font-family: 'Monda', sans-serif; font-size: 18px;">ZIPCODE</td>
    		        <td style="font-family: 'Monda', sans-serif;"><?php echo $result['zipcode'] ?></td>
  		        </tr>
    		      <tr>
    		        <td height="35" style="color:#602D8D; font-family: 'Monda', sans-serif; font-size: 18px;">ADDRESS</td>
    		        <td style="font-family: 'Monda', sans-serif;"><?php echo $result['address'] ?></td>
  		        </tr>
    		      <tr>
    		        <td height="35" style="color:#602D8D; font-family: 'Monda', sans-serif; font-size: 18px;">CITY</td>
    		        <td style="font-family: 'Monda', sans-serif;"><?php echo $result['city'] ?></td>
  		        </tr>
    		      <tr>
    		        <td height="35" style="color:#602D8D; font-family: 'Monda', sans-serif; font-size: 18px;">COUNTRY</td>
    		        <td style="font-family: 'Monda', sans-serif;"><?php echo $result['country'] ?></td>
  		        </tr>
  		        <tr>
  		        	<td height="40"><button style="font-size: 18px; background-color: white; color: white; border-radius: 10%"><a href="editprofile.php">Update</a></button></td>
  		        </tr>
  		        <?php
    		   			}
    		   		}
  		        ?>
  		      </tbody>
  		    </table>
  		</div>
    		</div>	

    	<div class="box_left">
    				<div class="cartpage">
			    	<h2 style="display: inline;">Choose Your Payment Method</h2> <br/>
			    	 <input type="radio" id="momo" name="momo" checked style="margin-top:25px;">
			    	 <label for="momo">Momo</label>
			    	 <input type="radio" id="Zalopay" name="Zalopay" >
			    	 <label for="Zalopay">Zalopay</label>
			    	 <input type="radio" id="ViettelPay" name="ViettelPay" >
			    	 <label for="ViettelPay">ViettelPay</label>
					</div>
    		</div>
    	</div>
    </div>
 </div>
 	<center><a href="?orderid=order" class="a_submit_order">Order Now</center>
 </form>
<?php
	//include 'inc/footer.php';
?>