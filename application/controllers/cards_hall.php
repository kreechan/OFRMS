<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class cards_hall extends CI_Controller {
    public function __construct()
      {
        parent::__construct();
        $this->load->model('model_users','m');
        $this->load->model('hallModel','hallM');
        $this->load->model('build_m','bm');
<<<<<<< HEAD
        $this->load->model('model_users','um');
=======
        $this->load->model('user_model','um');
        $this->load->model('model_users','mu');
>>>>>>> origin/master
      } 
    public function rigneyHall(){
        $this->load->view('Header/Admin/adminHeader');  
        $this->load->view('Content/calendar/calendar_rigney');
        $this->load->view('footer/footer');   
        $user=$this->session->set_userdata('logged_in')['idNumber'];
        $this->data['post'] = $this->mu->userfind($user);
        $this->load->helper('form'); 
    }
    public function SASavr(){
        $this->load->view('Header/Admin/adminHeader');  
        $this->load->view('Content/calendar/calendar_rigney');
        $this->load->view('footer/footer');    
    }
    public function BCT(){
        $this->load->view('Header/Admin/adminHeader');  
        $this->load->view('Content/calendar/calendar_rigney');
        $this->load->view('footer/footer');    
    }
    public function SAFADtheater(){
        $this->load->view('Header/Admin/adminHeader');  
        $this->load->view('Content/calendar/calendar_rigney');
        $this->load->view('footer/footer');    
    }
    public function MRtheater(){
        $this->load->view('Header/Admin/adminHeader');  
        $this->load->view('Content/calendar/calendar_rigney');
        $this->load->view('footer/footer');    
    }
}   