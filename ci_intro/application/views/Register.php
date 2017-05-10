<html>
<head>
<title>Insert Data Into Database Using CodeIgniter Form</title>
<link href='http://fonts.googleapis.com/css?family=Marcellus' rel='stylesheet' type='text/css'/>
 <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
<link rel="stylesheet" href="<?php echo base_url('assets/style.css');?>">

</head>
<body>

<div id="container">
<?php echo form_open('RegisterC'); ?>
<h1>Insert Data Into Database Using CodeIgniter +style</h1><hr/>
<?php if (isset($message)) { ?>
<CENTER><h3 style="color:green;">Data inserted successfully</h3></CENTER><br>
<?php } ?>
<?php echo form_label('First Name :'); ?> <?php echo form_error('fname'); ?><br />
<?php echo form_input(array('id' => 'fname', 'name' => 'fname')); ?><br />

<?php echo form_label('Last Name :'); ?> <?php echo form_error('lname'); ?><br />
<?php echo form_input(array('id' => 'lname', 'name' => 'lname')); ?><br />

<?php echo form_label('Email :'); ?> <?php echo form_error('demail'); ?><br />
<?php echo form_input(array('id' => 'demail', 'name' => 'demail')); ?><br />

<?php echo form_label('Mobile No. :'); ?> <?php echo form_error('dmobile'); ?><br />
<?php echo form_input(array('id' => 'dmobile', 'name' => 'dmobile', 'placeholder' => '10 Digit Mobile No.')); ?><br />

<?php echo form_label('Address 1 :'); ?> <?php echo form_error('Faddress'); ?><br />
<?php echo form_input(array('id' => 'Faddress', 'name' => 'Faddress')); ?><br />

<?php echo form_label('Address 2 :'); ?> <?php echo form_error('Saddress'); ?><br />
<?php echo form_input(array('id' => 'Saddress', 'name' => 'Saddress')); ?><br />

<?php echo form_label('City:'); ?> <?php echo form_error('city'); ?><br />
<?php echo form_input(array('id' => 'city', 'name' => 'city')); ?><br />

<?php echo form_label('User name:'); ?> <?php echo form_error('Uname'); ?><br />
<?php echo form_input(array('id' => 'Uname', 'name' => 'Uname')); ?><br />

<?php echo form_label('Password:'); ?> <?php echo form_error('pass'); ?><br />
<?php echo form_input(array('id' => 'pass', 'name' => 'pass')); ?><br />

<select name="selection1" id="selection1">
    <option value="Renter">Renter</option>
    <option value="Tourist">Tourist</option>
  </select>




<?php echo form_submit(array('id' => 'submit', 'value' => 'Submit')); ?>
<?php echo form_close(); ?><br/>
<div id="fugo">

</div>
</div>
</body>
</html>