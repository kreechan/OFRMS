<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class main extends CI_Controller {


     public function __construct()
      {
        parent::__construct();
        $this->load->model('user/user_model','m');
        $this->load->model('hallModel','hallM');
        $this->load->model('build_m','bm');
        $this->load->model('user_model','um');

      }       

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

                        $message = "User Succesfully Added! (send email)";
                            echo "<script type='text/javascript'>alert('$message');</script>";
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
           $this->welcomepage();    
       }
        else{
        redirect('main/restricted');
       }
    }
     public function welcomepage()
    {   
        $data['halls']= $this->hallM->getHall();
        $this->load->view('Header/Admin/adminHeader'); 
        $this->load->view('Content/common/welcomepage',$data);
        $this->load->view('footer/footer'); 
         
    }
    
    public function restricted(){
        $this->load->view('restricted');
    }
     public function myaccount(){
         $this->load->view('Header/Admin/adminHeader'); 
        $this->load->view('Content/common/myaccount');
        $this->load->view('footer/footer'); 
    }
    public function mybookings(){
         $this->load->view('Header/Admin/adminHeader'); 
        $this->load->view('Content/common/bookingsteps');
        $this->load->view('footer/footer'); 
    }
    
     public function login_validation(){


    $this->load->library('form_validation');

    $this->form_validation->set_rules('idnumber', 'ID Number' , 'required|trim|callback_validate_credentials');
    $this->form_validation->set_rules('password', 'Password' , 'required');
         
         if ($this->form_validation->run()){
            $data = array(
                'idNumber' => $this->input->post('idnumber'),
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

    public function logout()
    {
        $this->session->sess_destroy();
        redirect('main/login');
     }

     public function addUser()
     {
        
        $this->load->view('Header/Admin/adminHeader');  
        $this->load->view('Content/common/registration_view');
        $this->load->view('footer/footer'); 
     }
     public function addReservation()
     {
        
        $this->load->view('Header/Admin/adminHeader');  
        $this->load->view('Content/Common/calendar_view');
        $this->load->view('footer/footer'); 
     }
    public function manageEndorser()
     {
        
        $this->load->view('Header/Admin/adminHeader');  
        $this->load->view('Content/admin/manage_endorser');
        $this->load->view('footer/footer'); 
     }

   // ----  HALL  -------- //

//    public function adminHall()
//    {
//        if($this->session->userdata('is_logged_in'))
//        {
//            $this->viewHall();
//       }
//        else{
//             redirect('main/restricted');
//       }
//    }
   

    public function viewHall()
    {
        // display the list of halls

        $data['halls']= $this->hallM->getHall();
        $this->load->view('Header/Admin/adminHeader');  
        $this->load->view('Content/Admin/hall/hallDisplay',$data);
        $this->load->view('footer/footer'); 

    }

//   public function addHall()
//   {
//       // displays the form
//
//       $this->load->view('Header/admin/adminheader');  
//       $this->load->view('Content/Admin/hall/addHall');
//       $this->load->view('footer/footer');
//   }
  
   public function processAdd()
   {
      $this->hallM->submitAdd();
   }

   public function editHall($id)
   {
      $data['get_edit'] =$this->hallM->get_edit($id);
        $this->load->view('Header/Admin/adminHeader');
        $this->load->view('Content/Admin/hall/updateHall',$data);
        $this->load->view('footer/footer');
   }

   public function updateHall()
   {
     $this->hallM->get_update();
   }
  
   public function deleteHall($id)
   {
      $this->hallM->delete($id);
   }

   function search_keyword()
    {
        $keyword       = $this->input->post('keyword');
        $data['halls'] = $this->hallM->search($keyword);
        $this->load->view('Header/Admin/adminHeader');  
        $this->load->view('Content/Admin/hall/hallDisplay',$data);
        $this->load->view('footer/footer'); 
    }



   // ---------------------------------
    //  -------   BUILDING ------------
    // ---------------------------------

     public function viewBuilding()
     {
        $data['build']= $this->bm->getBuilding();
        $this->load->view('Header/admin/adminHeader');  
        $this->load->view('Content/Admin/Building/bDisplay',$data);
        $this->load->view('footer/footer'); 
     }
     

     public function submitBuilding()
     {
         $this->bm->addBuilding();
     }

//     public function viewAddBuilding()
//     {
//        $this->load->view('Header/Admin/adminHeader');  
//        $this->load->view('Content/Admin/Building/addBuild');
//        $this->load->view('footer/footer'); 
//     }

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
          //echo json_encode($this->session->userdata());
          redirect('main/members');

        }
    }
    
    public function calendar(){

        $this->load->view('Header/Common/userHeader');
        $this->load->view('Content/Common/calendar_view');
        $this->load->view('footer/footer');
    }

    
    public function updateBuilding()
    {
      $this->bm->update();
    }

   public function editBuilding($id)
   {
      $data['get_edit'] =$this->bm->get_edit($id);
    $this->load->view('Header/Admin/adminHeader'); 
      $this->load->view('Content/Admin/Building/editBuild',$data);
      $this->load->view('footer/footer'); 
   }
  
  public function deleteBuild($id)
  {
    $this->bm->delete($id);
  }

     function search_building()
    {
        $keyword       = $this->input->post('keyword');
        $data['build'] = $this->bm->search($keyword);
        $this->load->view('Header/admin/adminHeader');  
        $this->load->view('Content/Admin/Building/bDisplay',$data);
        $this->load->view('footer/footer'); 
    }

    //------------------------------------
    //---------- USERS -------------------
    //-------------------------------------

    public function displayUser()
    {
       $data['usersOutput'] = $this->um->getUser();
       $this->load->view('Header/Admin/adminHeader'); 
       $this->load->view('Content/Admin/user/userTable',$data);
       $this->load->view('footer/footer');
    } 
 
    public function addProcess()
    {
      $this->um->submit();
    } 

    public function addButton()
    {
      $this->load->view('Header/Admin/adminHeader'); 
      $this->load->view('Content/Common/registration_view');
      $this->load->view('footer/footer');
    }

    public function searchUsers()
    {

       $keyword       = $this->input->post('keyword');
       $data['usersOutput'] = $this->um->search($keyword);
       $this->load->view('Header/Admin/adminHeader'); 
       $this->load->view('Content/Admin/user/userTable',$data);
       $this->load->view('footer/footer');
    }

    public function deleteUsers($id)
    {
      $this->um->delete($id);
    }

    public function updateUser()
    {
      $this->um->update();
    }

    public function edit_User($id)
    {
      $data['get_edit'] = $this->um->get_edit($id);
      $this->load->view('Header/Admin/adminHeader'); 
      $this->load->view('Content/Admin/user/editUser',$data);
      $this->load->view('footer/footer'); 
    }

}   
