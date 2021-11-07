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
}*/
$id = Session::get('customer_id');

if($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST['submit']))
{
  $UpdateCustomers = $cs->update_customers($_POST,$id);
}
?>
 <div class="main">
    <div class="content">
    	<div class="section group">
    	<div class="content_top">
    		<div class="heading">
    		<h3>Cập nhật thông tin khách hàng</h3>
    		</div>
    		<div class="clear">		  
    		</div>
    	</div>
		<center>
      <form action="" method="POST">
    		<table width="400" border="1">
              <tr>
                
                  <?php
                    if(isset($UpdateCustomers))
                    {
                      echo'<td colspan="2">'.$UpdateCustomers.'</td>';
                    }
                  ?>
                
              </tr>
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
                <td><input style="font-family: 'Monda', sans-serif;" type="text" name="name" value="<?php echo $result['name'] ?>"> 
                </td>
  		        </tr>
    		      <tr>
    		        <td height="35" style="color:#602D8D; font-family: 'Monda', sans-serif; font-size: 18px;">EMAIL</td>
                <td><input style="font-family: 'Monda', sans-serif;" type="text" name="email" value="<?php echo $result['email'] ?>"> 
                </td>
  		        </tr>
    		      <tr>
    		        <td height="35" style="color:#602D8D; font-family: 'Monda', sans-serif; font-size: 18px;">SỐ ĐIỆN THOẠI</td>
                 <td><input style="font-family: 'Monda', sans-serif;" type="text" name="phone" value="<?php echo $result['phone'] ?>"> 
                </td>
  		        </tr>
    		      <tr>
    		        <td height="35" style="color:#602D8D; font-family: 'Monda', sans-serif; font-size: 18px;">ZIPCODE</td>
                <td><input style="font-family: 'Monda', sans-serif;" type="text" name="zipcode" value="<?php echo $result['zipcode'] ?>"> 
                </td>
  		        </tr>
    		      <tr>
    		        <td height="35" style="color:#602D8D; font-family: 'Monda', sans-serif; font-size: 18px;">ĐỊA CHỈ</td>
                <td><input style="font-family: 'Monda', sans-serif;" type="text" name="address" value="<?php echo $result['address'] ?>"> 
                </td>
  		        </tr>
    		      <tr>
    		        <td height="35" style="color:#602D8D; font-family: 'Monda', sans-serif; font-size: 18px;">TỈNH / THÀNH PHỐ</td>
                <td><input style="font-family: 'Monda', sans-serif;" type="text" name="city" value="<?php echo $result['city'] ?>"> 
                </td>
  		        </tr>
    		      <tr>
    		        <td height="35" style="color:#602D8D; font-family: 'Monda', sans-serif; font-size: 18px;">QUỐC GIA</td>
                <td><input style="font-family: 'Monda', sans-serif;" type="text" name="country" value="<?php echo $result['country'] ?>"> 
                </td>
  		        </tr>
  		        <tr>
  		        	<td height="40"><input type="submit" name="submit" value="Lưu" style="font-size: 18px; background-color: white; color:#602D8D; border-radius: 10%"></td>
  		        </tr>
  		        <?php
    		   			}
    		   		}
  		        ?>
  		    </table>
        </form>
	</center>
 		</div>
 	</div>
<?php
	include 'inc/footer.php';
?>