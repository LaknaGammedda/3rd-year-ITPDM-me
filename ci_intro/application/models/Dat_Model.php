<?php

class Dat_Model extends CI_Model
{
    function datee($startDate,$des)
    {

      $No="No";

       // $this->db->select('*');
       // $this->db->from('res');
       // $this->db->where('res.CheckOut <',$startDate);
       // $this->db->join('reservation','res.Rid=reservation.Rid');       
       // $query=$this->db->get();
       // $query=$this->db->query("SELECT * FROM reservation INNER JOIN res ON reservation.Rid=res.Rid");
        // WHERE Availability='".$yes."' AND Destination='".$valuee."' ");
       // $query=$this->db->query("SELECT * FROM reservation INNER JOIN  res ON reservation.Rid=res.Rid  WHERE res.CheckOut < '".$startDate."'  ");


       $query=$this->db->query("SELECT * FROM reservation as r INNER JOIN res as re on r.Rid= re.Rid WHERE r.Availability= ? and r.Destination= ?  and re.CheckOut<? ",array($No,$des,$startDate));

       if($query->num_rows()>0)
       {
       	 return $query->result();
       }
       else
       {
       	 return $query->result();
       }
    }

    function Avail($valuee)
    {
      $yes="yes";
      // $this->db->select('*');
      // $this->db->from('reservation');
      // $this->db->where('Availability',$yes AND 'Destination',$valuee);
      $query=$this->db->query("SELECT * FROM reservation WHERE Availability='".$yes."' AND Destination='".$valuee."' ");

      // $query=$this->db->get();

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