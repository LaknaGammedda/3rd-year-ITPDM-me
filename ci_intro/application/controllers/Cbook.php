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
			$this->load->view('thankyou');



	}
}