<?php if(!defined('BASEPATH')) exit('No direct script access allowed');

class CheckD extends CI_Controller
{
	function myDate()
	{
		$this->load->view('CDates');
	
	
		$this->load->library('form_validation');
		$this->form_validation->set_rules('CheckIn','CHECKIN','callback_compareDate');
		$this->form_validation->set_rules('CheckOut','CHECKOUT','callback_compareDate');
	}
	
	function compareDate()
	{
		$startDate= strtotime($_POST['CheckIn']);
		$endDate= strtotime($_POST['CheckOut']);

		if($this->Dat_Model->datee($startDate,$endDate))
		{
			echo "Successful";
		}
		else
		{
			echo "Unsuccessful";
		}
	}
}