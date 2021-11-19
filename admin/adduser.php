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
                <h2>Thêm người dùng</h2>
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
                                <input type="text" name="email" placeholder="Nhập e-mail...">
                            </td>
                        </tr>
                         <tr>
                            <td>
                                <input type="text" name="password" placeholder="Nhập mật khẩu...">
                            </td>
                        </tr>
                         <tr>
                            <td>
                                <input type="text" name="name" placeholder="Nhập tên..." >
                            </td>
                        </tr>
                         <tr>
                            <td>
                                <input type="text" name="phone" placeholder="Nhập số điện thoại...">
                            </td>
                        </tr>
                         <tr>
                            <td>
                                <input type="text" name="zipcode" placeholder="Nhập zip-code...">
                            </td>
                        </tr>
                         <tr>
                            <td>
                                <input type="text" name="address" placeholder="Nhập địa chỉ...">
                            </td>
                        </tr>
                         <tr>
                            <td>
                                <input type="text" name="city" placeholder="Nhập thành phố...">
                            </td>
                        </tr>
                         <tr>
                            <td>
                                <input type="text" name="country" placeholder="Nhập quốc gia...">
                            </td>
                        </tr>
						<tr> 
                            <td>
                                <input type="submit" name="submit" Value="Lưu" />
                            </td>
                        </tr>
                    </table>
                    </form>
                </div>
            </div>
        </div>
<?php include 'inc/footer.php';?>