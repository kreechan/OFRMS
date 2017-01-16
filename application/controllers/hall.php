<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Hall extends CI_Controller {




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


    public function viewHall()
    {
        // display the list of halls

        $data['halls']= $this->load->hallModel->getHall();
        $this->load->view('Header/common/userheader');  
        $this->load->view('Content/Admin/hall/hallDisplay',$data);
        $this->load->view('footer/footer');
    }

   public function addHall()
   {
       // displays the form

        $this->load->view('Header/common/userheader');  
        $this->load->view('Content/Admin/hall/addHall');
        $this->load->view('footer/footer');
   }
  
   public function processAdd()
   {
      $this->load->hallModel->submitAdd();
   }

   public function updateUser($id)
   {
     $data['get_update'] =$this->load->hallModel->get_update($id);
    $this->load->view('Header/common/userheader');  
     $this->load->view('Content/Admin/hall/updateHall',$data);
     $this->load->view('footer/footer');
   }

   public function deleteHall($id)
   {
      $this->load->hallModel->delete($id);
   }

   
}

