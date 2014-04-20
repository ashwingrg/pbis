<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Workplandetail extends My_Controller {

	public function index()
	{
		$d =  $this->session->userdata('userinfo');
		$divname = $d->division_name;
		$this->load->model('workplan');
		$data['wpd'] = $this->workplan->getWorkplanDetail($divname);
		$data['allwpd'] = $this->workplan->getAllWorkplanDetail();
		$data['subview'] = 'workplandetail/workplandetail_index_view';
		$this->load->view('layouts/layouts', $data);
	}

	public function viewWPD($wpdid){
		$this->load->model('workplan');
		$data['wpd'] = $this->workplan->getWorkplanDetailById($wpdid);
		$data['wpdact'] =$this->workplan->getWorkplanDetailActivity($wpdid);

		$data['subview'] = "workplandetail/workplandetail_view";
		$this->load->view('layouts/layouts',$data);
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
			$inserted = $this->workplan->wpdActivity($wpd_id,$activity1name,$activity1unit,$activity1weightage,$activity1hundred,$activity1seventyfive,$activity1fifty,$activity1lessthanfifty);

			$activity2name = $this->input->post("activity2name");
			if(@$activity2name!=""){
				$activity2name = $this->input->post("activity2name");
				$activity2unit = $this->input->post("activity2unit");
				$activity2weightage = $this->input->post("activity2weightage");
				$activity2hundred = $this->input->post("activity2hundred");
				$activity2seventyfive = $this->input->post("activity2seventyfive");
				$activity2fifty = $this->input->post("activity2fifty");
				$activity2lessthanfifty = $this->input->post("activity2lessthanfifty");
				$inserted = $this->workplan->wpdActivity($wpd_id,$activity2name,$activity2unit,$activity2weightage,$activity2hundred,$activity2seventyfive,$activity2fifty,$activity2lessthanfifty);
			}
			$activity3name = $this->input->post("activity3name");
			if(@$activity3name!=""){
				$activity3name = $this->input->post("activity3name");
				$activity3unit = $this->input->post("activity3unit");
				$activity3weightage = $this->input->post("activity3weightage");
				$activity3hundred = $this->input->post("activity3hundred");
				$activity3seventyfive = $this->input->post("activity3seventyfive");
				$activity3fifty = $this->input->post("activity3fifty");
				$activity3lessthanfifty = $this->input->post("activity3lessthanfifty");
				$inserted = $this->workplan->wpdActivity($wpd_id,$activity3name,$activity3unit,$activity3weightage,$activity3hundred,$activity3seventyfive,$activity3fifty,$activity3lessthanfifty);
			}
			

			if(@$inserted){
				$this->session->set_flashdata('added', 'New Workplan detail has been created successfully.');
				redirect('home/workplandetail');
			}
		}
		$data['subview'] = "workplandetail/workplandetail_new";
		$this->load->view('layouts/layouts', $data);
	}

	public function editWorkplanDetail($wpdid){
		$this->load->model('workplan');
		$data["wpd1"] = $this->workplan->getWorkplanDetailById($wpdid);
		$data["wpd2"] = $this->workplan->getWorkplanDetailActivity($wpdid);
		if($_POST){
			$wpdaid = $this->input->post("wpdaid1");
			$activity1name = $this->input->post("activity1name");
			$activity1unit = $this->input->post("activity1unit");
			$activity1weightage = $this->input->post("activity1weightage");
			$activity1hundred = $this->input->post("activity1hundred");
			$activity1seventyfive = $this->input->post("activity1seventyfive");
			$activity1fifty = $this->input->post("activity1fifty");
			$activity1lessthanfifty = $this->input->post("activity1lessthanfifty");
			$updated = $this->workplan->updateWPDActivity($wpdaid,$activity1name,$activity1unit,$activity1weightage,$activity1hundred,$activity1seventyfive,$activity1fifty,$activity1lessthanfifty);

			$activity2name = $this->input->post("activity2name");
			if(@$activity2name!=""){
				$wpdaid = $this->input->post("wpdaid2");
				$activity2name = $this->input->post("activity2name");
				$activity2unit = $this->input->post("activity2unit");
				$activity2weightage = $this->input->post("activity2weightage");
				$activity2hundred = $this->input->post("activity2hundred");
				$activity2seventyfive = $this->input->post("activity2seventyfive");
				$activity2fifty = $this->input->post("activity2fifty");
				$activity2lessthanfifty = $this->input->post("activity2lessthanfifty");
				$updated = $this->workplan->updateWPDActivity($wpdaid,$activity2name,$activity2unit,$activity2weightage,$activity2hundred,$activity2seventyfive,$activity2fifty,$activity2lessthanfifty);
			}
			$activity3name = $this->input->post("activity3name");
			if(@$activity3name!=""){
				$wpdaid = $this->input->post("wpdaid3");
				$activity3name = $this->input->post("activity3name");
				$activity3unit = $this->input->post("activity3unit");
				$activity3weightage = $this->input->post("activity3weightage");
				$activity3hundred = $this->input->post("activity3hundred");
				$activity3seventyfive = $this->input->post("activity3seventyfive");
				$activity3fifty = $this->input->post("activity3fifty");
				$activity3lessthanfifty = $this->input->post("activity3lessthanfifty");
				$updated = $this->workplan->updateWPDActivity($wpdaid,$activity3name,$activity3unit,$activity3weightage,$activity3hundred,$activity3seventyfive,$activity3fifty,$activity3lessthanfifty);
			}
			

			if(@$updated){
				$this->session->set_flashdata('updatedmsg', 'Selected Workplan Detail has been updated successfully.');
				?> 
				<script>window.location.href="<?php echo site_url('home/viewwpd').'/'.$wpdid; ?>";</script>
				<?php
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

	public function wpdApprove($wpdid){
		$approved = "approved";
		$this->load->model('workplan');
		$appr = $this->workplan->wpdApproved($wpdid,$approved);
		if($appr){
			$this->session->set_flashdata('approved', 'Workplan has been approved.');
			?>
			<script>window.location.href="<?php echo site_url('home/viewwpd').'/'.$wpdid; ?>";</script>
			<?php
		}
	}

	public function progress($wpdid){
		$this->load->model('workplan');
		$data['wpd'] = $this->workplan->getWorkplanDetailById($wpdid);
		$data['wpdact'] =$this->workplan->getWorkplanDetailActivity($wpdid);
		$data['subview'] = 'workplandetail/workplandetail_progress';
		$this->load->view('layouts/layouts', $data);
		if($_POST){	
			$wpdaid = $this->input->post("wpdaid");
			$wpda = $this->workplan->workplanActivityById($wpdaid);
			$unit = $wpda->unit;
			$weightage = $wpda->weightage;
			$hundred = $wpda->hundred;
			$seventyfive = $wpda->seventyfive;
			$fifty = $wpda->fifty;
			$lessthanfifty = $wpda->lessthanfifty;

			$measurement = $this->input->post("measurement");
			if($unit=="days"){
				$max = 31;
				if($measurement<=$hundred){
					$score = 100;
				}
				elseif($measurement>$hundred && $measurement<=$seventyfive){
					$score = 75;
				}
				elseif ($measurement>$seventyfive && $measurement<=$fifty) {
					$score = 50;
				}
				elseif($measurement>$fifty && $measurement<=$max){
					$score = 40;
				}
			}
			if($unit=="nos"){
				if($measurement==$hundred){
					$score = 100;
				}
				elseif($measurement==$seventyfive){
					$score = 75;
				}
				elseif ($measurement==$fifty) {
					$score = 50;
				}
				elseif($measurement==$lessthanfifty){
					$score = 40;
				}
			}
			$pbispercentage = $weightage*$score;
			$pbis_percentage = $pbispercentage/100;
			$this->workplan->updateScore($wpdaid,$measurement,$score,$pbis_percentage);
		}
	}

	public function progressDetails($wpdid){
		$for = "Administration";
		$this->load->model('workplan');
		$sent = $this->workplan->progressToAdministration($wpdid,$for);
		if($sent){
			$this->session->set_flashdata('sent', 'Workplan Progress has been successfully sent to Administrative Division.');
			redirect('home/workplandetail');
		}
	}

	
}

/* End of file workplandetail.php */
/* Location: ./application/controllers/workplandetail.php */