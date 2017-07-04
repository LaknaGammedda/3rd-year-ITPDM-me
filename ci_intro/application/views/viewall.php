
<html lang="en">
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
	

	<title></title>
	  <link rel="stylesheet" href="<?php echo base_url('assets/log.css');?>"> 
</head>
<body style="font-family:'Times New Roman', Times, serif;
   font-weight:900;
   font-size:15px;
   color:#006;
      background-color:#e6e6ff">

	  <header style="margin-top:-20px;margin-left:-20px"id="header">
      <div class="container">
      <div id="logo"> <img src="<?php echo base_url('Image/PicsArt_03-21-08.30.27.jpg');?>" width="60" height="60"></div>
        <h1>
          &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;BED AND BREAKFAST
        </h1>
        <nav id="nav">
          <ul>
            <li>
              <a href="#">Home</a>
            </li>
            <li>
              <a href="#">About</a>
            </li>
            <li>
              <a href="#">Contact</a>
            </li>
            <li>
              <a href="#">Facilities</a>
            </li>
            <li>
              <a href="#">Login</a>
            </li>
          </ul>
        </nav>
      </div>
    </header>
    <br><br><br>
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
      	$description=$object1->description;

    	?>
    	<div id="picA"><img style="margin-left:-20px" src="<?php echo base_url($a);?>" width="103%" height="500px"></div>
    	<div class="row">
    		<div class="col-md-8">

		     	<div id="desA"><h3 ><?php echo $name.' '.$des; ?></h3>
		     		
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
		    </div>
		    
     	</div>
     	<p><?php  echo $add1; ?></p>
     	<p><?php  echo $add2; ?></p>
     	<p><?php  echo $rooms; ?></p>
     	<p><?php  echo $price; ?></p>
		<p><?php  echo $description; ?></p>


     	<div id= "priceA">
		        <p>
		        	<a style="background-color:#005c99;color:#FFF"  class="btn btn-default pull-left" href="<?php echo base_url('index.php/Book/index/'.$id) ?>">Book Now </a>	
		        	
		       </p>
     	</div>
    


                                                <?php

                                                }

    

	                                             ?>





 


</body>
</html>