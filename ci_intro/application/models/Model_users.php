<?php
class Model_users extends CI_Model{

	function _construct(){
		
		parent::_construct();//call the model constructor
	}
	
	function getFirstName()
	{
		$query = $this->db->query('SELECT firstName FROM users');
		if($query->num_rows() > 0)
		{
			return $query->result();
		}
		else
		{
			return null;
		}
		
	}
	
	function getUsers()
	{
		$query=$this->db->query('SELECT * FROM users');
		if($query->num_rows()>0)
		{
			return $query->result();
		}
		else
		{
			return null;
		}
	}
	
}



