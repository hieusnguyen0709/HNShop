<?php
	include 'inc/header.php';
?>
<?php
		$login_check = Session::get('customer_login');
	  	if($login_check == false)
	  	{
	  		header('Location:login.php');
	  	}

	  	$ct = new cart();
		if(isset($_GET['confirmid']))
		{
			$id = $_GET['confirmid'];
			$price = $_GET['price'];
			$time = $_GET['time'];
			$confirm_shifted = $ct->confirm_shifted($id,$time,$price);
		}
?>
 <div class="main">
    <div class="content">
    	<div class="cartoption">		
			<div class="cartpage">
			    	<h2 style="display: inline;">Chi tiết đơn hàng</h2>
						<table class="tblone">
							<tr>
								<th width="10%">ID</th>
								<th width="20%">Tên sản phẩm</th>
								<th width="10%">Hình ảnh</th>
								<th width="10%">Số tiền</th>
								<th width="10%">Số lượng</th>
								<th width="20%">Ngày</th>
								<th width="10%">Trạng thái</th>
								<th width="10%">Thao tác</th>
							</tr>
							<?php
								$customer_id = Session::get('customer_id');
								$get_cart_ordered = $ct->get_cart_ordered($customer_id);
								if($get_cart_ordered)
								{
									$i =0;
									$qty = 0;
									while($result = $get_cart_ordered->fetch_assoc())
									{	
										$i++;
							?>
							<tr>
								<td><?php echo $i; ?></td>
								<td><?php echo $result['productName'] ?></td>
								<td><img src="admin/uploads/<?php echo $result['image'] ?>" alt=""/></td>
								<td><?php echo $fm->format_currency($result['price']) ?></td>
								<td><?php echo $result['quantity'] ?></td>
								
								<td><?php echo $fm->formatDate($result['date_order']) ?></td>
								<td>
									<?php
										if($result['status'] == '0')
										{
											echo '<p style="color: green;">Đang xử lý</p>';
										}
										else if($result['status'] == '1')
										{
									?>
										<span>Đã giao</span>
										
									<?php
										}
										else if($result['status'] == '2')
										{
											echo'Đã nhận hàng';
										}
									?>
								</td>

								<?php
									if($result['status'] == '0')
									{
								?>
								<td><?php echo 'N/A'; ?></td>							
								<?php
									}
									else if($result['status'] == '1')
									{
								?>
								<td><a href="?confirmid=<?php echo $customer_id ?> &price=<?php echo 
								$result['price'] ?>&time=<?php echo $result['date_order'] ?>">Xác nhận</a></td>
								<?php
									}
									else
									{
								?>
								<td><?php echo 'Đã nhận hàng'; ?></td>
								<?php
									}
								?>
							</tr>
							<?php
									}
								}
							?>
						</table>
					</div>
					<div class="shopping">
							<center><a href="index.php"> <img src="images/shop.png" alt="" /></a></center>
					</div>
    	</div>  	
       <div class="clear"></div>
    </div>
 </div>
<?php
	include 'inc/footer.php';
?>