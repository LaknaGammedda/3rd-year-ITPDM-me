<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?><!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<title><?php echo $title;?></title>

</head>
<body>

<div id="container">

	<h1><?php echo $page_header;?></h1>

	<div id="body">
		<?php
		foreach ($firstName as $object) {
			echo $object->firstName.'<br/>';
		}
		echo '<br/><br/><br/>';
		foreach ($users as $object) {
			echo $object->firstName.'\' s email address is '. $object->Email.'<br/>';
		}
		?>
	</div>

	<p class="footer">Page rendered in <strong>{elapsed_time}</strong> seconds</p>
</div>

</body>
</html>