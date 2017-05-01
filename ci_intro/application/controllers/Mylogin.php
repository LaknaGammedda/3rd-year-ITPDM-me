<?php if(!defined('BASEPATH')) exit('No direct script access allowed');
 
 class Mylogin extends CI_Controller{



function login()
{
	//http://localhost:81/ci_intro/Login/login
	$data['title']='LOGIN';
    $this->load->view("Login",$data);

}

function login_validation()

{
    echo "hey";
    $this->load->library('form_validation');
	  $this->form_validation->set_rules('username','Username','required');
    $this->form_validation->set_rules('pass','Password','required');

if($this->form_validation->run())
{
   $username= $this->input->post('username');
   $password= $this->input->post('pass');
   $this->load->model('Login_model');
   // echo "in forvalidation";
   if($this->Login_model->can_login($username,$password))
   {
   	 $session_data= $arrayName = array('username' =>$username);

   	 $this->session->set_userdata($session_data);
     echo "sesson created";
     //echo $this->session->userdata('username');
   	 redirect(base_url('index.php/Mylogin/enter'));
   }
   else
   {
   	  $this->session->set_flashdata('error','Invalid username and password');
   	  redirect(base_url('/index.php/Mylogin/login'));
   }
   
}
else
{
	$this->login();
}
}

function enter()
{
	if($this->session->userdata('username')!='')
	{
       echo '<h2> Welcome -'.$this->session->userdata('username').'</h2>';
       // href="<?php echo base_url('assets/bootstrap/css/bootstrap.min.css');"
       //echo '<a href='base_url('/index.php/Mylogin/logout')'>logout</a>';
	}
	else
	{
		 redirect(base_url('/index.php/Mylogin/logout'));
   
	}
}

function logout()
{
	$this->session->unset_userdata('username');
	 redirect(base_url('/index.php/Mylogin/login'));
   }
}
