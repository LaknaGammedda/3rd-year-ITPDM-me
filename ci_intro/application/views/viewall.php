<html>
<body>
<?php

	function db_connect(){
  $server_name = "localhost";
  $user_name = "root";
  $password = "";
  $db_name = "ci_b";
  $db = new mysqli($server_name, $user_name, $password, $db_name);
  if($db->connect_errno > 0){
    die('Unable to connect to database [' . $db->connect_error . ']');
  }

  return $db;
}

$db = db_connect();
mysqli_query($db,"set character_set_results='utf8'"); 

 foreach ($res as $object1) {
    	$des= $object1->Destination;
      	$a=$object1->ImagePath;
      	$id=$object1->Rid;
      	$name=$object1->LodgeName;
      	$add1=$object1->Address1;
      	$add2=$object1->Address2;
      	$rooms=$object1->NumRooms;
      	$price=$object1->Price;

    	?>
    	<div id="picA"><img src="<?php echo base_url($a);?>" width="260" height="125"></div>
     	<div id="desA"><h3><?php echo $des; ?></h3>
	     	<?php
	        	$id=$object1->Rid;
	        	$sql = 'SELECT COUNT(DISTINCT(vote_id)) total_rows,IFNULL(SUM(blog_vote),0) total_rating, blog_id
	            FROM blog_vote 
	            WHERE blog_id='.$id.' LIMIT 1';
	            	$result3 = $db->query($sql);
	              	$row =$result3->fetch_assoc();
			        
			        $total_rows = $row['total_rows'];
			        $total_rating = $row['total_rating'];
			        $results['vote_rows'] = $total_rows;
			        $rating = 0;
			        if ($total_rows > 0) {
			            $rating = $total_rating / $total_rows;
			        }
			        $dec_rating = round($rating, 1);
			        //echo  $dec_rating;

	                $starNumber=$dec_rating;
	                for($x=1;$x<=$starNumber;$x++) {
	                    echo '<img src="https://cdn0.iconfinder.com/data/icons/small-n-flat/24/678064-star-128.png" style="width:35px" />';
	                }
	                if (strpos($starNumber,'.')) {
	                    echo '<img src="https://cdn4.iconfinder.com/data/icons/pretty_office_3/256/Star-Half-Full.png"  style="width:35px"/>';
	                    $x++;
	                }
	                while ($x<=5) {
	                    echo '<img src="http://time-static-shared.s3-website-us-east-1.amazonaws.com/interactives/how_american_are_you/images/white-star-md.png" style="width:35px" />';
	                    $x++;
	                }
	           
				?>


     	</div>
     	<p><?php  echo $name; ?></p>
     	<p><?php  echo $add1; ?></p>
     	<p><?php  echo $add2; ?></p>
     	<p><?php  echo $rooms; ?></p>
     	<p><?php  echo $price; ?></p>


     	<div id= "priceA">
		 
		       
		        <p>
		        	<a class="btn btn-default pull-left" href="<?php echo base_url('index.php/Book/index/'.$des) ?>">Book Now </a>	
		        	
		       </p>
     	</div>
    


    <?php

    }

    

	?>












</body>