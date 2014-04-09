<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class User_model extends CI_Model {
	private $usrnameemail;
	private $usrpsw;
	function allUsers(){
		$query = $this->db->get('user');
		$data = $query->result();
		return $data;
	}
	function userById($user_id){
		$this->db->where('user_id',$user_id);
		$query = $this->db->get('user');
		$data = $query->row();
		return $data;
	}
	function userInfoById($user_id){
		$this->db->where('user_id',$user_id);
		$query = $this->db->get('user_info');
		$data = $query->row();
		return $data;
	}
	function userDivision($user_fullname,$div_name){
		$this->db->where('user_fullname', $user_fullname);
		$this->db->where('division_name', $div_name);
		$this->db->where('user_type', 'div_chief');
		$query = $this->db->get('user');
		if($query){
			return $query->row();
		}
	}
	function getExcoMembers(){
		$this->db->where('division_name', 'ExCo');
		$query = $this->db->get('user');
		return $query->result();
	}
	function excoMemberById($member_id){
		$this->db->where('user_id', $member_id);
		$query = $this->db->get('user');
		return $query->row();
	}
	function checkUser($usernameoremail,$password){
		$this->usrnameemail = $usernameoremail;
		$this->usrpsw = $password;
		$query = $this->db->query("SELECT * FROM user WHERE ( user_username = '$this->usrnameemail' OR user_email = '$this->usrnameemail') AND user_password = '$this->usrpsw'");
		if($query->num_rows()==1){
			return $query->row();
		}
		else{
			return false;
		}
	}
	function addStaff($fullname,$username,$email,$password,$user_type,$division){
		$data = array(
			'user_fullname' => $fullname,
			'user_username' => $username,
			'user_email' => $email,
			'user_password' => $password,
			'user_type' => $user_type,
			'division_name' => $division 
		);
		$query = $this->db->insert('user', $data);
		if($this->db->last_query()){
			return $this->db->insert_id();
		}
	}
	function addDivChief($fullname,$username,$email,$password,$user_type,$divname){
		$data = array(
			'user_fullname' => $fullname, 
			'user_username' => $username,
			'user_email' => $email,
			'user_password' => $password,
			'user_type' => $user_type,
			'division_name' => $divname
		);
		$this->db->insert('user', $data);
		if($this->db->last_query()){
			return true;
		}
	}
	function addExcoMember($membername,$membertype,$memberusername,$memberemail,$hashmemberpsw){
		$divname = "ExCo";
		$data = array(
			'user_fullname' => $membername, 
			'user_username' => $memberusername,
			'user_email' => $memberemail,
			'user_password' => $hashmemberpsw,
			'user_type' => $membertype,
			'division_name' => $divname
		);
		$this->db->insert('user', $data);
		if($this->db->last_query()){
			return true;
		}
	}
	function delStaff($staffid){
		$query = $this->db->query("DELETE FROM user WHERE user_id = '$staffid'");
		$query2 = $this->db->query("DELETE FROM user_info WHERE user_id = '$staffid'");
		if($query & $query2){
			return true;
		}
	}
	function updateStaff($staffid){
		
	}
	function addUserInfo($user_id,$permanentaddress,$presentaddress,$dateofbirth,$age,$gender,$fathername,$mothername,$dateofjoin){
		$data = array(
			'user_id' => $user_id,
			'user_permanent_address' => $permanentaddress,
			'user_present_address' => $presentaddress,
			'user_dateofbirth' => $dateofbirth,
			'user_age' => $age,
			'user_gender' => $gender,
			'user_fathername' => $fathername,
			'user_mothername' => $mothername,
			'user_dateofjoin' => $dateofjoin, 
		);
		$this->db->insert('user_info', $data);
		if($this->db->last_query()){
			return true;
		}
	}
	function delExcoMember($member_id){
		$this->db->where('user_id', $member_id);
		$this->db->delete('user');
		if($this->db->last_query()){
			return true;
		}
	}
}

/* End of file user_model.php */
/* Location: ./application/models/user_model.php */