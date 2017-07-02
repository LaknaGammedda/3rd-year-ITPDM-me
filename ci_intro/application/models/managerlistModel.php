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
    echo "<h6>complain</h6><br/>";
    echo "<dt>Complain No</dt>";
    echo "<dd>".$row->Rid."</dd>";
    echo "<dt>Province</dt>";
    echo "<dd>".$row->firstName."</dd>";
    echo "<dt>District</dt>";
    echo "<dd>".$row->lastName."</dd>";
    echo "<dt>Local authority</dt>";
    echo "<dd>".$row->Email."</dd>";
    echo "<dt>Responsible</dt>";
    echo "<dd>".$row->Telephone."</dd>";
    echo "<dt>Name</dt>";
    echo "<dd>".$row->Add1."</dd>";
    echo "<dt>Address 1</dt>";
    echo "<dd>".$row->Add2."</dd>";
    echo "<dt>Address 2</dt>";
    echo "<dd>".$row->City."</dd>";
    echo "<dt>city</dt>";
    echo "<dd>".$row->Username."</dd>";


  }
  echo "</dl></div>";            
}








}