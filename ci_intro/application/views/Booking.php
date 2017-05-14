<!doctype html>
<html lang="en">
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
  <link href="../../../../../../../Users/adm/Downloads/Dw B&B/Dw B&B/Booking.css" rel="stylesheet" type="text/css"/>
  <style type="text/css">
  #container {
	height: 768px;
	width: 1024px;
	margin-left:auto;
	margin-right:auto;
	border:1px solid;
	border-color:#000;
    }
  #logo {
	float: left;
	height: 50px;
	width: 75px;
}
#A {
	height: 150px;
	width: 964px;
	margin-top: 20px;
	margin-bottom: 5px;
	margin-left: auto;
	margin-right: auto;
	border: 1px solid;
	border-color: #000;
	padding-top: 12px;
	padding-bottom: 10px;
	box-shadow: inset 4px 1px 2px 3px #999;
}
#B {
	height: 150px;
	width: 964px;
	margin-top: 20px;
	margin-bottom: 5px;
	margin-left: auto;
	margin-right: auto;
	border: 1px solid;
	border-color: #000;
	padding-top: 12px;
	padding-bottom: 10px;
	box-shadow: inset 4px 1px 2px 3px #999;
}
#C {
	height: 150px;
	width: 964px;
	margin-top: 20px;
	margin-bottom: 5px;
	margin-left: auto;
	margin-right: auto;
	border: 1px solid;
	border-color: #000;
	padding-top: 12px;
	padding-bottom: 10px;
	box-shadow: inset 4px 1px 2px 3px #999;
}
#D {
	height: 150px;
	width: 964px;
	margin-top: 20px;
	margin-bottom: 5px;
	margin-left: auto;
	margin-right: auto;
	border: 1px solid;
	border-color: #000;
	padding-top: 12px;
	padding-bottom: 10px;
	box-shadow: inset 4px 1px 2px 3px #999;
}
  #titleBar {
	height: 50px;
	width: auto;
}
   #picA {
	float: left;
	height: auto;
	width: 30%;
	padding-left:10px;
}
   #desA {
	height: auto;
	width: auto;
	float: left;
	color: #036;
}
 #priceA {
	height: 110px;
	width: 20%;
	float: right;
	padding-left: 35px;
	padding-top: 25px;
	padding-bottom: 20px;
	border-left-width: inherit;
	border-left-color: #000;
	border-left-style: solid;
	margin-top: 6px;
	color: #036;
}
  #BtnA {
	font-size: 17px;
	font-weight: bold;
	width: 125px;
	font-family: "Times New Roman", Times, serif;
	margin-right: 10px;
	background-color: #FFF;
	border-color: #666;
	border: 1px solid;
	border-style: solid;
	border-radius: 4px;
	height: 30px;
	box-shadow: 2px 1px 1px 1px #06F;
	padding: 2.5px;
	color: #003;
}
 
 

  #container #body p em {
	font-family: "Times New Roman", Times, serif;
	font-size: 20px;
	font-weight: 900;
	color: #069;
}
  </style>
<title>Place a Booking</title>
</head>

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
?>



<div id="container">
 
 <div id="body">
 <p></p>
 <p><em>&nbsp;&nbsp;Hotels near Kandy , Srilanka</em></p>



   <div id="A">
     
     <div id="picA"><img src="<?php echo base_url('Image/images (2).jpg');?>" width="260" height="125"></div>
     
     <div id="desA"><h3>Kandalama </h3>
      
     </div>
     <div id= "priceA">
        &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;LKR 10 800
        <p></p>
        
        <p>
         <input type="button" id="BtnA" value=" Book Now " >
       </p>
     </div>
   </div>








  
  
    <?php
    foreach ($dat as $object) {
    	$des= $object->Destination.'<br/>';
      	$a=$object->ImagePath;
      	$name=$object->LodgeName;
      	$id=$object->Rid;
    	?>
    	 
   
    	<div id="picA"><img src="<?php echo base_url($a);?>" width="260" height="125"></div>
     	<div id="desA"><h3><?php echo $des; ?></h3>
     		<?php
        	$id=$object->Rid;
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

     	<div id= "priceA">
		        &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;LKR 10 800
		        <p></p>
		        
		        <p>
		        	<a class="btn btn-default pull-left" href="<?php echo base_url('index.php/Book/index/'.$des) ?>">Book Now </a>	
		         	<a class="btn btn-default pull-left" href="<?php echo base_url('index.php/Book/viewAll/'.$id) ?>">View all </a>
		       </p>
     	</div>
    <?php

    }
	?>
	

	
	<?php
    foreach ($ava as $object1) {
    	$des= $object1->Destination;
      	$a=$object1->ImagePath;
      	$id=$object1->Rid;
      	$name=$object1->LodgeName;
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

     	<div id= "priceA">
		        &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;LKR 10 800
		        <p>
		        	
		        </p>
		        
		        <p>
		        	<a class="btn btn-default pull-left" href="<?php echo base_url('index.php/Book/index/'.$des) ?>">Book Now </a>	
		        	<a class="btn btn-default pull-left" href="<?php echo base_url('index.php/Book/viewAll/'.$id) ?>">View all </a>
		       </p>
     	</div>
    


    <?php

    }

    

	?>



    
  
     
 </div> <!-- Accomodation Catalogue-->
 <footer>End of the page</footer>
 </div>

</body>
</html>
