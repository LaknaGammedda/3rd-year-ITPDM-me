<!doctype html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
	<link href="../../../../../../../Users/adm/Downloads/Dw B&B/Dw B&B/Booking.css" rel="stylesheet" type="text/css"/>


	<title>Place a Booking</title>
 <link rel="stylesheet" href="<?php echo base_url('assets/log.css');?>"> 
</head>

<body style="font-family:'Times New Roman', Times, serif;
font-weight:900;
font-size:15px;
color:#006;
background-color:#e6e6ff">

<header id="header">
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
<br>
<br>
<br>
<br>

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



<!-- <div id="container">
 
 <div id="body">
 <p></p>
 <p><em>&nbsp;&nbsp;Hotels near Kandy , Srilanka</em></p>



   <div id="A">
     
     //
     
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
 -->



 <table class="table">
    <!-- <thead>
      <tr>
        <th></th>
        <th></th>
        <th>Email</th>
      </tr>
    </thead> -->
    <tbody>





     <?php
     foreach ($dat as $object) {
      $yes="YES";
      $y=$object->flag;
      if (strcmp($yes,$y)==0) {


        $des= $object->Destination.'<br/>';
        $a=$object->ImagePath;
        $name=$object->LodgeName;
        $ad1=$object->Address1;
        $ad2=$object->Address2;
        $id=$object->Rid;
        $price=$object->Price;
        ?>


        <tr>
         <td><div id="picA"><img src="<?php echo base_url($a);?>" width="260" height="125"></div></td>
         <td><div id="desA"><h3><?php echo $des; ?></h3>

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
       </div></td>
       <td><div id="desA"><h3><?php echo $name; ?></h3></div>
        <p><?php echo $ad1;?></p>
        <p><?php echo $ad2;?></p>

      </td>

      <td>
        <div id= "priceA">
         &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<?php echo $price; ?>
         <p></p>

         <p>
          <a class="btn btn-default pull-left" href="<?php echo base_url('index.php/Book/index/'.$id) ?>">Book Now </a>	
          <a class="btn btn-default pull-left" href="<?php echo base_url('index.php/Book/viewAll/'.$id) ?>">View all </a>
        </p>
      </div>
    </td>
  </tr>
  <?php
}
}
?>
</tbody>


<table class="table">

 <tbody>
  <?php
  foreach ($ava as $object1) {
    $yes="YES";
    $y=$object1->flag;
    if (strcmp($yes,$y)==0) {
     $des= $object1->Destination;
     $a=$object1->ImagePath;
     $id=$object1->Rid;
     $ad1=$object1->Address1;
     $ad2=$object1->Address2;
     $name=$object1->LodgeName;
     $price=$object1->Price;
     ?>
     <tr>
      <td>
       <div id="picA"><img src="<?php echo base_url($a);?>" width="260" height="125"></div>
     </td>
     <td>
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
   </td>
   <td><div id="desA"><h3><?php echo $name; ?></h3></div>
     <p><?php echo $ad1;?></p>
     <p><?php echo $ad2;?></p>
   </td>
   <td>
     <div id= "priceA">
      &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; <?php echo $price; ?>
      <p>

      </p>

      <p>
       <a style="background-color:#005c99;color:#FFF" class="btn btn-default pull-left" href="<?php echo base_url('index.php/Book/index/'.$id) ?>">Book Now </a>	
       <a style="background-color:#005c99;color:#FFF" class="btn btn-default pull-left" href="<?php echo base_url('index.php/Book/viewAll/'.$id) ?>">View all </a>
     </p>
   </div>

 </td>
</tr>
<?php
}

}



?>
</tbody>





</div> <!-- Accomodation Catalogue-->
<!-- <footer>End of the page</footer> -->
</div>

</body>
</html>
