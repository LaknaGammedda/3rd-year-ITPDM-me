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

		  margin:0;
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
	      
		  padding:10px;
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
	
	  div#back_form
	  {   
	      
		  display:flex;
		  vertical-align: middle;
		  margin-top: auto;
		  justify-content:center;		  
	  }
	 
</style>
<script type="text/javascript"></script>
   
</head>

<body>
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
          <form method="post" action="<?php echo base_url('index.php/Mylogin/login_validation');?>">
                <input type="text" name="username" placeholder="Username"/>
                <span class="text-danger"><?php echo form_error('username'); ?></span>
               
                <input type="password" name="pass" placeholder="Password"/>
              	<span class="text-danger"><?php echo form_error('pass'); ?></span>
	            

                <div class="row" >
               		<div class="col-sm-6">
	                <input style="float:left" type="submit" name="valid" vlaue="Login" />
	                 <?php
	                    echo '<label class="text-danger">'.$this->session->flashdata('error');
	                 ?>

	                
	            	</div>
	            	<div class="col-sm-6" >
	                <input  style="float:right" type="submit" name="SignIn" onClick="location.href='<?php echo base_url('index.php/RegisterC/reg');?>'" value="SignIn" />
	             
	               
               		</div>
                </div>
               
           </form>
             
        
     
        </div>
      
    
        
    </div> 
    </div>
   
</body>
</html>
