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
<style type="text/css">
  h3.payment
  {
    text-align: center;
    font-size: 30px;
    font-weight: bold;
    text-decoration: none;
  }
  .wrapper_method
  {
    text-align: center;
    width: 550px;
    margin: 0 auto;
    border: 1px solid #666;
    padding: 30px;
    background: cornsilk;
  }
  .wrapper_method a
  {
    padding: 10px;
    color: #fff;
    background:red;
  }
  .wrapper_method h3
  {
    margin-bottom: 20px;
  }
</style>
 <div class="main">
    <div class="content">
    	<div class="section group">
    	<div class="content_top">
    		<div class="heading">
    		<h3>Payment Method</h3></br>
    		</div>
    		<div class="clear"></div>	  
            <div class="wrapper_method">
                  <h3 class="payment">Choose your method payment</h3>
                  <a href="offlinepayment.php">Offline Payment</a>
                  <a href="onlinepayment.php">Online Payment</a> </br> </br> </br>
                  <a style="background:grey;" href="cart.php"> << Previous</a>
            </div>
    		</div>
    	</div>
 		</div>
 	</div>
<?php
	include 'inc/footer.php';
?>