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
   // Add validation rules to the username and password
  $this->load->library('form_validation');
  $this->form_validation->set_rules('username','Username','required');
  $this->form_validation->set_rules('pass','Password','required');

  if($this->form_validation->run())
  {

   $username= $this->input->post('username'); //get username & password from the user
   $password= $this->input->post('pass');
   $this->load->model('Login_model');// load login model

      if($this->Login_model->can_login($username,$password))// If username & password valid create a session
      {
         $session_data= $arrayName = array('username' =>$username);
         $this->session->set_userdata($session_data);

         $role=$this->Login_model->user_role($username,$password);// access to user_role method in login_model

         //check user roles and redirect to relevent pages
         if ($role=="renter") 
         {
             $data['title'] = 'Make Rent Outs';
             $this->load->view('RegisterRent',$data);     

         }

         else if ($role=="Manager")
         {
             redirect(base_url('/index.php/Managerlists/rentout_status'));
         }

        else
         {
            $this->load->view('Home');
         }

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
    }
   else
    {
      redirect(base_url('/index.php/Mylogin/logout'));   
    }
}

function logout()
  {
	  $this->session->sess_destroy();
    redirect(base_url('/index.php/CheckD/mydate'));
  }
}
