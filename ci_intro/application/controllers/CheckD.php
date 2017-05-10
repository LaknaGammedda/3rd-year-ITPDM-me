<?php if(!defined('BASEPATH')) exit('No direct script access allowed');

class CheckD extends CI_Controller
{
	function myDate()
	{
		$this->load->view('CDates');
	
	
		$this->load->library('form_validation');
		$this->form_validation->set_rules('CheckIn','CHECKIN','callback_compareDate');
		$this->form_validation->set_rules('CheckOut','CHECKOUT','callback_compareDate');
		$this->form_validation->set_rules('opt','OPT','required');
	}
	
	function compareDate()
	{
		$this->load->model("Dat_Model");

		$startDate= $_POST['CheckIn'];
		$valuee=$_POST['opt'];
		
		//echo $valuee;
		// echo $endDate;


  		 $data['dat']=$this->Dat_Model->datee($startDate,$valuee);
		 $data['ava']=$this->Dat_Model->Avail($valuee);
		 $this->load->view('date_result',$data);
		
	}
}