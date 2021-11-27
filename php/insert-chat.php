<?php
$filepath = realpath(dirname(__FILE__));
include_once ($filepath.'/../lib/database.php');
include_once ($filepath.'/../lib/session.php');
$db = new Database();
          $incoming_id = $_POST['incoming_id'];
          $outgoing_id = $_POST['outgoing_id'];
          $message = $_POST['message'];
          if(!empty($message))
            {
              $sql = "INSERT INTO tbl_messages (outgoing_msg_id,incoming_msg_id,msg) VALUES('$outgoing_id','$incoming_id','$message')";
              $rs = $db->insert($sql);
              if($rs)
              {
                echo'Thanh cong';
              }

            }
        
?>