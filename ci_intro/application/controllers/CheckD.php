<?php if(!defined('BASEPATH')) exit('No direct script access allowed');

class CheckD extends CI_Controller
{
	function myDate()
	{
		$this->load->view('Home');
	
	
		$this->load->library('form_validation');
		$this->form_validation->set_rules('txtDate','CHECKIN','callback_compareDate');
		$this->form_validation->set_rules('txtCheckOut','CHECKOUT','callback_compareDate');
		$this->form_validation->set_rules('opt','OPT','required');
	}
	
	function compareDate()
	{
		$this->load->model("Dat_Model");

		$startDate= $_POST['txtDate'];
		$valuee=$_POST['opt'];
		
		//echo $valuee;
		// echo $endDate;


  		 $data['dat']=$this->Dat_Model->datee($startDate,$valuee);
		 $data['ava']=$this->Dat_Model->Avail($valuee);
		 $this->load->view('Booking',$data);
		
	}
}