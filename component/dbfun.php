<?php

include 'db.php';

date_default_timezone_set("Asia/Kuala_Lumpur");


class event extends Database {
	function __construct(){
		$this->dbconnect();
	}
	public function db_qry($sql){
		$result = $this->Conn->query($sql);
		return $result;
	}

	public function login($name,$pass){
		$qry = $this->Conn->query("SELECT * FROM user WHERE email = '$name' AND password = '$pass'");
		$row = mysqli_num_rows($qry);
		if ($row == 1) {
			return TRUE;
		}else{
			return FALSE;
		}
	}
	public function table($table){
		$qry = $this->Conn->query("SELECT * FROM ".$table."");
		return $qry;
	}
	public function check($name){
		$qry = $this->Conn->query("SELECT * FROM user WHERE name = '$name'");
		$no_row = mysqli_num_rows($qry);
		if ($no_row > 0) {
			return TRUE;
		}else{
			return FALSE;
		}
	}
	public function checkema($name){
		$qry = $this->Conn->query("SELECT * FROM user WHERE email = '$name'");
		$no_row = mysqli_num_rows($qry);
		if ($no_row > 0) {
			return TRUE;
		}else{
			return FALSE;
		}
	}
		public function reg($name,$pass,$em){
		$date =' '.date('Y/m/d H:i:sa');
		$qry = $this->Conn->query("INSERT INTO user (name,password,email,u_date) VALUES ('$name','$pass','$em','$date')");
		return $qry;
	}
	public function cart($id,$name){
		$date =' '.date('Y/m/d H:i:sa');
		$qry = $this->Conn->query("INSERT INTO cart (ct_product,ct_userid) VALUES ('$name','$id')");
		return $qry;
	}
	public function checkcart($name, $id) {
		// Assuming 'ct_product' is the product ID and 'ct_userid' is the user ID
		$qry = $this->Conn->query("SELECT * FROM cart WHERE ct_product='$id' AND ct_userid='$name'");
		if ($qry->num_rows > 0) {
			return 1; // Item is already in the cart
		} else {
			return 0; // Item is not in the cart
		}
	}
	
	
}
// 	public function poster($table){
// 		$qry = $this->Conn->query("SELECT * FROM post as a inner join categori as b on a.p_cat=b.c_id INNER JOIN user as c ON a.p_user=c.u_id WHERE p_cat = '$table'");
// 		return $qry;
// 	}
// 	public function posterall(){
// 		$qry = $this->Conn->query("SELECT * FROM post as a inner join categori as b on a.p_cat=b.c_id INNER JOIN user as c ON a.p_user=c.u_id");
// 		return $qry;
// 	}
// 	public function addpost($tt,$img,$p1,$p2,$p3,$cat,$user,$date){
// 		$qry = $this->Conn->query("INSERT INTO post (p_cat,p_title,p_detail,p_p2,p_p3,p_img1,p_user,p_date) VALUES ('$cat','$tt','$p1','$p2','$p3','$img','$user','$date')");
// 		return $qry;
// 	}
// }

?>