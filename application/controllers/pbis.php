<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Pbis extends My_Controller {

	public function index()
	{
		$this->load->model('workplan');
		$data['d'] = $this->workplan->getWPDforPBIS();
		$data['subview'] = 'pbis/pbis_index_view';
		$this->load->view('layouts/layouts', $data);
	}

}

/* End of file pbis.php */
/* Location: ./application/controllers/pbis.php */