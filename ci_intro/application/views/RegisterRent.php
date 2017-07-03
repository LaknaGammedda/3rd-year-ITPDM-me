<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Make Rent out</title>
<link rel="stylesheet"  href="https://bootswatch.com/flatly/bootstrap.min.css">

<link rel="stylesheet" href="<?php echo base_url('assets/log.css');?>"> 
<link rel="stylesheet" href="<?php echo base_url('assets/reg.css');?>"> 
<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.4/jquery.min.js"></script>

</head>

<body style="background-color:#e6e6ff">


  <header id="header">
      <div class="container">
      <div id="logo"> <img src="<?php echo base_url('Image/PicsArt_03-21-08.30.27.jpg');?>" width="60" height="60"></div>
        <h1 style="float:left">
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
              <a href="<?php echo base_url('index.php/Mylogin/login');?>">Login</a>
            </li>
          </ul>
        </nav>
      </div>
    </header>
    <br>
    <br>
    <br>
    <br>
  <div style="margin-top:30px"class="container">
    <h2 style="font-size:16px;font-weight:bold;font-family:Verdana;text-align:center;margin-bottom:1px"><?= $title ?></h2>
    <?php echo validation_errors(); ?>

<?php echo  form_open_multipart('RegisterCntrol/create'); ?>

  <!--<div class="form-group">
    <label>Renter Name :</label>
    <input type="text" class="form-control" name="name"/>
  </div>-->
  <div class="form-group" >
    <label style="margin-top:15px">Address Line 1:</label>
    <input style="width:300px;height:35px"type="text" class="form-control" name="address1"/>
  </div>
  <div class="form-group">
    <label>Address Line 2:</label>
    <input style="width:300px;height:35px" type="text" class="form-control" name="address2"/>
  </div>
  <div class="form-group">
    <label>City:</label>
    <input style="width:300px;height:35px" type="text" class="form-control" name="city"/>
  </div>
  <div class="form-group">
    <label>Price:</label>
    <input style="width:300px;height:35px"type="text" class="form-control" name="price"/>
  </div>
<div class="form-group">
  <label>Lodge Name :</label>
  <input style="width:300px;height:35px"type="text" class="form-control" name="lname"/>
</div>
    <div class="form-group">
      <label>Number Of Rooms</label>
      
        <select style="width:300px;height:40px" class="form-control" name="select">
          <option>Number Of Rooms</option>
          <option>1</option>
          <option>2</option>
          <option>3</option>
          <option>4</option>
          <option>5</option>
        </select>
        
       
      
    </div>
<p> </p>
 <div class="form-group">
  <label>Description :</label>
  <textarea rows="4" colums ="30" type="text" class="form-control" name="des"/></textarea>
</div>
<!-- <label>Images :</label>

    

 <br>  -->
<p> </p>
  <button style="width:300px;background-color: #005c99" type="submit" class="btn btn-default" name="btnAdd">Next</button> 
  
</form>
<form id="uploadimage" enctype='multipart/form-data'>
              
              <div class="form-group">
                <input type="file" name="file" id="file">
              </div>
              <div class="form-group">
                <input type="button" name="" class="btn btn-primary" onclick="uploadfile()" value="upload">
              </div>
</form>



</div>
<br><br><br><br><br><br>
  <div class="container" id="footer" style="max-width:100%;height:43px;margin-bottom:none;">
      <p>CopyRight2017 Bed and Breakfast private limited.</p>
     </div>
</body>
<script>
function uploadfile(){

      // Function to preview image after validation

      $.ajax({
  url: "<?php echo base_url('index.php/fileupload/uploadPicture'); ?>", // Url to which the request is send
  type: "POST",             // Type of request to be send, called as method
  data: new FormData(document.getElementById("uploadimage")), // Data sent to server, a set of key/value pairs (i.e. form fields and values)
  contentType: false,       // The content type used when sending data to the server.
  cache: false,             // To unable request pages to be cached
  processData:false,        // To send DOMDocument or non processed data file it is set to false
  success: function(data)   // A function to be called if request succeeds
  {
    alert(data);
    
  },error:function(xhr, textStatus, errorThrown){
    alert("error");

  }
});
    }


</script>
</html>
