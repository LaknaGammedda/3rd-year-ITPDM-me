<?php

class Dat_Model extends CI_Model
{
    // function datee($startDate,$des)
    // {

    //   $No="No";

    //    $query=$this->db->query("SELECT * FROM reservation as r INNER JOIN res as re on r.Rid= re.Rid WHERE r.Availability= ? and r.Destination= ?  and re.CheckOut<? ",array($No,$des,$startDate));

    //    if($query->num_rows()>0)
    //    {
    //    	 return $query->result();
    //    }
    //    else
    //    {
    //    	 return $query->result();
    //    }
    // }

     function compare($startDate,$endDate,$des)
    {

      $No="No";

       //$query=$this->db->query("SELECT * FROM reservation as r INNER JOIN res as re on r.Rid= re.Rid WHERE r.Availability= ? and r.Destination= ?  and re.CheckOut<? ",array($No,$des,$startDate));
      $query=$this->db->query("SELECT * FROM reservation WHERE Availability= ? and Destination= ? ",array($No,$des));
      foreach ($query->result() as $row) {
        $Rid=$row->Rid;
         $row->flag="YES";
        $query1=$this->db->query("SELECT * FROM res WHERE Rid= ? ",array($Rid));
        foreach($query1->result() as $row1) {
          $cin=$row1->CheckIn;
          $cout=$row1->CheckOut;
          if (($cout >= $startDate) && ($cin <= $startDate)) {
            $row->flag="NO";

          }
          if (($cout >= $endDate) && ($cin <= $endDate)) {
             $row->flag="NO";
          }
          
        }

        
      }
      return $query->result();

       
    }






















    function Avail($valuee)
    {
      $yes="yes";
      // $this->db->select('*');
      // $this->db->from('reservation');
      // $this->db->where('Availability',$yes AND 'Destination',$valuee);
      $query=$this->db->query("SELECT * FROM reservation WHERE Availability='".$yes."' AND Destination='".$valuee."' ");

      foreach ($query->result() as $row2 ) {
        $row2->flag="YES";
      }

      if($query->num_rows()>0)
      {
         return $query->result();
      }
      else
      {
        return $query->result();
      }
    }


    function viewAll($des)
    {
      // echo $des;
     $query=$this->db->query("SELECT * FROM reservation WHERE Rid='".$des."' ");

      // $query=$this->db->get();

      if($query->num_rows()>0)
      {
        // echo "yes";
         return $query->result();
      }
      else
      {
        
       return $query->result();
      }
    }




}