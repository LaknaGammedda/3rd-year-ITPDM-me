<?php
   class Posts extends CI_Controller{
       public function index( ){
        $this->load->model("Post_model");

        $data['title'] = 'Rates and Reviews';

        $data['posts'] = $this->Post_model->get_posts();
        

        $this-> load->view('templates/header');
        $this-> load->view('post/index',$data);
        $this-> load->view('templates/footer');
       }

       public function create(){
         $this->load->model("Post_model");
       	$data['title'] = 'Create Post';
       // $this-> form_validation-> set_rules('name', 'Name', 'required');
        // $this->form_validation->set_rules('title', 'Title', 'required');
       	// $this->form_validation->set_rules('body', 'Body', 'required');
         $this->load->view('post/create',$data);
       //  if($this->form_validation->run()=== FALSE){
       //    $this->load->view('post/create',$data);
       //  }
       //  else{
       //    $this->Post_model->create_post();
       //    redirect(posts);                     
       // }


       }
      public function add(){
         $this->load->model("Post_model");
        $data['title'] = 'Create Post';
       // $this-> form_validation-> set_rules('name', 'Name', 'required');
        // $this->form_validation->set_rules('title', 'Title', 'required');
        // $this->form_validation->set_rules('body', 'Body', 'required');
         $this->Post_model->create_post();
          redirect(posts); 
       //  if($this->form_validation->run()=== FALSE){
       //    $this->load->view('post/create',$data);
       //  }
       //  else{
       //    $this->Post_model->create_post();
       //    redirect(posts);                     
       // }


       }      




       public function delete($id){
         $this->load->model("Post_model");
         $this->Post_model->delete_post($id);
         redirect(posts); 
        }

        public function Edit($slug){
           $this->load->model("Post_model");
          $data['post'] = $this->Post_model->get_posts($slug);

          if(empty($data['post'])){
            show_404();
          }
          $data['title'] ='Edit Post';

          $this->load->view('post/edit', $data);
          
        }

        public function update(){
          $this->load->model("Post_model");
          $this->Post_model->update_post();
          redirect('posts');
        }
 }