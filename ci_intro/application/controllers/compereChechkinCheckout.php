<?php if(!defined('BASEPATH')) exit('No direct script access allowed');

class compereChechkinCheckout extends CI_Controller
{
	
	
	function compareDate()
	{
		$this->load->model("Dat_Model");

		$startDate= $_POST['txtDate'];
		$endDate= $_POST['txtCheckout'];

		$valuee=$_POST['opt'];
		  
		 $data['dat']=$this->Dat_Model->compare($startDate,$endDate,$valuee);
		 
		 $data['ava']=$this->Dat_Model->Avail($valuee);
		 // $data2=$this->Dat_Model->datee($startDate,$valuee);
		 // print_r($res);
		 // print_r($data['ava']);
		 $this->load->view('Booking',$data);
		
	}






	

}