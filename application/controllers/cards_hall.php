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
        $this->load->model('model_users','m');
        $this->load->model('hallModel','hallM');
        $this->load->model('build_m','bm');
      } 
    public function calendar(){
        $data['halls']= $this->hallM->getHall();
        $this->load->view('Header/Admin/adminHeader');  
        $this->load->view('Content/calendar/calendarReserve',$data);
        $this->load->view('footer/footer');   
        $user=$this->session->set_userdata('logged_in')['idNumber'];
        $this->data['post'] = $this->m->userfind($user);
        $this->load->helper('form'); 
    }
   
}   