<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class cards_hall extends CI_Controller {
    public function __construct()
      {
        parent::__construct();
        // $this->load->model('user/user_model','m');
        $this->load->model('hallModel','hallM');
        $this->load->model('build_m','bm');
        // $this->load->model('user_model','um');
        $this->load->model('model_users','mu');
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
        $user=$this->session->set_userdata('logged_in')['idNumber'];
        $this->data['post'] = $this->mu->userfind($user);
        $this->load->helper('form');     
    }
    public function BCT(){
        $this->load->view('Header/Admin/adminHeader');  
        $this->load->view('Content/calendar/calendar_rigney');
        $this->load->view('footer/footer');
        $user=$this->session->set_userdata('logged_in')['idNumber'];
        $this->data['post'] = $this->mu->userfind($user);
        $this->load->helper('form');     
    }
    public function SAFADtheater(){
        $this->load->view('Header/Admin/adminHeader');  
        $this->load->view('Content/calendar/calendar_rigney');
        $this->load->view('footer/footer');
        $user=$this->session->set_userdata('logged_in')['idNumber'];
        $this->data['post'] = $this->mu->userfind($user);
        $this->load->helper('form');     
    }
    public function MRtheater(){
        $this->load->view('Header/Admin/adminHeader');  
        $this->load->view('Content/calendar/calendar_rigney');
        $this->load->view('footer/footer');
        $user=$this->session->set_userdata('logged_in')['idNumber'];
        $this->data['post'] = $this->mu->userfind($user);
        $this->load->helper('form');     
    }
}   