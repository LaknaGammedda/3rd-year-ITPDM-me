<?php
	class Post_model extends CI_Model{
		public function __construct(){
			$this -> load -> database();
		}

		public function get_posts($slug,$Rid){
			if($slug === FALSE)
			{
				$this->db->order_by('id' , 'DESC');
				$this->db->where('Rid', $Rid);  
				$query = $this -> db ->get('posts');
				return $query-> result_array(); 
			}

			$query = $this -> db -> get_where('posts',array('slug' => $slug));
			return $query -> row_array();

		}

		public function create_post(){
			$slug = url_title( $this-> input ->post('title'));

			$data = array(
				   'Rid' => $this -> input->post('Rid'),
					 'title'=>$this-> input-> post('title'),
				    'slug' => $slug,
				    'comment'=>$this-> input-> post('body')
				);
			return $this-> db-> insert('posts' , $data);
		}

		public function delete_post($id){
			$this->db->where('id' , $id);
			$this->db->delete('posts');
			return true;
		}

		public function update_post()
		{
			$slug = url_title( $this-> input ->post('title'));

			$data = array(
				   //'name' => $this -> input->post('name'),
					 'title'=>$this-> input-> post('title'),
				    'slug' => $slug,
				    'comment'=>$this-> input-> post('body')
				);
			$this->db->where('id' , $this->input->post('id'));
			return $this-> db->update('posts' , $data);
		}
	}