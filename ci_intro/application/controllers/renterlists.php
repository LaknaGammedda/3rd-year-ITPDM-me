
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

	function cancelRent($id){
		echo $id;
		$res=$this->renterlistsModel->deleteRent($id);
		if ($res) {
			 redirect(base_url('/index.php/Renterlists/lists'));

		}
		
	}


	function UpdateRentouts($id){

        $res['title']='Update Rent Outs';
		// echo $id;
		$res['UpdatedData']=$this->renterlistsModel->UpdateRentOuts($id);
		// print_r($res) ;
		$this->load->view('UpdateRent',$res);


	}

	function UpdateRen_savedata(){
		//edit this 
		
		$data=array(
			'Address1'=>$this->input->post('address1'),
			'Address2'=>$this->input->post('address2'),
			'Destination'=>$this->input->post('city'),
			'Price'=>$this->input->post('price'),
			'LodgeName'=>$this->input->post('lname'),
			'NumRooms'=>$this->input->post('select')
			
			); 
		$id=$this->input->post('name');
		print_r($data);
		echo $id;
		$this->db->where('Rid', $id);  
		
		$res=$this->db->update('reservation', $data);  
		if($res){

			  $this->load->view('UpdateImages');
			 // redirect(base_url('/index.php/Renterlists/lists'));
		}
		else{
			return false;
		}
		
		}
	
}