<?php if(!defined('BASEPATH')) exit('No direct script access allowed');

class Book extends CI_Controller
{
	function index($des)
	{
		if($this->session->userdata('username')!='')
			{
		       echo '<h2> Welcome -'.$this->session->userdata('username').'</h2>';
		       echo $des;
		       echo "load a viwe here s ";
		       // href="<?php echo base_url('assets/bootstrap/css/bootstrap.min.css');"
		       //echo '<a href='base_url('/index.php/Mylogin/logout')'>logout</a>';
			}
			else
			{
				 redirect(base_url('/index.php/Book_login/login'));
		   
			}
	}
	

}
