
<?php if(!defined('BASEPATH')) exit('No direct script access allowed');

class Renterlists extends CI_Controller
{
	 function __construct() {
        parent::__construct();
        	$this->load->model('renterlistsModel');
    }

	function lists(){
		$data['dat']=$this->renterlistsModel->pending_rentout();
		$data['accept']=$this->renterlistsModel->accept_rentout();
		$data['reject']=$this->renterlistsModel->reject_rentout();
		$this->load->view('renterlists',$data);
			
	
	}


	function UpdateRentouts($id){

		echo $id;
	}

	

	
}