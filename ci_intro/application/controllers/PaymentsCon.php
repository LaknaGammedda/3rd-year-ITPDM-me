<?php if(!defined('BASEPATH')) exit('No direct script access allowed');

class PaymentsCon extends CI_Controller

{
	function Pay()
	{
    $name=$this->session->userdata('username');
    $query2=$this->db->query("SELECT * FROM register WHERE Username= ? ",array($name));
    $data['user']=$query2->result();
	  
	   // $this->load->library('form_validation');
    
    
	   $this->load->view('PaymentsV',$data);
	}
	


    


    function cardnumber_validation()
	 {


     $this->load->library('form_validation');
     $this->form_validation->set_rules('cardnumber','CardNumber','required|regex_match[/^[0-9]{16}$/]');
     $this->form_validation->set_rules('CSC','CSC','required|regex_match[/^[0-9]{3}$/]');
      
      if($this->form_validation->run()){
        $this->load->view('paymentthank');
        
      }else{
         $this->Pay();
      }


  
  }
}