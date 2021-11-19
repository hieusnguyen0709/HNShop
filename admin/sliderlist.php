<?php include 'inc/header.php';?>
<?php include 'inc/sidebar.php';?>
<?php include '../classes/product.php';?>
<?php
	$product = new product();
	if(isset($_GET['del_slider']) && isset($_GET['type']))
	{
		$id = $_GET['del_slider'];
		$type = $_GET['type'];
		$update_type_slider = $product->update_type_slider($id,$type);
	}
	if(isset($_GET['slider_del']))
	{
		$id = $_GET['slider_del'];
		$del_slider = $product->del_slider($id);
	}
?>
<div class="grid_10">
    <div class="box round first grid">
        <h2>Danh sách Slider</h2>
        <div class="block">  
        	<?php
        		if(isset($del_slider))
        		{
        			echo $del_slider;
        		}
        	?>
            <table class="data display datatable" id="example">
			<thead>
				<tr>
					<th>No.</th>
					<th>Tên Slider</th>
					<th>Hình ảnh Slider</th>
					<th>Trạng thái</th>
					<th>Thao tác</th>
				</tr>
			</thead>
			<tbody>
				<?php
					$product = new product();
					$get_slider = $product->select_slider_admin();
					if($get_slider)
					{
						$i = 0;
						while($result = $get_slider->fetch_assoc())
						{
							$i++;
				?>
				<tr class="odd gradeX">
					<td><?php echo $i; ?></td>
					<td><?php echo $result['sliderName'] ?></td>
					<td><img src="uploads/<?php echo $result['slider_image'] ?>" height="120px" width="500px"/></td>	
					<td>
						<?php
							if($result['type'] == 1)
							{
						?>
						<a style="color: red" href="?del_slider=<?php echo $result['sliderId'] ?>&type=0">Ẩn</a> 
						<?php
							}
							else if($result['type'] == 0)
							{
						?>
						<a style="color: green" href="?del_slider=<?php echo $result['sliderId'] ?>&type=1">Hiện</a> 
						<?php
							}
						?>
					</td>			
				<td>
					<a href="?slider_del=<?php echo $result['sliderId'] ?>" onclick="return confirm('Are you sure to Delete!');" >Xóa</a> 
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
