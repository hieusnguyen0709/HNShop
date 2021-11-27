<?php 
  include_once "inc/header.php"; 
?>
<?php   
  $filepath = realpath(dirname(__FILE__));
  include_once ($filepath.'/lib/database.php');
  $db = new Database();
   ?>
<?php 
  include_once 'classes/customer.php';
  $cs = new customer();
  include_once 'classes/adminlogin.php';
  $ad = new adminlogin();

?>
<?php
  $customer_id = Session::get('customer_id');
  $sql = "SELECT adminId FROM tbl_admin LIMIT 1";
  $rs = $db->select($sql);
  if($rs)
  {
    while($row = mysqli_fetch_assoc($rs))
    {
      $admin_id = $row['adminId'];
      Session::set('admin_id',$admin_id);
    }
  }
?>
  <div class="wrapper">
    <section class="chat-area">
      <header>
        <img src="images/logoHN.png" alt="">
        <div class="details">
          <span>HNShop</span>
          <p>Active</p>
        </div>
      </header>
      <div class="chat-box">
        
      </div>
      <form action="#" class="typing-area">
        <input type="text" class="incoming_id" name="incoming_id" value="<?php echo Session::get('admin_id'); ?>"  hidden>
        <input type="text" name="outgoing_id" value="<?php echo Session::get('customer_id') ?>"  hidden>   
        <input type="text" name="message" class="input-field" placeholder="Type a message here..." autocomplete="off">
        <button><i class="fab fa-telegram-plane"></i></button>
      </form>
    </section>
  </div>

  <script src="javascript/chat_user.js"></script>
<?php 
  include_once "inc/footer.php"; 
?>


