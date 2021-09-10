<?php include 'inc/header.php';?>
<?php include 'inc/sidebar.php';?>
<?php 
$filepath = realpath(dirname(__FILE__));
include_once ($filepath.'/../classes/customer.php'); 
include_once ($filepath.'/../helpers/format.php')
?>
<?php
if(isset($_GET['customerid']) || $_GET['customerid']!=NULL)
{
    $id = $_GET['customerid'];
}
$cs = new customer();
if($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST['submit']))
{
    $updateUser = $cs->update_customers($_POST,$id);
}
?>
        <div class="grid_10">
            <div class="box round first grid">
                <h2>Customer Information</h2>
                 <?php
                    if(isset($updateUser))
                    {
                        echo $updateUser;
                    }
                ?>
               <div class="block copyblock"> 
                <?php
                    $get_customer = $cs->select_customers($id);
                    if($get_customer)
                    {
                        while($result = $get_customer->fetch_assoc())
                        {

                    
                ?>
                 <form action="" method="POST">
                    <table class="form">					
                        <tr>
                            <td>Name</td>
                            <td> </td>
                            <td>
                                <input type="text" value="<?php echo $result['name'] ?>" name="name" class="medium" />
                            </td>
                        </tr>
                        <tr>
                            <td>Phone</td>
                            <td> </td>
                            <td>
                                <input type="text" value="<?php echo $result['phone'] ?>" name="phone" class="medium" />
                            </td>
                        </tr>
                        <tr>
                            <td>City</td>
                            <td> </td>
                            <td>
                                <input type="text" value="<?php echo $result['city'] ?>" name="city" class="medium" />
                            </td>
                        </tr>
                         <tr>
                            <td>Country</td>
                            <td> </td>
                            <td>
                                <input type="text" value="<?php echo $result['country'] ?>" name="country" class="medium" />
                            </td>
                        </tr>
                        <tr>
                            <td>Address</td>
                            <td> </td>
                            <td>
                                <input type="text"  value="<?php echo $result['address'] ?>" name="address" class="medium" />
                            </td>
                        </tr>
                        <tr>
                            <td>Email</td>
                            <td> </td>
                            <td>
                                <input type="text"  value="<?php echo $result['email'] ?>" name="email" class="medium" />
                            </td>
                        </tr>
                        <tr>
                            <td>Password</td>
                            <td> </td>
                            <td>
                                <input type="text"  value="<?php echo $result['password'] ?>" name="password" class="medium" />
                            </td>
                        </tr>
                         <tr>
                            <td>Zip-code</td>
                            <td> </td>
                            <td>
                                <input type="text"  value="<?php echo $result['zipcode'] ?>" name="zipcode" class="medium" />
                            </td>
                        </tr>
                       <tr> 
                            <td></td>
                            <td> </td>
                            <td>
                                <input type="submit" name="submit" Value="Save" />
                            </td>
                        </tr>
                    </table>
                    </form>
                <?php
                        }
                    }
                ?>
                </div>
            </div>
        </div>
<?php include 'inc/footer.php'; ?>