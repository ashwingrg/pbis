<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Staffs extends My_Controller {

	public function index()
	{
		$this->load->model('user_model');
		$data['allusers'] = $this->user_model->allUsers();
		$data['subview'] = 'staffs/staff_index_view';
		$this->load->view('layouts/layouts',$data);
	}	
	public function newStaff(){
		$this->load->model('division_model');
		$data['alldivisions'] = $this->division_model->allDivisions();
		$data['subview'] = 'staffs/staff_new';
		$this->load->view('layouts/layouts',$data);
		if($_POST){
			$firstname = $this->input->post('firstname');
			$middlename = $this->input->post('middlename');
			$lastname = $this->input->post('lastname');
			$fullname = $firstname." ".$middlename." ".$lastname;
			$dateofbirth = $this->input->post('dateofbirth');
			$age = $this->input->post('age');
			$gender = $this->input->post('gender');
			$fathername = $this->input->post('fathername');
			$mothername = $this->input->post('mothername');
			$presentaddress = $this->input->post('presentaddress');
			$permanentaddress = $this->input->post('permanentaddress');
			$dateofjoin = $this->input->post('dateofjoin');
			$division = $this->input->post('division');
			$username = $this->input->post('username');
			$email = $this->input->post('email');
			$password = $this->input->post('password');
			$hashpsw = hash('sha512', $password);
			$user_type = "staff";
			$this->load->model('user_model');
			$user_id = $this->user_model->addStaff($fullname,$username,$email,$hashpsw,$user_type,$division);
			$addedInfo = $this->user_model->addUserInfo($user_id,$permanentaddress,$presentaddress,$dateofbirth,$age,$gender,$fathername,$mothername,$dateofjoin);
			if($addedInfo){
				$this->session->set_flashdata('useradded', 'New staff has been registered successfully.');
				redirect('staffs/newstaff');
			}
		}
	}
	public function deleteStaff($staff_id){
		$this->load->model('user_model');
		$deleted = $this->user_model->delStaff($staff_id);
		if($deleted){
			$this->session->set_flashdata('deletedmsg', 'Selected staff has been removed successfully.');
			redirect('home/staffs');
		}
	}
	public function editStaff($staff_id){
		$this->load->model('user_model');
		$data['staffft'] = $this->user_model->userById($staff_id);
		$data['staffst'] = $this->user_model->userInfoById($staff_id);
		$this->load->model('division_model');
		$data['alldivisions'] = $this->division_model->allDivisions();
		$data['subview'] = 'staffs/staff_new';
		$this->load->view('layouts/layouts', $data);
	}

}

/* End of file staff.php */
/* Location: ./application/controllers/Staffs.php */