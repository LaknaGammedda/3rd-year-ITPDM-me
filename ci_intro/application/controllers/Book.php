<?php if(!defined('BASEPATH')) exit('No direct script access allowed');

class Book extends CI_Controller
{
	function index($des)
	{
		$data['des']=$des;
		$query1=$this->db->query("SELECT * FROM reservation WHERE Rid= ? ",array($des));
		$data['res']=$query1->result();
		if($this->session->userdata('username')!='')
			{

		       $this->load->view('AB',$data);
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
			// $id=$data['res']->Rid;
			// $data['id']=$id;
			

       
        
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
	        // $this->load->view('blog', $data);

	        $this->load->view('rating/x/index',$data);

	}
	function cancel_reservation($Did){
		echo $Did;

	}

}
