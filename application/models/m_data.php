<?php 

class M_data extends CI_Model{
	public function get_all_properti(){
		$query = $this->db->get('Properti');
        return $query->result();
	}
}