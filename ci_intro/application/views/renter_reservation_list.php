<!doctype html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
  
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  
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
      $des= $object->Destination.'<br/>';
      $a=$object->ImagePath;
      $name=$object->LodgeName;
      $ad1=$object->Address1;
      $ad2=$object->Address2;
      $id=$object->Rid;
      $price=$object->Price;
      $c_in=$object->CheckIn;
      $c_out=$object->CheckOut;
      $Did=$object->Did;
      $user_name=$object->username;
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
        <td><div id="desA"><h3>Dates</h3></div>
          <p><?php echo "CheckIn  : ".$c_in;?></p>
          <p><?php echo "CheckOut : ".$c_out;?></p>

        </td>

        <td>
          <div id= "priceA">
            &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<?php echo $price; ?>
            <p></p>

            <p>
             
              <a style="background-color:#005c99;color:#FFF" class="btn btn-default pull-left" href="<?php echo base_url('index.php/Book/viewAll/'.$id) ?>">View all </a>
            </p>
            <ul> 
              <li onclick="view_user_details('<?php echo $user_name; ?>')"><a href="#">Reserved by</a></li>
            </ul>
             
          </div>
        </td>
      </tr>
      <?php

    }
    ?>
  </tbody>


  





  </div> <!-- Accomodation Catalogue-->
  <!-- <footer>End of the page</footer> -->
<!--view all  modal-->
    <div id="view_all" class="modal fade" role="dialog">
      <div class="modal-dialog">

        <!-- Modal content-->
        <div class="modal-content">
          <div class="modal-header">
            <button type="button" class="close" data-dismiss="modal">&times;</button>
            <h4 class="modal-title">All details</h4>
          </div>
          <!--modal body-->
          <div class="modal-body" id="view_all_body">
                  
                
          </div>
          <!--end of modal body-->
          <div class="modal-footer">
            <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
          </div>
        </div>

      </div>
    </div>

  
</div>

</body>
<script>
  function view_user_details(cp){
  $compno=cp;
  

  $.ajax({
    type: "POST",
    url: "<?php echo base_url('index.php/Lists/view_user_details'); ?>",
    data: "cpno="+cp,
    success: function(data) {
          //alert("added to database");
          $('#view_all_body').html(data);
          $('#view_all').modal('show');

          
          
          

      },
      error: function() {
        alert("something went wrong");
      }
    });


}

</script>
</html>
