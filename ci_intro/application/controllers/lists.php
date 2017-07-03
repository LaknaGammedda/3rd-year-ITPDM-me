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
	function cancel_reservation($Did){
		// echo $Did;
		$res=$this->listsModel->delete_by_user($Did);
		if ($res) {
			 redirect(base_url('/index.php/Lists/user_reservation_list'));

		}
		
	}

	function Update_reservation($Did){
		
		 $data['updateDetail']=$this->listsModel->update_by_user($Did);
		 $this->load->view('UpdateRes',$data);
		
		}



	function Update_reservation_savedata(){
		//edit this 
		$Did = $this->input->post('name');
		$data=array(
			
			'CheckIn'=>$this->input->post('txtIn'),
			'CheckOut'=>$this->input->post('txtOut'),
			'TeleNo'=>$this->input->post('teleNo')
			
			); 
		//edit this to Did
		$this->db->where('Did', $Did);  
		//edit to res table
		$res=$this->db->update('res', $data);  
		if($res){
			 redirect(base_url('/index.php/Lists/user_reservation_list'));
		}
		else{
			return false;
		}
		
		}
		
	
	public function view_user_details(){
		
		$res=$this->listsModel->view_reserved_user_details();
		if($res){
			return $res;
		}
		else{
			return "No data";
		}
	}

	
}