<?php if(!defined('BASEPATH')) exit('No direct script access allowed');

class Lists extends CI_Controller
{
	 function __construct() {
        parent::__construct();
        	$this->load->model('listsModel');
    }
	function user_reservation_list()
	{
		//$this->load->view('Home');
		
		$username=$this->session->userdata('username');
		$data['dat']=$this->listsModel->user_view_list($username);
		$this->load->view('user_reservation_list',$data);
		// print_r($res);

	
	
	}
	
}