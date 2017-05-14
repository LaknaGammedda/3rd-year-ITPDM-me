<?php

class Login_model extends CI_Model
{

	
	function can_login($userName,$password)
	{
		 $this->db->where('firstName',$userName);
		 $this->db->where('password',$password);
		 $query=$this->db->get('register');

		 if($query->num_rows()>0)
		 {
            return true;
		 }
		 else
		 {
		 	return false;
		 }
	}
}