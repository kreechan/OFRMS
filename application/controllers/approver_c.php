<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Hall extends CI_Controller {


   public function __construct()
    {
        parent::__construct();
        $this->load->model('approver_m','am');

    }

    public function index()
    {
        if($this->session->userdata('is_logged_in'))
        {
            $this->viewHall();
       }
        else{
             redirect('main/restricted');
       }
    }
 
   public function fetch()
   {
    $data['groups'] = $this->am->getdb();
    $this->load->view('Content/Admin/manage_endorser',$data);
   }

}