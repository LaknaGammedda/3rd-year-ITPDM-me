<?php

class Dat_Model extends CI_Model
{
    function datee($startDate)
    {
       $this->db->select('*');
       $this->db->from('res');
       $this->db->where('res.CheckOut <',$startDate);
       $this->db->join('reservation','res.Rid=reservation.Rid');       
       $query=$this->db->get();

       if($query->num_rows()>0)
       {
       	 return $query->result();
       }
       else
       {
       	 return null;
       }
    }

    function Avail($valuee)
    {
      $this->db->select('*');
      $this->db->from('reservation');
      $this->db->where("Availability='Not reserved'" AND 'Destination',$valuee);
      $query=$this->db->get();

      if($query->num_rows()>0)
      {
         return $query->result();
      }

      else
      {
        return null;
      }
    }
}