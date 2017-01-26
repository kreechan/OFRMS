<?php
class Model_users extends CI_Model
{
	public function register_insert($data){

		$condition = "email =" . "'" . $data['email'] . "'";
		$this->db->select('email');
		$this->db->from('users');
		$this->db->where($condition);
		$this->db->limit(1);
		$query = $this-> db ->get();
			if($query->num_rows() == 0){

				$this-> db ->insert('test', $data);
				if($this->db->affected_rows() > 0){
					return true;
				}

				}else{
					return false;
				}

				$this->db->insert('users', $data);
			}

			//$this->load->database();
			//$this->db->insert('test', $data);


	//}


	function can_log_in()
	{
		$this -> db -> where('idnumber', $this->input->post('idnumber'));
		$this -> db -> where('password', ($this->input->post('password')));
		$query = $this -> db -> get('users');
		if($query -> num_rows() == 1)
		{
			// return true;
			return $query->row_array();
		}
		else
		{
			return false;
		}

	}

	 public function getHall()
  	 {
  	 	$query =$this->db->get('hall');
  	 	return $query->result();
  	 }
  	     //change data sa database
    public function change($email = FALSE, $newpassword){
			$this->db->start_cache();
			$this->db->flush_cache();

			if($email){
				$this->db->where('idNumber', $email);
			  return $this->db->update('users', $newpassword);
      }else{
        
      }
    }
    public function getUser($returnASArray = false)
   {
        $query = $this->db->get('users');

           if($returnASArray)
              
              return $query->result();   

         return $query->result();    
   } 

     function submit()
     {
         $arr = array(
              'idNumber' =>$this->input->post('idNum'),
              'fname' =>$this->input->post('firstname'),
              'lname' =>$this->input->post('lastname'),
              'password' =>$this->input->post('password'),
              'email' =>$this->input->post('email'),
              'dept' =>$this->input->post('department'),
              'position' =>$this->input->post('pos')
          );  

        $this->db->insert('users',$arr);

        if($this->db->affected_rows()>0)
        {
          redirect(base_url().'main/displayUser');
        }
     } 

    function search($keyword)
    {
        $this->db->like('fname',$keyword);
        $query  =   $this->db->get('users');
        return $query->result();
    }

  public function delete($id)
  {
    $this->db->where('idNumber',$id);
    $this->db->delete('users');

    if($this->db->affected_rows()>0)
    {
      redirect(base_url().'main/displayUser');
    }
  }

    public function update()
   {
    $id=$this->input->post('txtid');
    $output = array('fname' =>$this->input->post('Firstname'),
                     'lname'=>$this->input->post('lastname'),
                     'dept' =>$this->input->post('dept'),
                     'position' =>$this->input->post('pos'),
                     'email'=>$this->input->post('email'),
                     'idNumber'=>$this->input->post('idNum')
              );

      $this->db->where('idNumber',$id);
      $this->db->update('users',$output);

      if($this->db->affected_rows()>0)
      {
        redirect(base_url().'main/displayUser');
      }
   }

   public function get_edit($id)
  {
    $query =$this->db->get_where('users',array('idNumber'=>$id));
    return $query->row();
  }

    public function userfind(){

    	$this->db->select("fname, lname, dept");
    	$this->db->from('users');
    	$query=$this->db->get();
    	return $query->result();
    }

    public function book_insert($input){

          
          $this->db->insert('reservation',$input);

          if($this->db->affected_rows()>0)
          {
          	return true;
          }else{
          	return false;
          }
    }

    public function retrieve_reservations($date){

	  	return $this->db->select('*')
    	->from('reservation')
    	->where("DATE(event_datetime)='{$date}'")
    	->get()
    	->result_array();

    }
}
?>