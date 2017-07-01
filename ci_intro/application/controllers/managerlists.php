
<?php if(!defined('BASEPATH')) exit('No direct script access allowed');

class Managerlists extends CI_Controller
{
	 function __construct() {
        parent::__construct();
        	$this->load->model('managerlistModel');
    }
	function new_rentout()
	{
		$data['dat']=$this->managerlistModel->new_rentout();
		$this->load->view('managerPendinglist',$data);
		

	
	
	}
	function accept($Rid){
		$no=$this->input->post('c_no');
		$status="accept";
		$data=array(
			'status'=>$status
			);
		$this->db->where('Rid', $Rid);  
		$res=$this->db->update('reservation', $data);  
		if($res){
			redirect(base_url('/index.php/Managerlists/new_rentout'));
		}
		else{
			return false;
		}
	
	}
	function reject($Rid){
		$no=$this->input->post('c_no');
		$status="reject";
		$data=array(
			'status'=>$status
			);
		$this->db->where('Rid', $Rid);  
		$res=$this->db->update('reservation', $data);  
		if($res){
			redirect(base_url('/index.php/Managerlists/new_rentout'));
		}
		else{
			return false;
		}
	
	}

	
}