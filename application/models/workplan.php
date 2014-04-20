<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Workplan extends CI_Model {

	function getAllWorkplanDetail(){
		$query = $this->db->get('workplandetail');
		$data = $query->result();
		return $data;
	}

	function getWorkplanDetail($divname){
		$this->db->where('division_name',$divname);
		$query = $this->db->get('workplandetail');
		$data = $query->result();
		return $data;
	}

	function getWorkplanDetailById($wpdid){
		$this->db->where('wpd_id',$wpdid);
		$query = $this->db->get('workplandetail');
		$data = $query->row();
		return $data;
	}

	function getWorkplanDetailActivity($wpdid){
		$this->db->where('wpd_id',$wpdid);
		$query = $this->db->get('workplandetail_activity');
		$data = $query->result();
		return $data;
	}

	function workplanActivityById($wpdaid){
		$this->db->where('wpda_id',$wpdaid);
		$query = $this->db->get('workplandetail_activity');
		$data = $query->row();
		return $data;
	}
	function newWPD($division_name, $division_chief, $quarter, $month){
		$data = array(
			'division_name' => $division_name, 
			'division_chief' => $division_chief, 
			'quarter' => $quarter, 
			'month' => $month
		);
		$query = $this->db->insert('workplandetail', $data);
		if($query){
			return $this->db->insert_id();
		}
	}
	function wpdActivity($wpd_id,$activity_name,$unit,$weightage,$hundred,$seventyfive,$fifty,$lessthanfifty){
		$data = array(
			'wpd_id' => $wpd_id,
			'activity_name' => $activity_name,
			'unit' => $unit,
			'weightage' => $weightage,
			'hundred' => $hundred,
			'seventyfive' => $seventyfive,
			'fifty' => $fifty,
			'lessthanfifty' => $lessthanfifty, 
		);
		$query = $this->db->insert('workplandetail_activity',$data);
		if($query){
			return true;
		}
	}
	function updateWPDActivity($wpdaid,$activity_name,$unit,$weightage,$hundred,$seventyfive,$fifty,$lessthanfifty){
		$data = array(
			'activity_name' => $activity_name,
			'unit' => $unit,
			'weightage' => $weightage,
			'hundred' => $hundred,
			'seventyfive' => $seventyfive,
			'fifty' => $fifty,
			'lessthanfifty' => $lessthanfifty, 
		);
		$this->db->where('wpda_id', $wpdaid);
		$query = $this->db->update('workplandetail_activity',$data);
		if($query){
			return true;
		}
	}
	
	function wpdApproved($wpdid,$approved){
		$data = array(
			'remarks' => $approved,
			'administration_remarks' => $approved
		);
		$this->db->where('wpd_id', $wpdid);
		$query = $this->db->update('workplandetail', $data);
		if($query){
			return true;
		}
	}

	function updateScore($wpdaid,$measurement,$score,$pbis_percentage){
		$data = array(
			'measurement' => $measurement,
			'score' => $score,
			'progress' => $score,
			'pbis_percentage' => $pbis_percentage
		);
		$this->db->where('wpda_id', $wpdaid);
		$query = $this->db->update('workplandetail_activity', $data);

	}

	function progressToAdministration($wpdid,$for){
		$data = array( 'progress_for' => $for);
		$this->db->where('wpd_id', $wpdid);
		$query = $this->db->update('workplandetail', $data);
		if($query){
			return true;
		}
	}


	function getWPDforAdministration(){
		$for = "Administration";
		$this->db->where('progress_for', $for);
		$query = $this->db->get('workplandetail');
		if($query){
			$data = $query->result();
			return $data;
		}
	}

	function getWPDforSpecificDiv($divname){
		$for = "Administration";
		$query = $this->db->query("SELECT * FROM workplandetail WHERE division_name = '$divname' AND progress_for = '$for'");
		if($query){
			$data = $query->result();
			return $data;
		}
	}

	function getWPDforExCo(){
		$for = "ExCo";
		$this->db->where('progress_for', $for);
		$query = $this->db->get('workplandetail');
		if($query){
			$data = $query->result();
			return $data;
		}

	}

	function progressToExCo($wpdid,$for){
		$data = array( 'progress_for' => $for);
		$this->db->where('wpd_id', $wpdid);
		$query = $this->db->update('workplandetail', $data);
		if($query){
			return true;
		}
	}

	function wppApprove($wpdid,$app){
		$data = array( 'exco_approve' => $app);
		$this->db->where('wpd_id', $wpdid);
		$query = $this->db->update('workplandetail', $data);
		if($query){
			return true;
		}
	}

	function wppDisapprove($wpdid,$disapp){
		$data = array( 'exco_approve' => $disapp);
		$this->db->where('wpd_id', $wpdid);
		$query = $this->db->update('workplandetail', $data);
		if($query){
			return true;
		}
	}

	public function insertPBISPercentage($wpdid,$pbis_percentage){
		$data = array( 'pbispercentage' => $pbis_percentage);
		$this->db->where('wpd_id', $wpdid);
		$query = $this->db->update('workplandetail', $data);
		if($query){
			return true;
		}
	}

	public function getWPDforPBIS(){
		$approved = "Approved";
		$query = $this->db->query("SELECT * FROM workplandetail WHERE exco_approve = '$approved' AND pbispercentage != '' ");
		if($query){
			$data = $query->result();
			return $data;
		}
	}
}

/* End of file workplan.php */
/* Location: ./application/models/workplan.php */