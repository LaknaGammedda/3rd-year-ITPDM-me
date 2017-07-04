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
  <div style="margin-top:30px"class="container">
    <h2 style="font-size:16px;font-weight:bold;font-family:Verdana;text-align:center;margin-bottom:1px">One more step ad you are finished</h2>
    <h2 style="font-size:16px;font-weight:bold;font-family:Verdana;text-align:center;margin-bottom:1px">Add new image</h2>
    


<form id="uploadimage" enctype='multipart/form-data'>
              
              <div class="form-group">
                <input type="file" name="file" id="file">
              </div>
              <div class="form-group">
                <input style="width:110px;float:left;background-color: #005c99" type="button"  name="" class="btn btn-default" onclick="uploadfile()" value="upload">
                <button style="width:110px;float:right;background-color: #005c99" type="submit" class="btn btn-default" name="btnAdd"  onClick="window.location.href = '<?php echo base_url();?>index.php/Renterlists/lists';return false;" >View All</button> 
  
              </div>
</form>



</div>
<br><br><br><br><br><br>
  <div class="container" id="footer" style="max-width:100%;height:45px;margin-top:280px;">
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
