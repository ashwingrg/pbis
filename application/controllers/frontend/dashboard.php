<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Dashboard extends My_Controller {

	public function index()
	{
		$data['subview'] = 'frontend/home_dashboard';
		$this->load->view('frontend/layouts/layouts',$data);
	}

}

/* End of file dashboard.php */
/* Location: ./application/controllers/dashboard.php */