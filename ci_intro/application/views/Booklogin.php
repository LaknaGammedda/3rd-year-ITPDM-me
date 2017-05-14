<!doctype html>
<html>
<head>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1">
<title>MyLogin | <?php echo $title; ?></title>

<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">

<!-- jQuery library -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.0/jquery.min.js"></script>

<!-- Latest compiled JavaScript -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
 
<style type="text/css">



      
	  body
	  {
		  font-family:Verdana;
		  font-size:15px;
		  height: 100px;
	  }
	     @media(min-width:340px)
	  {
		  .container{max-width:340px};
	  }

      div#back_glob
	  {
		  background-color:white;
		  border:1px solid #25b2d5;
		  vertical-align: middle;
          width: 300px;
          height: 250px;
		  margin-left: 360px;
		  box-shadow:1px 0px 15px #25b2d5;
	  }
	  input
	  {
		  display:block;
		  margin:10px;	
		  	  
	  }
	  div#back_header
	  {
		background-color:#25b2d5;
		text-align:center;

		font-size:22px;
		font-weight:bold;
		color:white;
		padding:20px;  
	  }
	  input[type=text],input[type=password],
	  {  
	      
		  padding:20px;
		  border-radius:3px;
		  font-size:14px;
		  border:1px solid #ddd;
		  
	  }
	  input[type=submit]
	  {
		  /*;*/
		  /*margin:48px;*/
		  /*margin-left:10px;		  */
		  margin-top:10px;
		  background-color:25b2d5;
		  padding:5px 10px 5px 10 px;
		  border-radius:3px;
		  border:1px solid #319db8;
		  color:white;
		  font-weight:bold;
		 
	  }
	  button
	  {
		  /*;*/
		  /*margin:48px;*/
		  /*margin-left:10px;		  */
		  margin-top:10px;
		  background-color:25b2d5;
		  padding:5px 10px 5px 10 px;
		  border-radius:3px;
		  border:1px solid #319db8;
		  color:white;
		  font-weight:bold;
		 
	  }
	
	  div#back_form
	  {   
	      
		  display:flex;
		  vertical-align: middle;
		  margin-top: auto;
		  justify-content:center;

	  }


  
</style>
<link rel="stylesheet" href="<?php echo base_url('assets/log.css');?>">	
<script type="text/javascript"></script>
   
</head>

<body>

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

  <div class="container">
  	<br></br>
  	<br></br>
  	<br></br>
  	<br></br>
  	<br></br>
 <div id="back_glob">
    
        <div id="back_header">
           LOGIN

        </div>
       
        
        <div id="back_form" >
          <form method="post" action="<?php echo base_url('index.php/Book_login/login_validation');?>">
                <input style="margin-top:50px; height:25px;-moz-border-radius:5px;
	-webkit-border-radius:5px" type="text" name="username" placeholder="Username"/>
                <span class="text-danger"><?php echo form_error('username'); ?></span>
               
                <input style="height:25px; -moz-border-radius:6px;
	-webkit-border-radius:5px" type="password" name="pass" placeholder="Password"/>
              	<span class="text-danger"><?php echo form_error('pass'); ?></span>
	            

                <div class="row" >
               		<div class="col-sm-6">
	                <input style="float:left" type="submit" name="valid" vlaue="Login" />
	                 <?php
	                    echo '<label class="text-danger">'.$this->session->flashdata('error');
	                 ?>

	                
	            	</div>
	            	<div class="col-sm-6" >
	            	<button style="float:right" onClick="window.location.href = '<?php echo base_url();?>index.php/RegisterC';return false;">Register</button>
	                
	             
	               
               		</div>
                </div>
               
           </form>
             
        
     
        </div>
      
    
        
    </div> 
    </div>
    <br>
    <br>
    <br> <br>
    <br>
    <br> <br>
    <br>
    <br> <br>
    <br>
    <br> <br>
    <br>
    <br> <br>
    <br>
    <br>
     <br>
    <br>
   <div class="container" id="footer" style="max-width:100%">
      <p>CopyRight2017 Bed and Breakfast private limited.</p>
     </div>
   
</body>
</html>
