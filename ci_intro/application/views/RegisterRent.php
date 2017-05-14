<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Make Rent out</title>
<link rel="stylesheet"  href="https://bootswatch.com/flatly/bootstrap.min.css">
</head>

<body>
  <div class="container">
    <h2><?= $title ?></h2>
    <?php echo validation_errors(); ?>
<?php echo form_open('RegisterCntrol/create'); ?>
  <!--<div class="form-group">
    <label>Renter Name :</label>
    <input type="text" class="form-control" name="name"/>
  </div>-->
  <div class="form-group">
    <label>Address Line 1:</label>
    <input type="text" class="form-control" name="address1"/>
  </div>
  <div class="form-group">
    <label>Address Line 2:</label>
    <input type="text" class="form-control" name="address2"/>
  </div>
  <div class="form-group">
    <label>City:</label>
    <input type="text" class="form-control" name="city"/>
  </div>
  <div class="form-group">
    <label>Price:</label>
    <input type="text" class="form-control" name="price"/>
  </div>
<div class="form-group">
  <label>Lodge Name :</label>
  <input type="text" class="form-control" name="lname"/>
</div>
    <div class="form-group">
      <label>Number Of Rooms</label>
      
        <select class="form-control" name="select">
          <option>Number Of Rooms</option>
          <option>1</option>
          <option>2</option>
          <option>3</option>
          <option>4</option>
          <option>5</option>
        </select>
        
       
      
    </div>
<p> </p>
 
<label>Images :</label>
<?php echo form_upload('pic');?>
 <br> 
<p> </p>
  <button type="submit" class="btn btn-default" name="btnAdd">Add</button> 
  
</form>
</div>
</body>
</html>
