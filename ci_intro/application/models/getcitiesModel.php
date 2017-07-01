<?php

class getcitiesModel extends CI_Model
{
    function city()
    {
       $query=$this->db->query("SELECT DISTINCT Destination FROM reservation");

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