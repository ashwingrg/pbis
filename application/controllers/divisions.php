<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Divisions extends CI_Controller {

	public function index()
	{
		$this->load->model('Division_model');
		$data['alldivisions'] = $this->Division_model->allDivisions();
		$data['subview'] = 'divisions/division_index_view';
		$this->load->view('layouts/layouts',$data);
	}

	public function newDivision(){
		if($_POST){
			$this->load->model('Division_model');
			$divname = $this->input->post("divname");
			$divchief = $this->input->post("divchief");
			$divchiefusrname = $this->input->post("divchiefusrname");
			$divchiefemail = $this->input->post("divchiefemail");
			$divchiefpsw = $this->input->post("divchiefpsw");
			$divchiefhashpsw = hash('sha512', $divchiefpsw);
			$usertype = "div_chief";
			$this->load->model('user_model');
			$adduser = $this->user_model->addDivChief($divchief,$divchiefusrname,$divchiefemail,$divchiefhashpsw,$usertype,$divname);
			$added = $this->Division_model->createDivision($divname,$divchief);
			if($added & $adduser){
				$this->session->set_flashdata('addedmsg', 'New Division has been created successfully.');
				redirect('home/divisions/newdivision');
			}
		}
		$data['subview'] = 'divisions/division_new';
		$this->load->view('layouts/layouts',$data);
	}

	public function deleteDivision($div_id){
		$this->load->model('division_model');
		$deleted = $this->division_model->delDivision($div_id);
		if($deleted){
			$this->session->set_flashdata('deletedmsg', 'Selected division has been deleted successfully.');
			redirect('home/divisions');
		}
	}

	public function editDivision($div_id){
		$this->load->model('division_model');
		$data['divinfo'] = $this->division_model->getDivById($div_id);
		$division_name = $data['divinfo']->division_name;
		$division_chief = $data['divinfo']->division_chief;
		$this->load->model('user_model');
		$data['divinfout'] = $this->user_model->userDivision($division_chief,$division_name);
		$data['subview'] = 'divisions/division_new';
		$this->load->view('layouts/layouts', $data);
	}

}

/* End of file divisions.php */
/* Location: ./application/controllers/divisions.php */