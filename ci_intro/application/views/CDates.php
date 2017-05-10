<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Untitled Document</title>
</head>

<body>
<form id="form1" name="form1" method="post" action="<?php echo base_url('index.php/CheckD/compareDate');?>">
  <p>
    <label for="CheckIn"></label>
    <input type="Date" name="CheckIn" id="CheckIn" />
    <label for="opt"></label>
    <select name="opt" id="opt">
      <option value="Nuwaraeliya">Nuwaraeliya</option>
      <option value="Colombo">Colombo</option>
    </select>
  </p>
  <p>
    <label for="CheckOut"></label>
    <input type="Date" name="CheckOut" id="CheckOut" />
  </p>
  <p>
    <input type="submit" name="Check" id="Check" value="CDates" />
  </p>
</form>

   <div id="me">
    <?php
    foreach ($dat as $object) {
      echo $object->Destination.'<br/>';
    }
    echo '<br/><br/><br/>';
    foreach ($ava as $object) {
      echo $object->Availability.'<br/>';
    }
    ?>
  </div>
</body>
</html>