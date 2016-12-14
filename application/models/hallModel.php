<?php
class HallModel extends CI_Model
{
	public function getHall()
	{
        $query = $this->db->get('hall');
        return $query->result();
	}
}

?>