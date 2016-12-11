<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class superadmin extends CI_Controller {

	public function index()
	{
         $this->load->view('header/common/userheader');
        $this->load->view('content/admin/reservationrequests');
        $this->load->view('footer/footer');
    }
   
}
