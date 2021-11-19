<?php include 'inc/header.php';?>
<?php include 'inc/sidebar.php';?>
<?php include '../classes/category.php'?>
<?php include '../classes/brand.php'?>
<?php include '../classes/product.php'?>
<?php include_once '../helpers/format.php'?>
<?php
$pd = new product();
if(isset($_GET['productid']))
{
	$id = $_GET['productid'];
	$delpro = $pd->delete_product($id);
}
?>
<div class="grid_10">
    <div class="box round first grid">
        <h2>Danh sách sản phẩm</h2>
        <div class="block">  
        	<?php
        		if(isset($delpro))
        		{
        			echo $delpro;
        		}
        	?>
            <table class="data display datatable" id="example">
			<thead>
				<tr>
					<th>ID</th>
					<th>Tên sản phẩm</th>
					<th>Đơn giá</th>
					<th>Trong kho</th>
					<th>Hình ảnh</th>
					<th>Danh mục</th>
					<th>Nhà cung cấp</th>
					<th>Mô tả</th>
					<th>QR Code</th>
					<th>Thao tác</th>
				</tr>
			</thead>
			<tbody>
				<?php
					$pd = new product();
					$fm = new Format();
					$pdlist = $pd->select_product();
					if($pdlist)
					{
						$i = 0;
						while($result = $pdlist->fetch_assoc())
							{
								$i++;

					?>
				<tr class="odd gradeX">
					<td><?php echo $i; ?></td>
					<td><?php echo $result['productName'] ?></td>
					<td><?php echo $fm->format_currency($result['price']) ?></td>
					<td><?php echo $result['quantity'] ?></td>
					<td style="padding-top: 30px;"><img src="uploads/<?php echo $result['image'] ?>" width="80px" height="80px"></td>
					<td><?php echo $result['catName'] ?></td>
					<td><?php echo $result['brandName'] ?></td>
					<td>
					<?php 
						echo $fm->textShorten($result['product_desc'], 30); 
					?>
					</td>
					<td style="padding-top: 30px;">
						<img src="uploads/<?php echo $result['qrImg'] ?>" width="80px" height="80px">
					</td>
					<td><a href="productedit.php?productid=<?php echo $result['productId']?>">Sửa</a> || 
						<a onclick="return confirm('Do you want to delete ?')" href="?productid=<?php echo $result['productId']?>">Xóa</a></td>
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
