<html>
<head>
<title>Insert Data Into Database Using CodeIgniter Form</title>
<link href='http://fonts.googleapis.com/css?family=Marcellus' rel='stylesheet' type='text/css'/>
 
<link rel="stylesheet" href="<?php echo base_url('assets/log.css');?>">	

<link rel="stylesheet" href="<?php echo base_url('assets/style.css');?>">

</head>
<body style="  background-color:#e6e6ff">

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

	

<div  id="container">
<?php echo form_open('RegisterC') ; ?>
<h1 style="color: #009">REGISTER</h1><hr/>
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
<?php echo form_input(array( 'id' => 'pass', 'name' => 'pass','type'=>'password')); ?><br />

<?php echo form_label('Confirm Password:'); ?> <?php echo form_error('conf'); ?><br />
<?php echo form_input(array( 'id' => 'conf', 'name' => 'conf','type'=>'password' )); ?><br />

<select style="-moz-border-radius:5px;
	-webkit-border-radius:5px ; "name="selection1" id="selection1">
    <option value="Renter">Renter</option>
    <option value="Tourist">Tourist</option>
  </select>




<?php echo form_submit(array('id' => 'submit', 'value' => 'Submit')); ?>
<?php echo form_close(); ?><br/>
<div id="fugo">

</div>
</div>
<br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br>
 <div class="container" id="footer" style="max-width:100%;height:40px;margin-bottom:none;float:left">
      <p style="padding-top:5px">CopyRight2017 Bed and Breakfast private limited.</p>
     </div>
</body>
</html>