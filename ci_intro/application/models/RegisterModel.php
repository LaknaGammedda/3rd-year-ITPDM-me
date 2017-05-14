<?php		
   /**
   * 
   */
   class RegisterModel extends CI_Model
   {
   	
   	
    public function __construct(){
   
   		 parent::__construct();
   	}
 
	public function make_rent($url){
		
$availabilty='yes';
		$data = array(
			
				   //'name' => $this -> input->post('name'),
				//'renterName'=>$this-> input-> post('name'),
				'city'=>$this-> input-> post('city'),
				'Availability'=> $availabilty,				
				'ImagePath'=> $url,
				'LodgeName'=>$this-> input->post('lname'),
				'address1'=>$this-> input-> post('address1'),
				'address2'=>$this-> input-> post('address2'),
				'NumberOfRooms'=>$this-> input-> post('title'),
				'price'=>$this-> input-> post('price')
				
				
				);
			$this-> db-> insert('reservation' , $data);
	  }
    }
?>