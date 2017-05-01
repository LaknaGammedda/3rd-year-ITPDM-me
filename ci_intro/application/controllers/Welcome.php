<?php if(!defined('BASEPATH')) exit('No direct script access allowed');
 
 class Welcome extends CI_Controller{

 	public function index()
 	{
 		$this->home();
 	}
	 
	 public function home()
	 {
		 $this->load->model('Model_users');
		 $data['tite']='MVC cool title';
		 $data['page_header']='Intro to MVC design';
		 $data['firstName'] = $this->Model_users->getFirstName();
		 $data['users'] = $this->Model_users->getUsers();
		 $this->load->view('Welcome_message',$data);
	 }
 }



