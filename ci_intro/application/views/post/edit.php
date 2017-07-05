<html >
<head>
<title>Edit your Review</title>
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
    <br>
    <br>
    <br>
    <br>
  
<div class="container">
  <h2><?= $title ?></h2>
  
  <?php echo validation_errors(); ?>

<?php echo form_open('posts/update'); ?>
<input type="hidden" name="id" value="<?php echo $post['id']; ?>">
  <div class="form-group">
  	<label>Rate Your Stay  </label>
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
    <input type="text" class="form-control" name="title" placeholder="Add Title" value="<?php echo $post['title']; ?>" />
  </div>
  <div class="form-group">
  	<label>Your Review  </label>
    <textarea class="form-control" name="body" placeholder="Add Your Comment"><?php echo $post['comment']; ?></textarea>
  </div>
  <button type="submit" class="btn btn-default">ADD Comment</button>
  </form>
 
</div>
<br><br><br><br><br><br><br><br><br><br><br>
<div class="container" id="footer" style="max-width:100%;height:54px;margin-bottom:none">
      <p style="margin-top:17px">CopyRight2017 Bed and Breakfast private limited.</p>
     </div>
</body>
</html>