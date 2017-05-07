<html >
<head>
<title>Add your Review</title>
<link rel="stylesheet"  href="https://bootswatch.com/flatly/bootstrap.min.css">
</head>



<body>
  
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
</body>
</html>