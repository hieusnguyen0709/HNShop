<?php include 'inc/header.php';?>
<?php include 'inc/sidebar.php';?>
<?php include '../classes/customer.php'?>
<?php
$cs = new customer();
if($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST['submit']))
{
    $insertCustomer = $cs->insert_customer($_POST);
}
?>
        <div class="grid_10">
            <div class="box round first grid">
                <h2>Add New User</h2>
               <div class="block copyblock"> 
                <?php
                if(isset($insertCustomer))
                {
                    echo $insertCustomer;
                }
                ?>
                 <form action="adduser.php" method="POST">
                    <table class="form">					
                        <tr>
                            <td>
                                <input type="text" name="email" placeholder="Enter E-Mail...">
                            </td>
                        </tr>
                         <tr>
                            <td>
                                <input type="text" name="password" placeholder="Enter Password...">
                            </td>
                        </tr>
                         <tr>
                            <td>
                                <input type="text" name="name" placeholder="Enter Name..." >
                            </td>
                        </tr>
                         <tr>
                            <td>
                                <input type="text" name="phone" placeholder="Enter Phone...">
                            </td>
                        </tr>
                         <tr>
                            <td>
                                <input type="text" name="zipcode" placeholder="Enter Zip-Code...">
                            </td>
                        </tr>
                         <tr>
                            <td>
                                <input type="text" name="address" placeholder="Enter Address...">
                            </td>
                        </tr>
                         <tr>
                            <td>
                                <input type="text" name="city" placeholder="Enter City...">
                            </td>
                        </tr>
                         <tr>
                            <td>
                                <input type="text" name="country" placeholder="Enter Country...">
                            </td>
                        </tr>
						<tr> 
                            <td>
                                <input type="submit" name="submit" Value="Save" />
                            </td>
                        </tr>
                    </table>
                    </form>
                </div>
            </div>
        </div>
<?php include 'inc/footer.php';?>