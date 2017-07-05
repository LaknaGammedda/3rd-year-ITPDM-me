<?php

class renterlistsModel extends CI_Model
{
  function pending_rentout()
  {
   $status="pending";
   $username=$this->session->userdata('username');
   $query=$this->db->query("SELECT * FROM reservation WHERE status= ? AND username= ? ",array($status,$username));

   if($query->num_rows()>0)
   {
     return $query->result();
   }
   else
   {
     return $query->result();
   }
 }


 function accept_rentout()
 {
   $status="accept";
   $username=$this->session->userdata('username');
   $query=$this->db->query("SELECT * FROM reservation WHERE status= ? AND username= ? ",array($status,$username));


   if($query->num_rows()>0)
   {
     return $query->result();
   }
   else
   {
     return $query->result();
   }
 }


 function reject_rentout()
 {
   $status="reject";
   $username=$this->session->userdata('username');
   $query=$this->db->query("SELECT * FROM reservation WHERE status= ? AND username= ? ",array($status,$username));


   if($query->num_rows()>0)
   {
     return $query->result();
   }
   else
   {
     return $query->result();
   }
 }

function UpdateRentOuts($id){

        
        $query=$this->db->query("SELECT * FROM reservation WHERE Rid= ? ",array($id));
       if($query->num_rows()>0)
       {
         return $query->result();
       }
       else
       {
         return $query->result();
       }
     }


       function deleteRent($id){

       
        $query=$this->db->query("DELETE  FROM reservation WHERE Rid= ? ",array($id));
        return $query;
      
     
             

    }

}