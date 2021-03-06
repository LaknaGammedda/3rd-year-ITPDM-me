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
			   $name=$this->session->userdata('username');
			   $query2=$this->db->query("SELECT * FROM register WHERE Username= ? ",array($name));
			   $data['user']=$query2->result();
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
        
        	$data['title'] = 'Rates and Reviews';

			$this->load->view('viewall',$data);


			$this->load->model("Post_model");
			$Rid=$des;
			$slug = FALSE;
        	$data['posts'] = $this->Post_model->get_posts($slug,$Rid);
        	$this->load->view('templates/header');
        	$data['Rid']=$Rid;
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
	// function cancel_reservation($Did){
	// 	echo $Did;

	// }

}
