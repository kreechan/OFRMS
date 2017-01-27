<?php 

class Reservation extends CI_Model{

	public function getEvents(){
		
		$this->db->select('*');
	    $this->db->from('reservation');
		return $this->db->get()->result();
	}
}