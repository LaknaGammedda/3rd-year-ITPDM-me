<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Untitled Document</title>
<link rel="stylesheet" href="<?php echo base_url('assets/log.css');?>">	
<style>
input[type="Date"]
{
	width:300px;
	height:35px;
	margin-top:5px;
	border-radius:5px;
    -moz-border-radius:7px;
	-webkit-border-radius:7px;
}

input[type="Text"]
{
	width:300px;
	height:35px;
	margin-top:5px;
	
	border-radius:5px;
    -moz-border-radius:7px;
	-webkit-border-radius:7px;
}
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
<div style="text-align:center;">
   
</div>
<form 
style="margin-top:120px;border:1px solid #ccc;
       box-shadow:0 1px 25px;width:450px;margin-left:400px;background-color:#FFF"
       id="form1" name="form1" method="post" action="<?php echo base_url('index.php/Cbook/mybook');?>">
        <?php 
       // echo $des;?>
  <table width="281" border="0" align="center">

    <tr>
      <p style="text-align:center;font-family:'Lucida Calligraphy';font-size:18px;font-weight:bold;color:#009">Reservation</p>
      <h2 style="text-align:center;font-family:'Lucida Calligraphy';font-size:18px;font-weight:bold;color:#009">User name: <?php echo $user[0]->firstName."  ".$user[0]->lastName?></h2> 
      <p style="text-align:center;font-family:'Lucida Calligraphy';font-size:18px;font-weight:bold;color:#009">Email: <?php echo $user[0]->Email?></p>
      
      <td width="105"><p style="font-family:'Times New Roman', Times, serif;font-size:14px;font-weight:bold;color:#009">Name of Lodge</p></td>
      <td width="170"><label for="LisName"></label>
     
      <input style="margin-top:8px" value="<?php echo $res[0]->LodgeName;?>" type="text" name="name1" id="txtNo" /></td>
      <input style="margin-top:8px" value="<?php echo $des;?>" type="hidden" name="name" id="txtNo" /></td>

    </tr>

    <tr>
      <td><p style="font-family:'Times New Roman', Times, serif;font-size:14px;font-weight:bold;color:#009">Check In</p></td>
      <td><label for="txtIn"></label>
      <input
	 type="Date" name="txtIn" id="txtIn" /></td>
    </tr>

    <tr>
      <td><p style="font-family:'Times New Roman', Times, serif;font-size:14px;font-weight:bold;color:#009">Check Out</p></td>
      <td><label for="txtOut"></label>
      <input type="Date" name="txtOut" id="txtOut" /></td>
    </tr>

   

    <tr>
      <td><p style="font-family:'Times New Roman', Times, serif;font-size:14px;font-weight:bold;color:#009">Telephone</p></td>
      <td><label for="txtNo"></label>
      <input style="margin-top:8px" type="text" name="teleNo" id="txtNo" /></td>
    </tr>



    <tr>
      <td></td>
      <td>
      <input style="width:120px;float:left;-webkit-border-radius:3px;height:35px;margin-bottom:20px;background-color: #005c99;color:#FFF" 
             type="submit" name="btnRes" id="btnRes" value="Reserve"/>
            <input style="width:120px;float:right;-webkit-border-radius:3px;height:35px;margin-bottom:20px;background-color: #005c99;color:#FFF" 
             type="submit" name="btnRes" id="btnRes" value="View All"
             onClick="window.location.href = '<?php echo base_url();?>index.php/Lists/user_reservation_list';return false;"/></td>
      
     
            
     
    </tr>

    
  </table>
</form>

<br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br />
 <div class="container" id="footer" style="max-width:100%;height:54px;margin-bottom:none">
      <p style="padding-top:20px">CopyRight2017 Bed and Breakfast private limited.</p>
 </div>

</body>
</html>
