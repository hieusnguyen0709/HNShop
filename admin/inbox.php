﻿<?php include 'inc/header.php';?>
<?php include 'inc/sidebar.php';?>

<?php
$filepath = realpath(dirname(__FILE__));
include_once ($filepath.'/../classes/cart.php'); 
include_once ($filepath.'/../helpers/format.php'); 
?>
<?php
$ct = new cart();
if(isset($_GET['shiftid']))
{
	$id = $_GET['shiftid'];
	$price = $_GET['price'];
	$time = $_GET['time'];
	$shifted = $ct->shifted($id,$time,$price);
}
if(isset($_GET['delid']))
{
	$id = $_GET['delid'];
	$price = $_GET['price'];
	$time = $_GET['time'];
	$del_shifted = $ct->del_shifted($id,$time,$price);
}
?>

        <div class="grid_10">
            <div class="box round first grid">
                <h2>Đơn hàng</h2>
                <div class="block">    
                <?php
                	if(isset($shifted))
                	{
                		echo $shifted;
                	}
                ?>    
                <?php
                	if(isset($del_shifted))
                	{
                		echo $del_shifted;
                	}
                ?>    
                    <table class="data display datatable" id="example">
					<thead>
						<tr>
							<th>No.</th>
							<th>Ngày đặt</th>
							<th>Sản phẩm</th>
							<th>Số lượng</th>
							<th>Số tiền</th>
							<th>ID người dùng</th>
							<th>Điạ chỉ</th>
							<th>Thao tác</th>
						</tr>
					</thead>
					<tbody>
						<?php
							$i = 0;
							$ct = new cart();
							$fm = new Format();
							$get_inbox_cart = $ct->get_inbox_cart();
							if($get_inbox_cart)
							{
								while($result = $get_inbox_cart->fetch_assoc())
								{
									$i++;
						?>
						<tr class="odd gradeX">
							<td><?php echo $i; ?></td>
							<td><?php echo $fm->formatDate($result['date_order']); ?></td>
							<td><?php echo $result['productName']; ?></td>
							<td><?php echo $result['quantity']; ?></td>
							<td><?php echo $fm->format_currency($result['price']) ?></td>
							<td><?php echo $result['customer_id']; ?></td>
							<td><a href="customer.php?customerid=<?php echo $result['customer_id'] ?>">
							Xem người dùng</a>
							</td>
							<td>
								<?php
									if($result['status'] == 0)
									{
								?>
								<a style="color: green;" href="?shiftid=<?php echo $result['id'] ?> &price=<?php echo $result['price'] ?>&time=<?php echo $result['date_order'] ?>">Đang xử lý</a>
								<?php
									}
									else if($result['status'] == 1)
									{
								?>
								<?php
									echo'Đang giao...';
								?>
								<?php
									}
									else
									{
								?>
								<a style="color:red;" href="?delid=<?php echo $result['id'] ?>&price=<?php echo $result['price'] ?>&time=<?php echo $result['date_order'] ?>">Xóa</a>
								<?php
									}
								?>
							</td>
						</tr>
						<?php									
								}
							}
						?>
					</tbody>
				</table>
               </div>
            </div>
        </div>
<script type="text/javascript">
    $(document).ready(function () {
        setupLeftMenu();

        $('.datatable').dataTable();
        setSidebarHeight();
    });
</script>
<?php include 'inc/footer.php';?>
