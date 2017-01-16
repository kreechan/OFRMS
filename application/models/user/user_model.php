<?php defined('BASEPATH') OR exit('No direct script access allowed');
  class User_model extends CI_Model
  {


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
              'idNumber'=>$this->input->post('idNum'),
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
    $output = array('idNumber'=>$this->input->post('idNum'),
                    'fname' =>$this->input->post('Firstname'),
                     'lname'=>$this->input->post('lastname'),
                     'dept' =>$this->input->post('dept'),
                     'position' =>$this->input->post('pos'),
                     'email'=>$this->input->post('email')
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
}   

    
?>