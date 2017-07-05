<?php

class managerlistModel extends CI_Model
{
  function new_rentout()
  {
   $status="pending";
   $query=$this->db->query("SELECT * FROM reservation WHERE status= ? ",array($status));

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
   $query=$this->db->query("SELECT * FROM reservation WHERE status= ? ",array($status));


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
   $query=$this->db->query("SELECT * FROM reservation WHERE status= ? ",array($status));


   if($query->num_rows()>0)
   {
     return $query->result();
   }
   else
   {
     return $query->result();
   }
 }



 function view_reserved_user_details(){
  $name=$this->input->post('cpno');
  $query=$this->db->query("SELECT  * FROM register WHERE Username= ? ",array($name));





  echo "<div class='box-body'><dl class='dl-horizontal'>" ; 
  foreach ($query->result() as $row) {
    echo "<h6>Renter Details</h6><br/>";
    echo "<dt>Renter id</dt>";
    echo "<dd>".$row->Rid."</dd>";
    echo "<dt>First name</dt>";
    echo "<dd>".$row->firstName."</dd>";
    echo "<dt>Last name</dt>";
    echo "<dd>".$row->lastName."</dd>";
    echo "<dt>Email</dt>";
    echo "<dd>".$row->Email."</dd>";
    echo "<dt>Telephone</dt>";
    echo "<dd>".$row->Telephone."</dd>";
    echo "<dt>Address 1</dt>";
    echo "<dd>".$row->Add1."</dd>";
    echo "<dt>Address 2</dt>";
    echo "<dd>".$row->Add2."</dd>";
    echo "<dt>City</dt>";
    echo "<dd>".$row->City."</dd>";
    echo "<dt>Username</dt>";
    echo "<dd>".$row->Username."</dd>";


  }
  echo "</dl></div>";            
}








}