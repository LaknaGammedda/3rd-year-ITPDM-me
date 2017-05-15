<?php
class RegisterCntrol extends CI_Controller{

	public function __construct(){
		parent::__construct();
		$this->load->library(array('form_validation'));
		$this->load->model('RegisterModel');
	}



	public function create(){
		$data['title'] = 'Make Rent Outs';

		$this->form_validation->set_rules('address1' , 'First Address','required');
		$this->form_validation->set_rules('address2' , 'Second Address','required');
		$this->form_validation->set_rules('city' , 'City','required');
		$this->form_validation->set_rules('price' , 'Price','required');
		$this->form_validation->set_rules('lname' , 'Lodge Name','required');

		if ($this->form_validation->run()===FALSE) {
			$this->load->view('RegisterRent',$data);
		}
		else{
			$type=explode('.', $_FILES['pic']['name']);
			$type=$type[count($type)-1];
			$url= "./image/".uniqid(rand()).'.'.$type;
			if(in_array($type, array("jpg","jpeg","gif","png")))

				if (is_uploaded_file($_FILES['pic']['tmp_name'])) 
					if (move_uploaded_file($_FILES['pic']['tmp_name'], $url)) 

						$this->RegisterModel->make_rent($url);
					echo "Successfully added your lodge" ;
	  	//$this-> load->view('post/lodgeAddSucess');
				}
			}

		}

		?>


