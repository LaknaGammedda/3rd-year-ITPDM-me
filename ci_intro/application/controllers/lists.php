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
		$data=array(
			'date_received'=>$this->input->post('date_received'),
			'person_received'=>$this->input->post('person'),
			'source'=>$this->input->post('source'),
			'no'=>$this->input->post('no'),
			'nature'=>$this->input->post('nature')
			); 
		//edit this to Did
		$this->db->where('complaint_no', $no);  
		//edit to res table
		$res=$this->db->update('complaint_nature', $data);  
		if($res){
			return true;
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