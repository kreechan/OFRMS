<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class main extends CI_Controller {

	
	public function index()
	{
    $this->login();
        
    }
    public function login(){
    $this->load->view('landingpage');
   
    }
    public function members(){
        if($this->session->userdata('is_logged_in'))
        {
            $this->load->view('header/common/userheader');
            $this->load->view('content/common/facilitycards');
            $this->load->view('footer/footer');
       }
        else{
        redirect('main/restricted');
       }
    }
    
    public function restricted(){
        $this->load->view('restricted');
    }
    
     public function login_validation(){


    $this->load->library('form_validation');

    $this->form_validation->set_rules('email', 'Email' , 'required|trim|callback_validate_credentials');
    $this->form_validation->set_rules('password', 'Password' , 'required');
         
         if ($this->form_validation->run()){
            $data = array(
                'email' => $this->input->post('email'),
                'is_logged_in' => 1
                );

            $this->session->set_userdata($data);
             redirect('main/members');
         }
         else{
             $this->login();
         }
    }
    public function validate_credentials(){
        $this->load->model('model_users');

        if($this->model_users->can_log_in()){
            return true;

        }else{
            $this->form_validation->set_message('validate_credentials', 'Incorrect ID number or password.');
            return false;
        }
    }

    public function logout(){
        $this->session->sess_destroy();
        redirect('main/index');
    }
}
