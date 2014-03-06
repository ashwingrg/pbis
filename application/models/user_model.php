<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class User_model extends CI_Model {
	private $usrnameemail;
	private $usrpsw;
	function allUser(){
		$query = $this->db->get('user');
		$data = $query->result();
		return $data;
	}
	function userById($user_id){
		$this->db->where('user_id',$user_id);
		$query = $this->db->get('user');
		$data = $query->result();
		return $data;
	}
	function userInfoById($user_id){
		$this->db->where('user_id',$user_id);
		$query = $this->db->get('user_info');
		$data = $query->result();
		return $data;
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

}

/* End of file user_model.php */
/* Location: ./application/models/user_model.php */