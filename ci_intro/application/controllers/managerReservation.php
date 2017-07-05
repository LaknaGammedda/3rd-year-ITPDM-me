<?php if(!defined('BASEPATH')) exit('No direct script access allowed');

class ManagerReservation extends CI_Controller
{
	 function __construct() {
        parent::__construct();
        	$this->load->model('managerReservationModel');
    }
	function user_reservation_list()
	{
		
		// $username=$this->session->userdata('username');
		$data['dat']=$this->managerReservationModel->user_view_list();
		$this->load->view('manager_reservation_list',$data);
		 // print_r($res);

	
	
	}
	

		
	public function view_user_details(){
		
		$res=$this->managerReservationModel->view_reserved_user_details();
		if($res){
			return $res;
		}
		else{
			return "No data";
		}
	}

	
}