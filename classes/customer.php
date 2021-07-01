<?php
$filepath = realpath(dirname(__FILE__));
include_once ($filepath.'/../lib/database.php');
include_once ($filepath.'/../helpers/format.php');
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
				$query = "INSERT INTO tbl_customer(name,city,zipcode,email,address,country,phone,password) VALUES('$name','$city','$zipcode','$email','$address','$country','$phone','$password')";
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
			$check_login ="SELECT * FROM tbl_customer WHERE email='$email' AND password='$password' LIMIT 1";
			$result_check = $this->db->select($check_login);
			if($result_check != false)
			{
				$value = $result_check->fetch_assoc();
				Session::set('customer_login',true);
				Session::set('customer_id',$value['id']);
				Session::set('customer_name',$value['name']);
				header('location:order.php');
			}
			else
			{
				$alert = "<span style='color:red; font-size:18px;'>Email or Passord doesn't match !</span>";
				return $alert;
			}
		}
	}
 }
?>