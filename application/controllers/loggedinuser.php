<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Loggedinuser extends CI_Controller {

	public function index()
	{
		$id = $this->session->userdata('userinfo');
		$user_id = $id->user_id;
		$this->load->model('user_model');
		$data['userft'] = $this->user_model->userById($user_id);
		$data['userst'] = $this->user_model->userInfoById($user_id);
		$data['subview'] = 'user/user_index_view';
		$this->load->view('layouts/layouts', $data);		
	}

}

/* End of file loggedinuser.php */
/* Location: ./application/controllers/loggedinuser.php */