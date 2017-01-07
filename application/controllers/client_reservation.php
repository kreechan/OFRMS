<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class client_reservation extends CI_Controller {


    public function reservation(){

    	$this->load->view('Header/Common/userHeader');
    	$this->load->view('Content/Common/facilityCards');
    	$this->load->view('footer/footer');
 	   

 	    }
}