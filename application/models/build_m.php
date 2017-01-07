<?php
 class build_m extends CI_Model
 {

      public function count()
      {
      	 return $this->db->count_all('build');
      } 

 	 public function getBuilding()
 	 {
 	 	$query = $this->db->get('building');
 	 	return $query->result();
 	 }


 	 public function addBuilding()
 	 {
 	 	 $input= array(
                 'build_name' =>$this->input->post('Bname'),
                 'build_members' =>$this->input->post('Bmem'),
                 'build_description' =>$this->input->post('Bdescp')
 	 	 );

 	 	 $this->db->insert('building', $input);

 	 	 if($this->db->affected_rows() > 0)
 	 	 {	
 	 	 	redirect(base_url().'main/viewBuilding');
 	 	 }

 	 }

 	 public function update()
 	 {
 	 	$id=$this->input->post('txtid');
    	$output = array('build_name' =>$this->input->post('Bname'),
                 'build_members' =>$this->input->post('Bmem'),
                 'build_description' =>$this->input->post('Bdescp')
    		      );

    	$this->db->where('build_id',$id);
    	$this->db->update('building',$output);

    	if($this->db->affected_rows()>0)
    	{
    		redirect(base_url().'main/viewBuilding');
    	}
 	 }
 	 
 	 public function get_edit($id)
	{
	  $query=$this->db->get_where('building',array('build_id'=>$id));
	  return $query->row();
	}


	public function delete($id)
	{
		$this->db->where('build_id',$id);
		$this->db->delete('building');

		if($this->db->affected_rows()>0)
		{
			redirect(base_url().'main/viewBuilding');
		}
	}

	  function search($keyword)
    {
        $this->db->like('build_name',$keyword);
        $query  =   $this->db->get('building');
        return $query->result();
    }

 }

?>