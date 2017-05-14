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
	function viewall($des)
	{
		
			$this->load->model("Dat_Model");
			$data['res']=$this->Dat_Model->viewAll($des);

			

       
        
        	$data['title'] = 'Rates and Reviews';



			// echo $data['res'];
			$this->load->view('viewall',$data);
			$this->load->model("Post_model");
        	$data['posts'] = $this->Post_model->get_posts();
        	$this->load->view('templates/header');
			$this->load->view('post/index',$data);

			// add review
			$blog_id = $des;
			$this->load->model('blogmodel');
	        $vote_results = $this->blogmodel->get_blog_rating($blog_id);
	        $data['blog_vote_overall_rows'] = $vote_results['vote_rows'];
	        $data['blog_vote_overall_rate'] = $vote_results['vote_rate'];
	        $data['blog_vote_overall_dec_rate'] = $vote_results['vote_dec_rate'];
	        $vote_results = $this->blogmodel->get_blog_rating_from_ip($blog_id);
	        $data['blog_vote_ip_rate'] = $vote_results['vote_rate'];
	        $this->load->view('blog', $data);
	        $this->load->view('rating/x/index');


		    
			
			
	}
	

}
