<?php

class managerReservationModel extends CI_Model
{
    function user_view_list()
    {
       $query=$this->db->query("SELECT * FROM reservation as r INNER JOIN res as re on r.Rid= re.Rid");

       // get the reservation details and the hotel details reserved by a every user

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

    


}