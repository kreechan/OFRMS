<?php
class HallModel extends CI_Model
{

	public function count()
	{

		return $this->db->count_all_results('halls');
	}




	public function getHall()
	{
        $query = $this->db->get('hall');
        return $query->result();
	}  

	public function submitAdd()
	{
       $input = array(
          'hall_name' => $this->input->post('hallName'),
          'hall_building' => $this->input->post('BName'),
          'hall_description'=>$this->input->post('descp'),
          'hall_price'=>$this->input->post('price')
       	 );
          
          $this->db->insert('hall',$input);

          if($this->db->affected_rows()>0)
          {
          	redirect(base_url().'main/viewHall');
          }
	}


	public function get_edit($id)
	{
	  $query=$this->db->get_where('hall',array('hall_id'=>$id));
	  return $query->row();
	}


    public function get_update()
    {
    	$id=$this->input->post('txtid');
    	$output = array(
    				'hall_name' => $this->input->post('hallName'),
         			'hall_building' => $this->input->post('BName'),
                    'hall_description'=>$this->input->post('descp'),
                    'hall_price'=>$this->input->post('price')
    		      );

    	$this->db->where('hall_id',$id);
    	$this->db->update('hall',$output);

    	if($this->db->affected_rows()>0)
    	{
    		redirect(base_url().'main/viewHall');
    	}
    }
   

		public function delete($id)
	{
		$this->db->where('hall_id',$id);
		$this->db->delete('hall');

		if($this->db->affected_rows()>0)
		{
			redirect(base_url().'main/viewHall');
		}
	}
  
   function search($keyword)
    {
        $this->db->like('hall_name',$keyword);
        $query  =   $this->db->get('hall');
        return $query->result();
    }

}

?>