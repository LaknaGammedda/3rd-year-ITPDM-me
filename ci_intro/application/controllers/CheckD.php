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
	
	function compareDate()
	{
		$this->load->model("Dat_Model");

		$startDate= $_POST['txtDate'];
		$valuee=$_POST['opt'];
		
		//echo $valuee;
		// echo $endDate;


  		 $data['dat']=$this->Dat_Model->datee($startDate,$valuee);
		 $data['ava']=$this->Dat_Model->Avail($valuee);
		 $data2=$this->Dat_Model->datee($startDate,$valuee);



    // foreach ($data['dat'] as $object) {
    //   echo $object->Destination.'<br/>';
      
      
    // }

   
   
    //  foreach ($data['ava'] as $object1) {
    //    echo $object1->Availability.'<br/>';
    //    echo $object1->Destination.'<br/>';
     
    //  }
    


	
		 
		 // echo $data['ava'];

		 $this->load->view('Booking',$data);
		
	}
}