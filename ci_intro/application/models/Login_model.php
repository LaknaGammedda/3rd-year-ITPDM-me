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

	function user_role($userName,$password)
	{
		 $this->db->where('Username',$userName );
		 $this->db->where('Password',$password);
		 $query=$this->db->get('register');

		 $res=$query->result();
		 foreach ($res as $object1)
		  {
		       return $object1->role;

		  }

	}


}