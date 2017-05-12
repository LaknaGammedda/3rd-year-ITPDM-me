<?php
 class RegisterCntrol extends CI_Controller{

   //public function __construct(){

     // $this->load->model('RegisterModel');
   // }

     

   public function create(){
	  $data['title'] = 'Make Rent Outs';
	  $this->form_validation->set_rules('name' , 'Name','required');
	  $this->form_validation->set_rules('address1' , 'First Address','required');
	  $this->form_validation->set_rules('address2' , 'Second Address','required');
	  $this->form_validation->set_rules('city' , 'City','required');
	  $this->form_validation->set_rules('price' , 'Price','required');
	  $this->form_validation->set_rules('facility' , 'Facility','required');

	  if ($this->form_validation->run()===FALSE) {
	  	$this->load->view('RegisterRent',$data);
	  }
	  else{
	  	$this->RegisterModel->make_rent();
	  	
	  }
   }

 }

 ?>


   