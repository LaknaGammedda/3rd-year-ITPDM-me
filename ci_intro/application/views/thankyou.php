<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Untitled Document</title>
<link rel="stylesheet" href="<?php echo base_url('assets/log.css');?>">	

</style>
</head>

<body style="font-family:Verdana;
		  font-size:15px;
		  background-color:#e6e6ff;
">

<header style="height:68px"id="header">
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

<form 
style="margin-top:120px;border:1px solid #ccc;
       box-shadow:0 1px 25px;width:450px;margin-left:400px;background-color:#FFF"
       id="form1" name="form1" method="post" action="<?php echo base_url('index.php/PaymentsCon/Pay');?>">
       <h3 >RESERVATION SUCCESFULLY COMPLETED</h3>
        <h2>THANK YOU FOR USING B&B</h2>
        <input style="width:120px;float:left;-webkit-border-radius:3px;height:35px;margin-bottom:20px; text-align:center;background-color: #005c99;color:#FFF" 
             type="submit" name="btnRes" id="btnRes" value="ADD PAYMENT"/>


</form>

<br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br />

<br /><br /><br /><br /><br /><br /><br /><br />
 <div class="container" id="footer" style="max-width:100%;height:54px;margin-bottom:none">
      <p style="padding-top:20px">CopyRight2017 Bed and Breakfast private limited.</p>
 </div>

</body>
</html>
