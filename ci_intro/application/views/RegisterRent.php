<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Make Rent out</title>
<link rel="stylesheet"  href="https://bootswatch.com/flatly/bootstrap.min.css">
</head>

<body>
  <div class="container">
<form>
  <div class="form-group">
    <label>Renter Name :</label>
    <input type="text" class="form-control" name="name"/>
  </div>
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
  <label>Facilities :</label>
  <textarea class="form-control" rows="5" name="facility"></textarea>
</div>
<div class="dropdown">
  <label for="NumberOfRooms">Number Of Rooms:</label>
  <button class="btn btn-primary dropdown-toggle" type="button" data-toggle="dropdown">0
  <span class="caret"></span></button>
  <ul class="dropdown-menu">
    <li><a href="#">1</a></li>
    <li><a href="#">2</a></li>
    <li><a href="#">3</a></li>
    <li><a href="#">4</a></li>
  </ul>
</div>
<p> </p>
<div class="form-group"> 
<label>Pictures :</label>
<div class="btn btn-default image-preview-input">
     <!--<span class="glyphicon glyphicon-folder-open"></span>-->
     <!--<span class="image-preview-input-title">Browse</span>-->
     <input type="file" accept="image/png, image/jpeg, image/gif" name="input-file-preview"/> 
</div>
</div> <br> 
<p> </p>
  <button type="submit" class="btn btn-default" name="btnAdd">Add</button> &nbsp;&nbsp;&nbsp;
  <button type="submit" class="btn btn-default" name="btnUpdate">Update</button>
</form>
</div>
</body>
</html>
