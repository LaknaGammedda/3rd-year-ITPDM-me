<!DOCTYPE HTML>
<html>
<head>
    <meta charset="UTF-8">
    <title>
      Responsive Header Demo
    </title>
     <link rel="stylesheet" href="<?php echo base_url('assets/styleNew.css');?>">

    
     <meta name="viewport" content="width=device-width, initial-scale=1">
   
      <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
      
      <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
       <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
         <style>
.mySlides {display:none;}
</style>
  </head>
  <body>
  <div>
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
    
    
    





 <div class="w3-content w3-section" style="max-width:100%;max-height:-5%">
  <img class="mySlides" src="<?php echo base_url('Image/img1.jpg');?>" style="width:100%">
  <img class="mySlides" src="<?php echo base_url('Image/img2.jpg');?>" style="width:100%">
  <img class="mySlides" src="<?php echo base_url('Image/img3.jpg');?>" style="width:100%">
  </div>

<script>
var myIndex = 0;
carousel();

function carousel() {
    var i;
    var x = document.getElementsByClassName("mySlides");
    for (i = 0; i < x.length; i++) {
       x[i].style.display = "none";  
    }
    myIndex++;
    if (myIndex > x.length) {myIndex = 1}    
    x[myIndex-1].style.display = "block";  
    setTimeout(carousel, 2000); // Change image every 2 seconds
}
</script>
<br>

 <form name="form1" method="post" action="<?php echo base_url('index.php/CheckD/compareDate');?>">
    <div class="container" id="divmaintab">

        <div class="row" >
        
            <div class="col-md-3" align="center" >  
             
                 <label>Check In</label>
                 <br>
                 <input type="Date" name="txtDate" id="txtDate">   
             
            </div>
            

            <div class="col-md-3" align="center">
            
                <label>Check Out</label>
                <br>
                <input type="Date" name="txtCheckout" id="txtCheckout">
            
            </div>
            
          
           
            <div class="col-md-3" align="center">
           
               <label>Destination</label>
               <br>
              
                 <label for="opt"></label>
                 <select name="opt" id="opt" style="width:200px;  -moz-border-radius:7px;
	-webkit-border-radius:5px;height:25px">
                   <option value="Colombo">Colombo</option>
                   <option value="Kandy">Kandy</option>
                   <option value="Nuwara Eliya">Nuwara Eliya</option>
                   <option value="Mirissa">Mirissa</option>
                   <option value="Sigiriya">Sigiriya</option>
                   <option value="Negombo">Negombo</option>
                   <option value="Galle">Galle</option>
                   <option value="Yala">Yala</option>
                   <option value="Unawatuna">Unawatuna</option>
                 </select>
               
               
           
            </div>

            <div class="col-md-3" align="center">   
                <input type="submit" class="btn btn-primary btn-sm" name="btnSearch" id="btnSearch" value="Submit" />
            </div>
    
        </div>
    </div>

  </form>
  
    
    <br>
    <br>
    <br>
    <br>

 
    
    
    <div class="container ">
    <div id="imageHeader" style="background:white">
    
    <div class="row"> <!-- Begining of the first row -->
    
    <div class="col-md-4" align="center">
    <div id="image">
       <img src="<?php echo base_url('Image/galle_face.jpg');?>" width="200" height="200" style="-moz-border-radius:8px;-webkit-border-radius:8px">
        <div id="desc">
           <p>Colombo</p>
        </div> 
     </div>
     </div>
     
     <div class="col-md-4" align="center">
     <div id="image">
      <img src="<?php echo base_url('Image/sri-lanka-kandy-buddha-temple-sri-dalada-maligawa-temple-of-the-tooth-2.jpg');?>" width="200" height="200" style="-moz-border-radius:8px;
	-webkit-border-radius:8px">
        <div id="desc">
            <p>Kandy</p>
        </div>       
     </div>
     </div>
     
     <div class="col-md-4" align="center">
     <div id="image">
      <img src="<?php echo base_url('Image/lake.jpg');?>" width="200" height="200" style="-moz-border-radius:8px;
	-webkit-border-radius:8px">
        <div id="desc">
           <p>Nuwara Eliya</p>
        </div>
     </div>
     </div>
     </div> <!-- End of the first row -->
     
     <div class="row"> <!-- Beigining of the second row -->
     
     <div class="col-md-4" align="center">
     <div id="image">
     <img src="<?php echo base_url('Image/1109-1062.jpg');?>" width="200" height="200" style="-moz-border-radius:8px;
	-webkit-border-radius:8px">   
       <div id="desc">
           <p>Mirissa</p>
        </div>
     </div>
     </div>
     
     <div class="col-md-4" align="center">   
     <div id="image">
     <img src="<?php echo base_url('Image/sigiriya-sri-lanka.jpg');?>" width="200" height="200" style="-moz-border-radius:8px;
	-webkit-border-radius:8px"> 
        <div id="desc">
          <p>Sigiriya</p>
        </div>
     </div>
     </div>
     
     <div class="col-md-4" align="center">
     <div id="image">
      <img src="<?php echo base_url('Image/negambo-beach.jpg');?>" width="200" height="200" style="-moz-border-radius:8px;
	-webkit-border-radius:8px">
        <div id="desc">
           <p>Negombo</p>
        </div>        
     </div>
     </div>
     
     </div> <!-- End of the second row --> 
      
     <div class="row"><!-- Beigining of the third row -->
     
     <div class="col-md-4" align="center">
     <div id="image">
     <img  src="<?php echo base_url('Image/image-slider-3.jpg');?>" width="200" height="200" style="-moz-border-radius:8px;
	-webkit-border-radius:8px"> 
       <div id="desc">
          <p style="margin-bottom:70px">Galle</p>          
       </div>
     </div>
     </div> <!-- end of the column1--> 
     
     <div class="col-md-4" align="center">
     <div id="image">
     <img  src="<?php echo base_url('Image/yala-national-park-sri-lanka-022.jpg');?>" width="200" height="200" style="-moz-border-radius:8px;
	-webkit-border-radius:8px">
        <div id="desc">
           <p style="margin-bottom:70px">Yala</p>
        </div>
     </div>
     </div><!-- end of the column2--> 
     
     <div class="col-md-4" align="center">
     <div id="image">
     <img src="<?php echo base_url('Image/slider9.jpg');?>" width="200" height="200" style="-moz-border-radius:8px;
	-webkit-border-radius:8px">
        <div id="desc">
          <p style="margin-bottom:70px">Unawatuna</p>
        </div>
     </div>
     </div><!-- end of the column3--> 
     
     </div><!-- End of the third row --> 
     
     </div>
     </div>
     <br>
     <br>
   
     
     
     <div class="container" id="footer" style="max-width:100%">
      <p>CopyRight2017 Bed and Breakfast private limited.</p>
     </div>
  </div> 

  </body>
</html>
