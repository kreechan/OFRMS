<?php
class Approver_m extends CI_Model
{
	public function getdb()
	{
		$this->db->from('city');
		$this->db->order_by('name');
		$result = $this->db->get();
		$return = array();
		if($result->num_rows() > 0) 
		{
			foreach($result->result_array() as $row) 
			{
				$return[$row['id']] = $row['name'];
			}
	    }
	}
}
?>