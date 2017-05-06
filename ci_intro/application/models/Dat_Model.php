<?php

class Dat_Model extends CI_Model
{
    function datee($startDate,$endDate)
    {
       $this->db->where('CheckIn',$startDate);
       $this->db->where('CheckOut',$endDate);
       $query=$this->db->get('res');

       if($query->num_rows()>0)
       {
       	 return true;
       }
       else
       {
       	 return false;
       }
    }
}