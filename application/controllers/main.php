<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class main extends CI_Controller {


     public function __construct()
      {
        parent::__construct();
        $this->load->model('user/user_model','m');
        $this->load->model('hallModel','hallM');
      }       

	public function index()
	{
    $this->login();
        
    }
    public function login(){

        if($this->session->userdata('is_logged_in')){

            redirect('location:' .base_url('main/members'));
        }
            
            $this->load->view('landingpage');
   
    }

    public function registration_show() {
        $this->load->view('content/common/registration_view');
    }

    public function new_user_register(){

        
        $this->load->helper(array('form','url'));

        $this->load->library('form_validation');


        $this->form_validation->set_rules('firstname' , 'Firstname' , 'required');
        $this->form_validation->set_rules('lastname' , 'Lastname' , 'required');
        $this->form_validation->set_rules('password' , 'Password' , 'required');
        $this->form_validation->set_rules('email' , 'Email' , 'required');
        $this->form_validation->set_rules('department' , 'Department' , 'required');

        if($this->form_validation->run()== FALSE){

           // $this->load->view('content/common/registration_view');
            $this->load->view('content/common/registration_view');
        }else{

        
                $this->load->model('model_users');

                $fname = $this->input->post('firstname');
                $lname = $this->input->post('lastname');
                $pw = $this->input->post('password');
                $user_email = $this->input->post('email');
                $dept = $this->input->post('department');

                $data = array(

                    'firstname' => $fname,
                    'lastname' => $lname,
                    'password' => $pw,
                    'email' => $user_email,
                    'department' => $dept,

                    );

            $result= $this->model_users->register_insert($data);

                if($result == TRUE){

                        $message = "User Succesfully Added! ";
                            echo "<script type='text/javascript'>alert('$message');</script>";
                        $this->load->view('Landingpage', $data);
                }else{

                    $data['message_display'] = 'Email Already Exist';
                   // $this->load->view('content/common/registration_view', $data);
                    redirect('main/restricted', $data);
                }
            
        }

      /*  $this->load->model('model_users');

        $fname = $this->input->post('firstname');
        $lname = $this->input->post('lastname');
        $pw = $this->input->post('password');
        $user_email = $this->input->post('email');
        $dept = $this->input->post('department');

        $data = array(

            'firstname' => $fname,
            'lastname' => $lname,
            'password' => $pw,
            'email' => $user_email,
            'department' => $dept,

            );
        $this->model_users->register_insert($data); */

    }
   

   public function members(){
        if($this->session->userdata('is_logged_in'))
        {
            //$this->load->view('header/common/userheader');
            //$this->load->view('content/Admin/editHall');
           // $this->load->view('footer/footer');
            $this->viewHall();
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

    public function viewHall()
    {
        $data['halls']= $this->hallM->getHall();
        $this->load->view('Header/common/userheader');  
        $this->load->view('Content/Admin/editHall',$data);
        $this->load->view('footer/footer');
    }
   
    public function logout(){
        $this->session->sess_destroy();
        redirect('main/index');
    }

    public function changepass(){
        $this->load->view('header/common/userHeader');
        $this->load->view('content/common/changePassword');
        $this->load->view('footer/footer');
    }

    public function changepassword(){

        $this->load->helper(array('form','url'));
        $this->load->library('form_validation');
        $this->load->helper('security');
        $this->load->model('model_users');
        $this->form_validation->set_rules('oldpassword' , 'Old password' , 'required');
        $this->form_validation->set_rules('newpassword' , 'New password' , 'required');
        $this->form_validation->set_rules('confirmpassword', 'Confirm password', 'required');

        if($this->form_validation->run() == FALSE){

          echo validation_errors();
        }else{
          $email = $this->session->userdata('email');

          $newpassword = array (
                                'password' => $this->input->post('newpassword')
                                );

          $this->model_users->change($email, $newpassword);
          // echo json_encode($this->session->userdata());
          redirect('main/members');

        }
    }
    

    
}
