<?php include 'inc/header.php';?>
<?php include 'inc/sidebar.php';?>
<?php include '../classes/customer.php'?>
<?php include_once '../helpers/format.php'?>
<?php
$cs = new customer();
if(isset($_GET['customerid']))
{
	$id = $_GET['customerid'];
	$delete_customer = $cs->delete_customer($id);
}
?>
<div class="grid_10">
    <div class="box round first grid">
        <h2>User List</h2>
        <div class="block">  
            <table class="data display datatable" id="example">
			<thead>
				<tr>
					<th>ID</th>
					<th>Email</th>
					<th>Password</th>
					<th>Created Date</th>
					<th>Status</th>
					<th>Action</th>
					
				</tr>
			</thead>
			<tbody>
				<?php
					
					$select_all_customers = $cs->select_all_customers();
					if($select_all_customers)
					{
						$i = 0;
						while($result = $select_all_customers->fetch_assoc())
						{
							$i++;
				?>
				<tr class="odd gradeX">
					<td><?php echo $i; ?></td>
					<td><?php echo $result['email'] ?></td>
					<td><?php echo $result['password'] ?></td>
					<td><?php echo $result['created_date'] ?></td>
					<td>Active</td>
					<td> 
					<a href="edituser.php?customerid=<?php echo $result['id']?>">View</a> || 
					<a href="?customerid=<?php echo $result['id'] ?>" onclick="return confirm('Are you sure to Delete!');">Delete</a></td>
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
