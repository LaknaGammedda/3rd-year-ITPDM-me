<?php

class RegisterC extends CI_Controller {

function __construct() {
parent::__construct();
$this->load->model('RegModel');
}
function index() {
//Including validation library
$this->load->library('form_validation');

$this->form_validation->set_error_delimiters('<div class="error">', '</div>');

//Validating Name Field
$this->form_validation->set_rules('fname', 'Username', 'required');
$this->form_validation->set_rules('lname', 'LastName', 'required');

//Validating Email Field
$this->form_validation->set_rules('demail', 'Email', 'required|valid_email');

//Validating Mobile no. Field
$this->form_validation->set_rules('dmobile', 'Mobile No.', 'required|regex_match[/^[0-9]{10}$/]');

//Validating Address Field
$this->form_validation->set_rules('Faddress', 'Address', 'required');
$this->form_validation->set_rules('Saddress', 'Last_address', 'required');
$this->form_validation->set_rules('city', 'City', 'required');

$this->form_validation->set_rules('Uname', 'UserName', 'required');
$this->form_validation->set_rules('pass', 'Password', 'required');

//Validate Confirm Password field
$this->form_validation->set_rules('conf', 'ConfPass', 'required|matches[pass]');
$this->form_validation->set_rules('selection1','Menu','required');



if ($this->form_validation->run() == FALSE)
 {
      $this->load->view('Register');
 } 
else
 {
   //Setting values for tabel columns
    $data = array(
	
      'firstName' => $this->input->post('fname'),
      'lastName' => $this->input->post('lname'),
      'Email' => $this->input->post('demail'),
      'Telephone' => $this->input->post('dmobile'),
       'Add1' => $this->input->post('Faddress'),
       'Add2' => $this->input->post('Saddress'),
       'City' => $this->input->post('city'),
       'Username' => $this->input->post('Uname'),
       'Password' => $this->input->post('pass'),
       'role'=>$this->input->post('selection1'),
    );
   //Transfering data to Model
    $this->RegModel->form_insert($data);
    $data['message'] = 'Data Inserted Successfully';
     //Loading View
    $this->load->view('Register', $data);
  }
}

}

?>