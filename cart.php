<?php
	include 'inc/header.php';
?>
<?php
if(isset($_GET['cartid']))
{
	$cartid = $_GET['cartid'];
	$delcart = $ct->del_product_cart($cartid);
}
if($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST['submit']))
{
	$cartId = $_POST['cartId'];
	$productId = $_POST['productId'];
	$quantity = $_POST['quantity'];
    $update_quantity_cart = $ct->update_quantity_cart($quantity,$cartId,$productId);
    if($quantity<=0)
    {
    	$delcart = $ct->del_product_cart($cartId);
    }
}
?>
<?php
if(!isset($_GET['id']))
{
	echo"<meta http-equiv='refresh' content='0;URL=?id=live'>";
}
?>
 <div class="main">
    <div class="content">
    	<div class="cartoption">		
			<div class="cartpage">
			    	<h2>Your Cart</h2>
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
								<th width="20%">Tên Sản Phẩm</th>
								<th width="10%">Hình Ảnh</th>
								<th width="15%">Đơn Giá</th>
								<th width="25%">Số Lượng</th>
								<th width="20%">Số Tiền</th>
								<th width="10%">Thao Tác</th>
							</tr>
							<?php
								$get_product_cart = $ct->get_product_cart();
								if($get_product_cart)
								{
									$subtotal = 0;
									$qty = 0;
									while($result = $get_product_cart->fetch_assoc())
									{	

							?>
							<tr>
								<td><?php echo $result['productName'] ?></td>
								<td><img src="admin/uploads/<?php echo $result['image'] ?>" alt=""/></td>
								<td><?php echo $fm->format_currency($result['price']) ?></td>
								<td>
									<form action="" method="post">
										<input type="hidden" name="cartId" value="<?php echo $result['cartId'] ?>"/>
										<input type="hidden" name="productId" value="<?php echo $result['productId'] ?>"/>
										<input type="number" name="quantity" min="0" value="<?php echo $result['quantity'] ?>"/>
										<input type="submit" name="submit" value="Cập nhật"/>
									</form>
								</td>
								<td>
									<?php
										$total = $result['price'] * $result['quantity'];
										echo $fm->format_currency($total);
									?>
								</td>
								<td><a onclick="return confirm('Có phải bạn muốn xóa sản phẩm này ra khỏi đơn hàng không?')" href="?cartid=<?php echo $result['cartId'] ?>">Xóa</a></td>
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
						<table style="float:right;text-align:left;" width="33%">
							<tr>
								<td> <p style="color: #fe5800; display: inline; font-size: 20px;">Tổng số tiền: </p>
								
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
					   			echo '<span style="font-size:20px; color:red;">Giỏ hàng đang trống<s/span>';
					   		}
					   ?>
					</div>
					<div class="shopping">
						<div class="shopleft">
							<a href="index.php"> <img src="images/shop.png" alt="" /></a>
						</div>
						<div class="shopright">
							<a href="payment.php"> <img src="images/check.png" alt="" /></a>
						</div>
					</div>
    	</div>  	
       <div class="clear"></div>
    </div>
 </div>
<?php
	include 'inc/footer.php';
?>