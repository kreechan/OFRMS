<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class main extends CI_Controller {


     public function __construct()
      {
        parent::__construct();
        $this->load->model('model_users','m');
        $this->load->model('hallModel','hallM');
        $this->load->model('build_m','bm');
        $this->load->model('model_users','um');
      }       

		public function index(){
        
            $this->login();  
    }

    public function login(){

      if($this->session->userdata('is_logged_in')){
          $this->welcomepage();}
        else{
        // redirect('main/restricted');
          $this->load->view('landingpage');
       }
   
    }

    public function registration_show() {
        $this->load->view('content/common/registration_view');
    }

    public function new_user_register(){

        
        $this->load->helper(array('form','url'));

        $this->load->library('form_validation');


        $this->form_validation->set_rules('firstname' , 'Firstname' , 'trim|required');
        $this->form_validation->set_rules('lastname' , 'Lastname' , 'trim|required');
        $this->form_validation->set_rules('password' , 'Password' , 'trim|required');
        $this->form_validation->set_rules('email' , 'Email' , 'trim|required');
        $this->form_validation->set_rules('department' , 'Department' , 'trim|required');

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
    
    public function login_validation(){


    $this->load->library('form_validation');

    $this->form_validation->set_rules('idnumber', 'ID Number' , 'required|trim|callback_validate_credentials');
    $this->form_validation->set_rules('password', 'Password' , 'required');
         
         if ($this->form_validation->run()){
            $data = array(
                'email' => $this->input->post('idnumber'),
                'is_logged_in' => 1
                );

            $this->session->set_userdata($data);
             redirect('main/members');
         }
         else{
             $this->login();
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
    public function changPass()
    {
        $this->load->view('Header/Admin/adminHeader'); 
        $this->load->view('Content/common/changePassword');
        $this->load->view('footer/footer'); 
        
     }

    
     public function addReservation()
     {
        $data['halls']= $this->hallM->getHall();
        $this->load->view('Header/Admin/adminHeader');  
        $this->load->view('Content/common/facilitycards',$data);
        $this->load->view('footer/footer'); 
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
          //echo json_encode($this->session->userdata());
          redirect('main/members');

        }
    }
    
   

   // ----  HALL  -------- //
   

    public function viewHall()
    {
        // display the list of halls

        $data['halls']= $this->hallM->getHall();
        $data['buildings']= $this->bm->getBuilding();
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

   public function updateHall()
   {
        $data['halls'] = $this->hallM->get_update();
        $this->load->view('Header/Admin/adminHeader');  
        $this->load->view('Content/Admin/hall/hallDisplay',$data);
        $this->load->view('footer/footer'); 
   }
    
     public function editHall($id)
   {
        $data['get_edit'] =$this->hallM->get_edit($id);
        $data['buildings']= $this->bm->getBuilding();
        $data['halls']= $this->hallM->getHall();
        $this->load->view('Header/Admin/adminHeader');
        $this->load->view('Content/Admin/hall/editHall',$data);
        $this->load->view('footer/footer');
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
        $data['buildings']= $this->bm->getBuilding();
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

    
    public function updateBuilding()
    {
      $data['buildings']=$this->bm->update();
      $this->load->view('Header/Admin/adminHeader'); 
      $this->load->view('Content/Admin/Building/bDisplay',$data);
      $this->load->view('footer/footer'); 
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
    
    public function regUser()
    {
      $this->load->view('Header/Admin/adminHeader'); 
      $this->load->view('Content/Common/registration_view');
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
        redirect('main/displayUser');
    }

    public function edit_User($id)
    {
      $data['get_edit'] = $this->um->get_edit($id);
      $this->load->view('Header/Admin/adminHeader'); 
      $this->load->view('Content/Admin/user/editUser',$data);
      $this->load->view('footer/footer'); 
    }

    //-------------------
   // ---- Endorser ------
    //---------------------

     public function manageEndorser()
     {
         $data['usersOutput'] = $this->um->getUser();
         $data['halls']= $this->hallM->getHall();
        $this->load->view('Header/Admin/adminHeader');  
        $this->load->view('Content/admin/manage_endorser',$data);
        $this->load->view('footer/footer'); 
     }

     public function searchEndorser()
     {

       $keyword       = $this->input->post('keyword');
       $data['usersOutput'] = $this->um->search($keyword);
       $this->load->view('Header/Admin/adminHeader'); 
       $this->load->view('Content/Admin/manage_endorser',$data);
       $this->load->view('footer/footer');
     }
    public function test()
    {
        
        $myphpvar = $this->input->post('test');
        echo "<script type='text/javascript'>alert(myphpvar);</script>";
        

    }

}   