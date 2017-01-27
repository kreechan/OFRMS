<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class client_reservation extends CI_Controller {


    public function reservation(){

    	$this->load->view('Header/Common/userHeader');
    	$this->load->view('Content/Common/facilityCards');
    	$this->load->view('footer/footer');

 	    }

 	public function getReservations(){
 		
 		$this->load->model('reservation');

 		if($reservation = $this->reservation->getEvents()){
 			$data = array();
 			foreach($reservation as $row){
 				$id = $row->reserve_id;
 				$start = $row->event_datetime;
 				$title = $row->activity;
 				$end = $row->event_endtime;

 				$data = compact('id','title','start','end');
 			}

			echo json_encode(['result' => $data ]);
 		}
 		
 	

 		// 	$user=$this->session->set_userdata('logged_in')['idNumber'];
			// $this->load->model('model_users');
			// $data = $this->model_user->userfind($user);

			// $this->load->helper('form');
 	}

 	public function add_reserve(){

 		$date = $this->input->post('date');
 		$start = $this->input->post('timestart');
 		$end = $this->input->post('timeend');

    	$input = array(
          'fname' => $this->input->post('firstname'),
          'lname' => $this->input->post('lastname'),
          'hall_name'=>$this->input->post('hallname'),
          'activity'=>$this->input->post('activity'),
          'department'=>$this->input->post('department'),
          'event_datetime'=> date_create_immutable_from_format('Y-m-d g:i A', "{$date} {$start}")->format('Y-m-d H:i:s'),
          'event_endtime'=> date_create_immutable_from_format('Y-m-d g:i A', "{$date} {$end}")->format('Y-m-d H:i:s'),
          'purpose'=>$this->input->post('purpose'),
         // 'hall_pic'=>$this->input->post('hallpic')
         );


 		$this->load->model('model_users');
 		
 		    if($this->model_users->book_insert($input)==true){
 			$this->session->set_flashdata('success',true);
 			redirect('cards_hall/calendar');
 		     }
        }

 	public function retrieve_reservations(){

 		$date = $this->input->get('date');

 		$this->load->model('model_users');

 		$result=$this->model_users->retrieve_reservations($date);	
 		echo json_encode([
 			'data'=>$result
		]);
 	}
}