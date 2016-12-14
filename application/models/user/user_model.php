<?php defined('BASEPATH') OR exit('No direct script access allowed');
  class User_model extends CI_Model
  {
  	 public function getUser()
  	 {
  	 	$query =$this->db->get('users');
  	 	return $query->result();
  	 }


  	 function submit()
  	 {
  	     $arr = array(
	  	     		'fname' =>$this->input->post('firstname'),
	  	     		'lname' =>$this->input->post('lastname'),
	  	     		'password' =>$this->input->post('password'),
	  	     		'email' =>$this->input->post('email'),
	  	     		'dept' =>$this->input->post('department')
  	      );	

        $this->db->insert('users',$arr);

        if($this->db->affected_rows()>0)
        {
        	redirect(base_url().'main/viewUser');
        }
  	 }

  	 
  }
?>