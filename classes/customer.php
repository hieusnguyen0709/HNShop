<?php
$filepath = realpath(dirname(__FILE__));
include_once ($filepath.'/../lib/database.php');
include_once ($filepath.'/../helpers/format.php');
ob_start();
?>
<?php
 class customer
 {
 	 private $db;
 	 private $fm;

	 public function __construct()
	 {
		$this->db = new Database();
		$this->fm = new Format();  
	 }

	public function insert_customer($data)
	{
		$name = mysqli_real_escape_string($this->db->link, $data['name']);
		$city = mysqli_real_escape_string($this->db->link, $data['city']);
		$zipcode = mysqli_real_escape_string($this->db->link, $data['zipcode']);
		$email = mysqli_real_escape_string($this->db->link, $data['email']);
		$address = mysqli_real_escape_string($this->db->link, $data['address']);
		$country = mysqli_real_escape_string($this->db->link, $data['country']);
		$phone = mysqli_real_escape_string($this->db->link, $data['phone']);
		$password = mysqli_real_escape_string($this->db->link, md5($data['password']));


		if($name == "" || $city == "" || $zipcode == "" || $email == "" || $address == "" || 
		   $country == "" || $phone == "" || $password == "")
		{
			$alert = "<span style='color:red; font-size:18px;'>Fields must be not empty</span>";
			return $alert;
		}
		else
		{
			$check_email ="SELECT * FROM tbl_customer WHERE email='$email' LIMIT 1";
			$result_check = $this->db->select($check_email);
			if($result_check)
			{
				$alert = "<span style='color:red; font-size:18px;'>Email Already Existed ! Please Enter Another One</span>";
				return $alert;
			}
			else
			{
				$query = "INSERT INTO tbl_customer(name,city,zipcode,email,address,country,phone,password,status) VALUES('$name','$city','$zipcode','$email','$address','$country','$phone','$password','0')";
				$result = $this->db->insert($query);
				if($result)
				{
					$alert = "<span style='color:green; font-size:18px;'>Creating an account successfully </span>";
					return $alert;
				}
				else
				{
					$alert = "<span style='color:red; font-size:18px;'>Creating an account is not success</span>";
					return $alert;
				}
			}
		}
	}
	
	public function last_send_msg($id_user_last_send_msg, $adminId_to_get_last_send_msg)
	{
		$sql = "SELECT * FROM tbl_messages WHERE (incoming_msg_id = '$id_user_last_send_msg'
                OR outgoing_msg_id = '$id_user_last_send_msg') AND (outgoing_msg_id = '$adminId_to_get_last_send_msg' 
                OR incoming_msg_id = '$adminId_to_get_last_send_msg') ORDER BY msg_id DESC LIMIT 1";
        $get_last_send_msg = $this->db->select($sql);
        if($get_last_send_msg)
          {
          	while($row = mysqli_fetch_assoc($get_last_send_msg))
          	{
          		$msg = $row['msg']; 
          		echo $msg;
          	}
          }
         else
         {
         	echo'Chưa có tin nhắn nào !';
         }
	}

	public function login_customer($data)
	{
		$email = mysqli_real_escape_string($this->db->link, $data['email']);
		$password = mysqli_real_escape_string($this->db->link, md5($data['password']));

		if($email == "" || $password == "")
		{
			$alert = "<span style='color:red; font-size:18px;'>Fields must be not empty</span>";
			return $alert;
		}
		else
		{
			$check_login ="SELECT * FROM tbl_customer WHERE email='$email' AND password='$password' AND status='0' LIMIT 1";
			$result_check = $this->db->select($check_login);
			if($result_check != false)
			{
				$value = $result_check->fetch_assoc();
				Session::set('customer_login',true);
				Session::set('customer_id',$value['id']);
				Session::set('customer_name',$value['name']);
				header('location:index.php');
			}

			else
			{
				$alert = "<span style='color:red; font-size:18px;'>Email or Password doesn't match !</span>";
				return $alert;
			}
		}
	}

	public function select_customers($id)
	{
		$query ="SELECT * FROM tbl_customer WHERE id='$id' LIMIT 1";
		$result = $this->db->select($query);
		return $result;
	}

	public function select_customers_to_chat($id_user)
	{
		$query ="SELECT * FROM tbl_customer WHERE id='$id_user' LIMIT 1";
		$result = $this->db->select($query);
		return $result;
	}

	public function select_all_customers()
	{
		$query ="SELECT * FROM tbl_customer";
		$result = $this->db->select($query);
		return $result;
	}

	public function delete_customer($id)
	{
		$query ="DELETE FROM tbl_customer WHERE id ='$id'";
		$result = $this->db->delete($query);
		return $result;
	}

	public function update_customers($data,$id)
	{
		$name = mysqli_real_escape_string($this->db->link, $data['name']);
		$city = mysqli_real_escape_string($this->db->link, $data['city']);
		$zipcode = mysqli_real_escape_string($this->db->link, $data['zipcode']);
		$email = mysqli_real_escape_string($this->db->link, $data['email']);
		$address = mysqli_real_escape_string($this->db->link, $data['address']);
		$country = mysqli_real_escape_string($this->db->link, $data['country']);
		$phone = mysqli_real_escape_string($this->db->link, $data['phone']);

		if($name == "" || $city == "" || $zipcode == "" || $email == "" || $address == "" || 
		   $country == "" || $phone == "")
		{
			$alert = "<span style='color:red; font-size:18px;'>Fields must be not empty</span>";
			return $alert;
		}
		else
		{

				$query = "UPDATE tbl_customer SET name='$name', city='$city', zipcode = '$zipcode',email = '$email', address = '$address', country = '$country', phone = '$phone' WHERE id = '$id'";
				$result = $this->db->update($query);
				if($result)
				{
					$alert = "<span style='color:green; font-size:18px;'>Customer Updated Successfully </span>";
					return $alert;
				}
				else
				{
					$alert = "<span style='color:red; font-size:18px;'>Customer Updated Not Successfully</span>";
					return $alert;
				}
		}		
	}

	public function update_status_user($id,$status)
	{
		$status = mysqli_real_escape_string($this->db->link, $status); 
	 	$query = "UPDATE tbl_customer SET status = '$status' WHERE id = '$id' ";
	 	$result=$this->db->update($query);
	 	return $result;
	}

	public function insert_binhluan()
	{
		$product_id = $_POST['product_id_binhluan'];
		$tenbinhluan = $_POST['tennguoibinhluan'];
		$binhluan = $_POST['binhluan'];
		if($tenbinhluan == '' || $binhluan == '')
		{
			$alert = "<span style='color:red; font-size:18px;'>Fields must be not empty</span>";
			return $alert;
		}
		else
		{
				$query = "INSERT INTO tbl_comment(name_comment,comment,product_id) VALUES('$tenbinhluan','$binhluan','$product_id')";
				$result = $this->db->insert($query);
				if($result)
				{
					$alert = "<span style='color:green; font-size:18px;'>Comment Successfully </span>";
					return $alert;
				}
				else
				{
					$alert = "<span style='color:red; font-size:18px;'>Comment Not Success</span>";
					return $alert;
				}
		}
	}
 }
?>