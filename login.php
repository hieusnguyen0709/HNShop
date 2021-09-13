<?php
	include 'inc/header.php';
?>
<?php
$login_check = Session::get('customer_login');
if($login_check)
{
	header('Location:order.php');
}
?>
<?php
if($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST['submit']))
{
    $insertCustomer = $cs->insert_customer($_POST);
}
?>
<?php
if($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST['login']))
{
    $login_Customer = $cs->login_customer($_POST);
}
?>
 <div class="main">
    <div class="content">
    	 <div class="login_panel">
    	 	<?php
		    	if(isset($login_Customer))
		    	{
		    		echo $login_Customer;
		    	}
		    ?>
        	<h3>Existing Customers</h3>
        	<p>Sign in with the form below.</p>
        	<form action="" method="POST">
                	<input type="text" name="email" class="field" placeholder="Enter Email...">
                    <input type="password" name="password" class="field" placeholder="Enter Password...">
                    <div class="buttons"><div><button type="submit" class="grey" name="login">Sign In</button></div></div>
                    <p></p>
                    <a href="#"><img src="images/login_fb.png" style="border-radius: 3px"></a>
                    <p></p>
                    <a href="#"><img src="images/login_gg.png" style="border-radius: 3px"></a>
            </form>
        </div>

    	<div class="register_account">
    		<h3>Register New Account</h3>
    		<?php
		    	if(isset($insertCustomer))
		    	{
		    		echo $insertCustomer;
		    	}
		    ?>
    		<form action="" method="POST">
		   			 <table>
		   				<tbody>
						<tr>
						<td>
							<div>
								<input type="text" name="email" placeholder="Enter E-Mail...">
							</div>
							<div>
								<input type="text" name="password" placeholder="Enter Password...">
							</div>
							<div>
								<input type="text" name="name" placeholder="Enter Name..." >
							</div>	
				           <div>
				          		<input type="text" name="phone" placeholder="Enter Phone...">
				          </div>	
		    			 </td>
		    			<td>
							<div>
								<input type="text" name="zipcode" placeholder="Enter Zip-Code...">
							</div>
							<div>
								<input type="text" name="address" placeholder="Enter Address...">
							</div>
							<div>
							   <input type="text" name="city" placeholder="Enter City...">
							</div>
						<div>
							<input type="text" name="country" placeholder="Enter Country...">
						</div>        
		    			</td>
		    </tr> 
		    </tbody></table> </br> 
		   <div class="search"><div><button type="submit" name="submit" class="grey">Create Account</button> </div></div>
		    <p class="terms">By clicking 'Create Account' you agree to the <a href="#">Terms &amp; Conditions</a>.</p>
		    <div class="clear"></div>

		    </form>
    	</div>  	
       <div class="clear"></div>
    </div>
 </div>
<?php
	include 'inc/footer.php';
?>