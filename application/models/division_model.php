<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Division_model extends CI_Model {

	function allDivisions(){
		$query = $this->db->get('division');
		$data = $query->result();
		return $data;
	}
	
	function getDivById($div_id){
		$this->db->where('division_id', $div_id);
		$query = $this->db->get('division');
		$data = $query->row();
		return $data;
	}
	function createDivision($divname,$divchief){
		$data = array(
			'division_name' => $divname, 
			'division_chief' => $divchief
		);
		$this->db->insert('division', $data);
		if($this->db->last_query()){
			return true;
		}
	}

	function delDivision($div_id){
		$this->db->where('division_id', $div_id);
		$this->db->delete('division');
		if($this->db->last_query()){
			return true;
		}
	}

}

/* End of file division_model.php */
/* Location: ./application/models/division_model.php */