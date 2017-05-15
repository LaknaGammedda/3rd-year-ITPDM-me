<?php

class Login_model extends CI_Model
{

	
	function can_login($userName,$password)
	{
		 $this->db->where('Username',$userName );
		 $this->db->where('Password',$password);
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