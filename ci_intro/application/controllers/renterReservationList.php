<?php if(!defined('BASEPATH')) exit('No direct script access allowed');

class renterReservationList extends CI_Controller
{
   function __construct() {
        parent::__construct();
          $this->load->model('renterReservationModel');
    }
  function user_reservation_list()
  {
    
    $username=$this->session->userdata('username');
    $data['dat']=$this->renterReservationModel->user_view_list($username);
    $this->load->view('renter_reservation_list',$data);
    // print_r($data['dat']);

  
  
  }
  

    
  public function view_user_details(){
    
    $res=$this->ReservationModel->view_reserved_user_details();
    if($res){
      return $res;
    }
    else{
      return "No data";
    }
  }

  
}