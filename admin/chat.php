<?php include 'inc/header.php';?>
<?php include 'inc/sidebar.php';?>
<?php include '../classes/customer.php';
$cs = new customer();
?>

<?php
$filepath = realpath(dirname(__FILE__));
include_once ($filepath.'/../lib/database.php');
$db = new Database();
?>

<?php 
  // session_start();
  // include_once "php/config.php";
  // if(!isset($_SESSION['unique_id'])){
  //   header("location: login.php");
  // }
?>
 <div class="wrapper">
    <section class="chat-area" style="background-color: white">
      <header>
        <?php
           if(isset($_GET['id_user']))
           {
              Session::set('id_user',$_GET['id_user']);
              $id_user = Session::get('id_user');
           }
           $adminId = Session::get('adminId');
           $get_customer_to_chat = $cs->select_customers_to_chat($id_user);
                    if($get_customer_to_chat)
                    {
                        while($result = $get_customer_to_chat->fetch_assoc())
                        {       
        ?>
        <img src="../images/avt mac dinh.jpg" alt="">
        <div class="details">
          <span><?php echo $result['name'] ?></span>
          <p>Active</p>
        </div>
      </header>
      <div class="chat-box">
      </div>
      <?php
                          }
                      }
      ?>
      <form class="typing-area" action="#">
        <input type="text" class="incoming_id" name="incoming_id" value="<?php echo Session::get('id_user') ?>" hidden>
        <input type="text" name="outgoing_id" value="<?php echo Session::get('adminId') ?>" hidden>   
        <input type="text" name="message" class="input-field" placeholder="Type a message here..." autocomplete="off">
        <button><i class="fab fa-telegram-plane"></i></button>
      </form>
    </section>
  </div>
  <script src="../javascript/chat.js"></script>

<?php include 'inc/footer.php';?>