<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Untitled Document</title>
</head>

<body>


   <div id="me">
    <?php
    foreach ($dat as $object) {
      echo $object->Destination.'<br/>';
      $a=$object->ImagePath;
      ?>
      <img src="<?php echo base_url($a);?>">

      <?php

    }

    echo '<br/><br/><br/>';
   
     foreach ($ava as $object1) {
       echo $object1->Availability.'<br/>';
       echo $object1->Destination.'<br/>';
        $a=$object1->ImagePath;
      ?>
       <img src="<?php echo base_url($a);?>">
      <?php
     }
    ?>
  </div>
</body>
</html>