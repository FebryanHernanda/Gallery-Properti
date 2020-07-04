<?php 

class M_data extends CI_Model{
	public function get_all_properti(){
		$query = $this->db->get('Properti');
        return $query->result();
	}
	public function detail($id){
		$query = $this->db->query('SELECT * FROM `Properti` WHERE propertiCode = "$id"');
		return $query->result();
	}
}
