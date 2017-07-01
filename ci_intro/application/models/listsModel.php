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

    function delete_by_user($Did){

        $x="yes";
        $Rid="";
        $query1=$this->db->query("SELECT * FROM res WHERE Did= ? ",array($Did));
        foreach ($query1->result() as $row1) {
          $Rid=$row1->Rid;
        }
        $data=array(
      'Availability'=>$x
      
      );
      $this->db->where('Rid', $Rid);  
      $res=$this->db->update('reservation', $data);  
      if($res){
        $query=$this->db->query("DELETE FROM res WHERE Did= ? ",array($Did));
         return $query;
      }
      else{
          return false;
      }


        

    }


   




}