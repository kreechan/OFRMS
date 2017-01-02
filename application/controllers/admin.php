<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class admin extends CI_Controller {

	public function_construct(){

		parent::_construct();
		$this->load->model('user/user_model','m');
		$this->load->model('hallModel','hallM');
	}

	public function index()
	{
         $this->load->view('header/common/userheader');
        $this->load->view('content/admin/editHall');
        $this->load->view('footer/footer');
    }
   
}