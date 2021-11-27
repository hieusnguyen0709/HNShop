<?php include 'inc/header.php';?>
<?php include 'inc/sidebar.php';?>
<?php include '../classes/customer.php';
$cs = new customer();
?>

<?php
$filepath = realpath(dirname(__FILE__));
	include_once ($filepath.'/../classes/cart.php'); 
	include_once ($filepath.'/../helpers/format.php'); 
?>

<?php 
  // session_start();
  // include_once "php/config.php";
  // if(!isset($_SESSION['unique_id'])){
  //   header("location: login.php");
  // }
?>
<body>
  <div class="wrapper">
    <section class="users" style="background-color: white">
      <header>
        <div class="content">
          <img src="../images/logoHN.png" alt="">
          <div class="details">
            <span>HNShop</span>
            <p>Active Now</p>
          </div>
        </div>
      </header>
      <div class="search">
        <span class="text">Select an user to start chat</span>
        <input type="text" placeholder="Enter name to search...">
        <button><i class="fas fa-search"></i></button>
      </div>
      <div class="users-list">
        <?php
          $adminId_to_get_last_send_msg = Session::get('adminId');
          $get_customer = $cs->select_all_customers();
                    if($get_customer)
                    {
                        while($result = $get_customer->fetch_assoc())
                        {                    
                          $id_user_last_send_msg = $result['id'];
        ?>
  			<a href="chat.php?id_user=<?php echo $result['id'] ?>">
  				<div class="content">
  					<img src="../images/avt mac dinh.jpg" alt="">
  					<div class="details">
  						<span> <?php echo $result['name'] ?></span>
  						<p><?php $last_send_msg = $cs->last_send_msg($id_user_last_send_msg, $adminId_to_get_last_send_msg); ?> </p>
  					</div>
  				</div>
  				<div class="status-dot"><i class="fas fa-circle"></i></div>
  			</a>
        <?php
                        }
                    } 
        ?>
      </div>
    </section>
  </div>
<script src="../javascript/users.js"></script>
<script type="text/javascript">
    $(document).ready(function () {
        setupLeftMenu();

        $('.datatable').dataTable();
        setSidebarHeight();
    });
</script>
<?php include 'inc/footer.php';?>