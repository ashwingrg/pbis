<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Workplan extends CI_Model {

	function newWPD($division_name, $division_chief, $quarter, $month){
		$data = array(
			'division_name' => $division_name, 
			'division_chief' => $division_chief, 
			'quarter' => $quarter, 
			'month' => $month, 
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
	

}

/* End of file workplan.php */
/* Location: ./application/models/workplan.php */