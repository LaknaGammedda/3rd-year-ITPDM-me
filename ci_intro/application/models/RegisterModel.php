<?php		
   /**
   * 
   */
   class ClassName extends RegisterModel
   {
   	
   	
    public function __construct(){
   
   		 parent::__construct();
   	}
 
	public function make_rent(){
		

		$data = array(
				   //'name' => $this -> input->post('name'),
				'renterName'=>$this-> input-> post('name'),
				'address1'=>$this-> input-> post('address1'),
				'address2'=>$this-> input-> post('address2'),
				'city'=>$this-> input-> post('city'),
				'price'=>$this-> input-> post('price'),
				'facility'=>$this-> input-> post('facility'),
				'NumberOfRooms'=>$this-> input-> post('title')
				);
			$this-> db-> insert('rentouts' , $data);
	  }
    }
?>