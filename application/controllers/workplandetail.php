<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Workplandetail extends My_Controller {

	public function index()
	{
		
	}
	public function newWorkplanDetail(){
		if($_POST){
			$division_name = $this->input->post("division_name");
			$division_chief = $this->input->post("division_chief");
			$quarter = $this->input->post("quarter");
			$month = $this->input->post("months");
			$this->load->model('workplan');
			$wpd_id = $this->workplan->newWPD($division_name,$division_chief,$quarter,$month);
			$activity1name = $this->input->post("activity1name");
			$activity1unit = $this->input->post("activity1unit");
			$activity1weightage = $this->input->post("activity1weightage");
			$activity1hundred = $this->input->post("activity1hundred");
			$activity1seventyfive = $this->input->post("activity1seventyfive");
			$activity1fifty = $this->input->post("activity1fifty");
			$activity1lessthanfifty = $this->input->post("activity1lessthanfifty");
			$this->workplan->wpdActivity($wpd_id,$activity1name,$activity1unit,$activity1weightage,$activity1hundred,$activity1seventyfive,$activity1fifty,$activity1lessthanfifty);

			$activity2name = $this->input->post("activity2name");
			$activity2unit = $this->input->post("activity2unit");
			$activity2weightage = $this->input->post("activity2weightage");
			$activity2hundred = $this->input->post("activity2hundred");
			$activity2seventyfive = $this->input->post("activity2seventyfive");
			$activity2fifty = $this->input->post("activity2fifty");
			$activity2lessthanfifty = $this->input->post("activity2lessthanfifty");
			$this->workplan->wpdActivity($wpd_id,$activity2name,$activity2unit,$activity2weightage,$activity2hundred,$activity2seventyfive,$activity2fifty,$activity2lessthanfifty);

			$activity3name = $this->input->post("activity3name");
			$activity3unit = $this->input->post("activity3unit");
			$activity3weightage = $this->input->post("activity3weightage");
			$activity3hundred = $this->input->post("activity3hundred");
			$activity3seventyfive = $this->input->post("activity3seventyfive");
			$activity3fifty = $this->input->post("activity3fifty");
			$activity3lessthanfifty = $this->input->post("activity3lessthanfifty");
			$inserted = $this->workplan->wpdActivity($wpd_id,$activity3name,$activity3unit,$activity3weightage,$activity3hundred,$activity3seventyfive,$activity3fifty,$activity3lessthanfifty);

			if($inserted){
				$this->session->set_flashdata('added', 'New Workplan detail has been created successfully.');
				redirect('home/workplandetail/new');
			}
		}
		$data['subview'] = "workplandetail/workplandetail_new";
		$this->load->view('layouts/layouts', $data);
	}
	public function filterQuarter(){
		$quarterid = $this->input->post('quarterid');
		if($quarterid == "I"){
			$data['month'] = array("JAN","FEB","MAR","APR");
		}
		elseif ($quarterid == "II") {
			$data['month'] = array("MAY","JUN","JUL","AUG");
		}
		else {
			$data['month'] = array("SEP","OCT","NOV","DEC");
		}
		$this->load->view('workplandetail/filter', $data);
	}
}

/* End of file workplandetail.php */
/* Location: ./application/controllers/workplandetail.php */