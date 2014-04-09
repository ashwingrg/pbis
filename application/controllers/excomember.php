<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Excomember extends My_Controller {

	public function index()
	{
		$this->load->model('user_model');
		$data['exco'] = $this->user_model->getExcoMembers();
		$data['subview'] = 'excomembers/excomember_index_view';
		$this->load->view('layouts/layouts', $data);
	}
	public function newMember(){
		if($_POST){
			$membername = $this->input->post('membername'); 
			$membertype = $this->input->post('membertype'); 
			$memberusername = $this->input->post('username'); 
			$memberemail = $this->input->post('memberemail'); 
			$memberpsw = $this->input->post('memberpsw');
			$hashmemberpsw = hash("sha512", $memberpsw);
			$this->load->model('user_model');
			$added = $this->user_model->addExcoMember($membername,$membertype,$memberusername,$memberemail,$hashmemberpsw);
			if($added){
				$this->session->set_flashdata('addedmsg', 'New ExCo Member has been registered successfully.');
				redirect('home/exco/newmember');
			}
		}
		$data['subview'] = 'excomembers/excomember_new';
		$this->load->view('layouts/layouts', $data);
	}
	public function deleteMember($member_id){
		$this->load->model('user_model');
		$deleted = $this->user_model->delExcoMember($member_id);
		if($deleted){
			$this->session->set_flashdata('deletedmsg', 'Selected ExCo Member has been removed successfully.');
			redirect('home/exco');
		}
	}
	public function updateMember($member_id){
		$this->load->model('user_model');
		$data['memberdet'] = $this->user_model->excoMemberById($member_id);
		$data['subview'] = 'excomembers/excomember_new';
		$this->load->view('layouts/layouts', $data);
	}
}

/* End of file exco.php */
/* Location: ./application/controllers/exco.php */