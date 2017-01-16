<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class cards_hall extends CI_Controller {
    public function __construct()
      {
        parent::__construct();
        $this->load->model('user/user_model','m');
        $this->load->model('hallModel','hallM');
        $this->load->model('build_m','bm');
        $this->load->model('user_model','um');
      } 
    public function rigneyHall(){
        $this->load->view('Header/Admin/adminHeader');  
        $this->load->view('Content/calendar/calendar_rigney');
        $this->load->view('footer/footer');    
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