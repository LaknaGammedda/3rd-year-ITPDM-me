<?php

class listsModel extends CI_Model
{
    function user_view_list($username)
    {
      
      // echo $username;



     

       $query=$this->db->query("SELECT * FROM reservation as r INNER JOIN res as re on r.Rid= re.Rid WHERE re.username= ? ",array($username));

       // get the reservation details and the hotel details reserved by a pirticular user

       if($query->num_rows()>0)
       {
       	 return $query->result();
         // return array of object
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


         function Update_by_user($Did){

        
        $query=$this->db->query("SELECT * FROM res WHERE Did= ? ",array($Did));
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
              echo "<h6>User Details</h6><br/>";
              echo "<dt>User id</dt>";
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