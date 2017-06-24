<?php

class listsModel extends CI_Model
{
    function user_view_list($username)
    {
      
      // echo $username;



     

       $query=$this->db->query("SELECT * FROM reservation as r INNER JOIN res as re on r.Rid= re.Rid WHERE re.username= ? ",array($username));

       if($query->num_rows()>0)
       {
       	 return $query->result();
       }
       else
       {
       	 return $query->result();
       }
    }

    


   




}