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
/*if($_SERVER['REQUEST_METHOD'] === 'POST')
{
    $catName = $_POST['catName'];
    $updateCat = $cat->update_category($catName,$id);
}*/
?>
        <div class="grid_10">
            <div class="box round first grid">
                <h2>Thông tin khách hàng</h2>
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
                            <td>Tên</td>
                            <td> </td>
                            <td>
                                <input type="text" readonly="readonly" value="<?php echo $result['name'] ?>" name="catName" class="medium" />
                            </td>
                        </tr>
                        <tr>
                            <td>Số điện thoại</td>
                            <td> </td>
                            <td>
                                <input type="text" readonly="readonly" value="<?php echo $result['phone'] ?>" name="catName" class="medium" />
                            </td>
                        </tr>
                        <tr>
                            <td>Thành phố</td>
                            <td> </td>
                            <td>
                                <input type="text" readonly="readonly" value="<?php echo $result['city'] ?>" name="catName" class="medium" />
                            </td>
                        </tr>
                         <tr>
                            <td>Quốc gia</td>
                            <td> </td>
                            <td>
                                <input type="text" readonly="readonly" value="<?php echo $result['country'] ?>" name="catName" class="medium" />
                            </td>
                        </tr>
                        <tr>
                            <td>Địa chỉ</td>
                            <td> </td>
                            <td>
                                <input type="text" readonly="readonly" value="<?php echo $result['address'] ?>" name="catName" class="medium" />
                            </td>
                        </tr>
                        <tr>
                            <td>Email</td>
                            <td> </td>
                            <td>
                                <input type="text" readonly="readonly" value="<?php echo $result['email'] ?>" name="catName" class="medium" />
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