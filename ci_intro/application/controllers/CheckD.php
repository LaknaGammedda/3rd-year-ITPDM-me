<?php if(!defined('BASEPATH')) exit('No direct script access allowed');

class CheckD extends CI_Controller
{
	function myDate()
	{
		$this->load->model('getcitiesModel');

		$res=$this->getcitiesModel->city();
		$data['cities']=$res;
		$this->load->view('Home',$data);

	
	
		$this->load->library('form_validation');
		$this->form_validation->set_rules('txtDate','CHECKIN','callback_compareDate');
		$this->form_validation->set_rules('txtCheckOut','CHECKOUT','callback_compareDate');
		$this->form_validation->set_rules('opt','OPT','required');

	}

	
}