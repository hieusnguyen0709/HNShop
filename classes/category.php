<?php
include '../lib/database.php';
include '../helpers/format.php';
?>
<?php
 class category
 {
 	 private $db;
 	 private $fm;

	 public function __construct()
	 {
		$this->db = new Database();
		$this->fm = new Format();  
	 }

	 public function insert_category($catName)
	 {
		$catName = $this->fm->validation($catName);

		$catName = mysqli_real_escape_string($this->db->link, $catName);  
		//Ket noi toi CSDL

		if(empty($catName))
		{
			$alert = "<span class='error'>Category must be not empty</span>";
			return $alert;
		}
		else
		{
			$query = "INSERT INTO tbl_category(catName) VALUES('$catName')";
			$result = $this->db->insert($query);
			if($result)
			{
				$alert = "<span class='success'>Insert category successfully </span>";
				return $alert;
			}
			else
			{
				$alert = "<span class='error'>Insert category not success </span>";
				return $alert;
			}
		}
	 }

	 public function select_category()
	 {
	 	$query = "SELECT * FROM tbl_category ORDER BY catId desc";
	 	$result = $this->db->select($query);
	 	return $result;
	 }

	 public function getcatbyId($id)
	 {
	 	$query = "SELECT * FROM tbl_category WHERE catId = '$id'";
	 	$result = $this->db->select($query);
	 	return $result;
	 }

	 public function update_category($catName,$id)
	 {
	 	$catName = $this->fm->validation($catName);
		$catName = mysqli_real_escape_string($this->db->link, $catName); 
		$id = mysqli_real_escape_string($this->db->link, $id); 
		if(empty($catName))
		{
			$alert = "<span class='error'>Category must be not empty</span>";
			return $alert;
		}
		else
		{
			$query = "UPDATE tbl_category SET catName = '$catName' WHERE catId = '$id'";
			$result = $this->db->update($query);
			if($result)
			{
				$alert = "<span class='success'> Category updated successfully </span>";
				return $alert;
			}
			else
			{
				$alert = "<span class='error'>Category updated not success </span>";
				return $alert;
			}
		}
	 }
 }
?>