<?php if(!defined('BASEPATH')) exit('No direct script access allowed');

class Cbook extends CI_Controller
{
	function mybook()
	{
		$data = array(
	
			'CheckIn' => $this->input->post('txtIn'),
			'CheckOut' => $this->input->post('txtOut'),
			'Rid' => $this->input->post('name'),
			'TeleNo' => $this->input->post('teleNo')
			
			);
			//Transfering data to Model


			$this->db->insert('res', $data);



			$no=$this->input->post('name');
			$x="No";
			$data1=array(
				'Availability'=>$x,
				
				);
			$this->db->where('Rid', $no);  
			$res=$this->db->update('reservation', $data1);  
			$this->load->view('thankyou');



	}
}