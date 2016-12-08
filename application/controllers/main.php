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

    public function registration_show() {
        $this->load->view('content/common/registration_view');
    }

    public function new_user_register(){

        $this->load->library('form_validation');

        $this->form_validation->set_rules('firstname','Firstname', 'trim|required|xss_clean');
        $this->form_validation->set_rules('lastname','Lasstname', 'trim|required|xss_clean');
        $this->form_validation->set_rules('password','Password', 'trim|required|xss_clean');
        $this->form_validation->set_rules('email','Email', 'trim|required|xss_clean');
        $this->form_validation->set_rules('department','Department', 'trim|required|xss_clean');

        if($this->form_validation->run() == FALSE){

           // $this->load->view('content/common/registration_view');
            $this->load->view('content/common/registration_view');
        }else{

            $data= array(

                'firstname' =>$this->input->post('firstname'),
                'lastname' =>$this->input->post('lastname'),
                'password' =>$this->input->post('password'),
                'email' =>$this->input->post('email'),
                'department' =>$this->input->post('department')
            );

            $result= $this->model_user->register_insert($data);

                if($result == TRUE){

                    $data['message_display'] = 'Registration Successfully !';
                    $this->load->view('Landingpage', $data);
                }else{

                    $data['message_display'] = 'Email Already Exist';
                    $this->load->view('content/common/registration_view', $data);
                }
            
        }

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
        $this->load->view('header/common/userheader');
        $this->load->view('content/common/restricted');
        $this->load->view('footer/footer');
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
