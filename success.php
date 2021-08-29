<?php
	include 'inc/header.php';
	//include 'inc/slider.php';
?>
<?php 
	if(isset($_GET['oderid']) AND $_GET['orderid'] == 'order'){
        $customer_id = Session::get('customer_id');
        $insertOrder = $ct->insertOrder($customer_id);
        $delCart = $ct->del_all_data_cart();
        header('Location:success.php');
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
	p.success_note
	{
		text-align: center;
		padding: 8px;
		font-size: 17px;
	}
</style>
<form action="" method="POST">
 <div class="main">
    <div class="content">
    	<div class="section group">
    		<center><h2 style="font-size: 25px; color: green;">Success Order</h2></center></br>
    		<?php
    			$customer_id = Session::get('customer_id');
    			$get_amount = $ct->getAmountPrice($customer_id);
    			if($get_amount)
    			{
    				$amount = 0;
    				while($result = $get_amount->fetch_assoc())
    				{
    					$price = $result['price'];
    					$amount += $price;
    				}
    			}
    		?>
    		<p class="success_note">Total Price You Have Bought From Our Website :
    			<?php 
    				echo $fm->format_currency($amount);
    			?>
    		 </p>
    		<p class="success_note">We Will Contact As Soon As Possible. Please See Your Order Details Here <a href="orderdetails.php">Click here</a> </p></br>
    		<div class="shopping">
				<center><a href="index.php"> <img src="images/shop.png" alt="" /></a></center>
			</div>
    	</div>
    </div>
 </div>
 </form>
<?php
	include 'inc/footer.php';
?>