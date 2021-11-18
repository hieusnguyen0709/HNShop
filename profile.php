<?php
	include 'inc/header.php';
	//include 'inc/slider.php';
?>
<?php
		$login_check = Session::get('customer_login');
	  	if($login_check == false)
	  	{
	  		header('Location:login.php');
	  	}
?>
<?php
/*if(isset($_GET['proid']) || $_GET['proid']!=NULL)
{
    $id = $_GET['proid'];
}
else
{
    echo'<script>window.location=""</script>';
}
if($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST['submit']))
{
	$quantity = $_POST['quantity'];
    $AddtoCart = $ct->add_to_cart($quantity,$id);
}*/
?>
 <div class="main">
    <div class="content">
    	<div class="section group">
    	<div class="content_top">
    		<div class="heading">
    		<h3>Thông tin tài khoản</h3>
    		</div>
    		<div class="clear">		  
    		</div>
    	</div>
		<center>
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
    		        <td width="205" height="28" style="color:#602D8D; font-family: 'Monda', sans-serif; font-size: 18px;" >TÊN</td>
    		        <td width="179" style="font-family: 'Monda', sans-serif;"><?php echo $result['name'] ?></td>
  		        </tr>
    		      <tr>
    		        <td height="35" style="color:#602D8D; font-family: 'Monda', sans-serif; font-size: 18px;">EMAIL</td>
    		        <td style="font-family: 'Monda', sans-serif;"><?php echo $result['email'] ?></td>
  		        </tr>
    		      <tr>
    		        <td height="35" style="color:#602D8D; font-family: 'Monda', sans-serif; font-size: 18px;">SỐ ĐIỆN THOẠI</td>
    		        <td style="font-family: 'Monda', sans-serif;"><?php echo $result['phone'] ?></td>
  		        </tr>
    		      <tr>
    		        <td height="35" style="color:#602D8D; font-family: 'Monda', sans-serif; font-size: 18px;">ZIPCODE</td>
    		        <td style="font-family: 'Monda', sans-serif;"><?php echo $result['zipcode'] ?></td>
  		        </tr>
    		      <tr>
    		        <td height="35" style="color:#602D8D; font-family: 'Monda', sans-serif; font-size: 18px;">ĐỊA CHỈ</td>
    		        <td style="font-family: 'Monda', sans-serif;"><?php echo $result['address'] ?></td>
  		        </tr>
    		      <tr>
    		        <td height="35" style="color:#602D8D; font-family: 'Monda', sans-serif; font-size: 18px;">THÀNH PHỐ</td>
    		        <td style="font-family: 'Monda', sans-serif;"><?php echo $result['city'] ?></td>
  		        </tr>
    		      <tr>
    		        <td height="35" style="color:#602D8D; font-family: 'Monda', sans-serif; font-size: 18px;">QUỐC GIA</td>
    		        <td style="font-family: 'Monda', sans-serif;"><?php echo $result['country'] ?></td>
  		        </tr>
  		        <tr>
  		        	<td height="40"><button style="font-size: 18px; background-color: white; color: white; border-radius: 10%"><a href="editprofile.php">Cập nhật</a></button></td>
  		        </tr>
  		        <?php
    		   			}
    		   		}
  		        ?>
  		      </tbody>
  		    </table>
	</center>
 		</div>
 	</div>
<?php
	include 'inc/footer.php';
?>