<html >
<head>
<title>Add your Review</title>
<link rel="stylesheet"  href="https://bootswatch.com/flatly/bootstrap.min.css">
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
    <br><br><br>
  
<div class="container">
  <h4 style="margin-top:100px;font-weight:bold;font-family:'Lucida Calligraphy';text-align:center"><?= $title ?></h4>
  
  <?php echo validation_errors(); ?>

<?php echo form_open('posts/add'); ?>
  <div class="form-group">
  	<label>  </label>
  </div>
   <!--<div class="form-group">
  	<label>Full name  </label>
    <input type="text" class="form-control" name="name" placeholder="Type your name" />
  </div>
  <div class="form-group">
  	<label>Date of arrival  </label>
    <input type="text" class="form-control" name="date"  />
  </div> -->
  <div class="form-group">
  	<label>Title your review  </label>
    <input type="text" class="form-control" name="title" placeholder="Add Title" />
  </div>
  <div class="form-group">
  	<label>Your Review  </label>
    <textarea class="form-control" name="body" placeholder="Add Your Comment"></textarea>
  </div>
  <button style="background-color:#005c99;color:#FFF" type="submit" class="btn btn-default">ADD Comment</button>
  </form>
 
</div>
<br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br>
<div class="container" id="footer" style="max-width:100%;height:48px;margin-bottom:none">
      <p>CopyRight2017 Bed and Breakfast private limited.</p>
     </div>
</body>
</html>