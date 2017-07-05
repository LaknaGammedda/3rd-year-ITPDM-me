<?php 

class uploadModel extends CI_Model{

	function __construct(){
		parent::__construct();

	}

	function setPicturePath($targetPath){
		echo $targetPath;
		
		$query=$this->db->query("SELECT Rid FROM reservation");
		$Rid="";
		foreach ($query->result() as $row1) {
          $Rid=$row1->Rid;
        }
		$data=array(
			'ImagePath'=>$targetPath
			);
		$this->db->where('Rid', $Rid);  
		$res=$this->db->update('reservation', $data);  

		// $data=array(
		// 	'complaint_id'=>$this->session->userdata('complaint_no'),
		// 	'path'=>$targetPath
		// 	);
		// $res=$this->db->insert('images',$data);
		if($res){
			return true;
		}
		else{
			return false;
		}
	}


	function updatePicturePath($targetPath){
		echo $targetPath;
		
		$Rid=$this->session->userdata('Rid');
		$data=array(
			'ImagePath'=>$targetPath
			);
		$this->db->where('Rid', $Rid);  
		$res=$this->db->update('reservation', $data);  

		if($res){
			return true;
		}
		else{
			return false;
		}
	}

}