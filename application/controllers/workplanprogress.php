<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Workplanprogress extends My_Controller {

	public function index()
	{
		$d =  $this->session->userdata('userinfo');
		$divname = $d->division_name;
		$this->load->model('workplan');
		$data['wpd'] = $this->workplan->getWPDforSpecificDiv($divname);
		if($divname == "ExCo"){
			$data['allwpd'] = $this->workplan->getWPDforExCo();
		}
		elseif($divname == "Administration"){
			$data['allwpd'] = $this->workplan->getWPDforAdministration();
		}
		$data['subview'] = 'workplandetail/workplan_all_progress';
		$this->load->view('layouts/layouts', $data);
	}

	public function viewWPP($wpdid){
		$this->load->model('workplan');
		$data['wpd'] = $this->workplan->getWorkplanDetailById($wpdid);
		$data['wpdact'] = $this->workplan->getWorkplanDetailActivity($wpdid);
		$data['subview'] = 'workplanprogress/workplan_view_progress';
		$this->load->view('layouts/layouts', $data);
	}

	public function progressExCo($wpdid){
		$this->load->model('workplan');
		$for = "ExCo";
		$sent = $this->workplan->progressToExCo($wpdid,$for);
		if($sent){
			$this->session->set_flashdata('sentexco', 'Workplan Progress has been successfully sent to ExCo.');
			redirect('home/workplanprogress');
		}
	}

	public function wppApproved($wpdid){
		$app = "Approved";
		$this->load->model('workplan');
		$wpda = $this->workplan->getWorkplanDetailActivity($wpdid);
		// print_r($wpda);
		$pbispercentage = 0;
		foreach ($wpda as $wpdaall):
			$pbispercentage += $wpdaall->pbis_percentage;
		endforeach;
		$fpbis_percentage = $pbispercentage/2;
		$this->workplan->insertPBISPercentage($wpdid,$fpbis_percentage);

		$approved = $this->workplan->wppApprove($wpdid,$app);
		if($approved){
		?>
		<script>window.location.href="<?php echo site_url('home/workplanprogress').'/view/'.$wpdid; ?>";</script>
		<?php
		}

	}

	public function wppDisapproved($wpdid){
		$disapp = "Disapproved";
		$this->load->model('workplan');
		$disapproved = $this->workplan->wppDisapprove($wpdid,$disapp);
		if($disapproved){
		?>
			<script>window.location.href="<?php echo site_url('home/workplanprogress').'/view/'.$wpdid; ?>";</script>
		<?php
		}
	}
}

/* End of file workplanprogress.php */
/* Location: ./application/controllers/workplanprogress.php */