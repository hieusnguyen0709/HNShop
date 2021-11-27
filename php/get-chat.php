<?php 
$filepath = realpath(dirname(__FILE__));
include_once ($filepath.'/../lib/database.php');
include_once ($filepath.'/../lib/session.php');
$db = new Database();
          $incoming_id = $_POST['incoming_id'];
          $outgoing_id = $_POST['outgoing_id'];
          $output = "";

          $sql = "SELECT msg_id,incoming_msg_id,outgoing_msg_id,msg FROM tbl_messages
                WHERE (outgoing_msg_id = '$outgoing_id' AND incoming_msg_id = '$incoming_id')
                OR (outgoing_msg_id = '$incoming_id' AND incoming_msg_id = '$outgoing_id')
                ORDER BY msg_id";

          $get_messages = $db->select($sql);
          if($get_messages)
          {
          	while($row = mysqli_fetch_assoc($get_messages))
          	{
          		if($row['outgoing_msg_id'] === $outgoing_id)
                {
                     $output .= '<div class="chat outgoing">
	                                 <div class="details">
	                                     <p>'. $row['msg'] .'</p>
	                                 </div>
                                 </div>';
                }
                else
                {
                    $output .= '<div class="chat incoming">
	                                 <img src="../images/avt mac dinh.jpg" alt="">
	                                 <div class="details">
	                                    <p>'. $row['msg'] .'</p>
	                                </div>
                                 </div>';
                }

            }
          	echo $output;
          }
          else
          {
          	$output .= '<div class="text">No messages are available. Once you send message they will appear here.</div>';
          }
          


          // $i = mysqli_num_rows($rs);
          // if($i > 0)
          // {
          // 	while($row = mysqli_fetch_assoc($rs))
          //   {
          //       if($row['outgoing_msg_id'] === $outgoing_id)
          //       {
          //            $output .= '<div class="chat outgoing">
	         //                         <div class="details">
	         //                             <p>'. $row['msg'] .'</p>
	         //                         </div>
          //                        </div>';
          //       }
          //       else
          //       {
          //           $output .= '<div class="chat incoming">
	         //                         <img src="../images/avt mac dinh.jpg" alt="">
	         //                         <div class="details">
	         //                            <p>'. $row['msg'] .'</p>
	         //                        </div>
          //                        </div>';
          //       }
          //   }
          // }
          //  else
          //  {
          //     $output .= '<div class="text">No messages are available. Once you send message they will appear here.</div>';
          //  }
          //  echo $output;

?>