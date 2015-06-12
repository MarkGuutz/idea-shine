<html lang="en">
<head>
	<meta charset="utf-8">
	<title>Appointment Request Summary</title>
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" type="text/css" href="/assets/css/appointment_views/appointment_views.css">
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.4/css/bootstrap.min.css">
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.4/css/bootstrap-theme.min.css">
	<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.11.2/jquery.min.js"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.4/js/bootstrap.min.js"></script>
</head>
<style type="text/css">
	.label_heading{
		font-size: 14px;
	}

	p {
		font-size: 25px;
	}
</style>
<body>
	<p> <span class = "label_heading col-xs-offset-3 col-sm-offset-3 col-md-offset-3 col-md-1"> First Name: </span> <span class = 'col-xs-offset-1 col-sm-offset-1 col-md-offset-1'> <?= $this->session->userdata('first_name')?></span> </p>
	<p> <span class = "label_heading col-xs-offset-3 col-sm-offset-3 col-md-offset-3 col-md-1"> Last Name: </span> <span class = 'col-xs-offset-1 col-sm-offset-1 col-md-offset-1'><?= $this->session->userdata('last_name')?></span> </p>
	<p> <span class = "label_heading col-xs-offset-3 col-sm-offset-3 col-md-offset-3 col-md-1"> Phone Number: </span> <span class = 'col-xs-offset-1 col-sm-offset-1 col-md-offset-1'><?= $this->session->userdata('phone_no')?></span> </p>
	<p> <span class = "label_heading col-xs-offset-3 col-sm-offset-3 col-md-offset-3 col-md-1"> Email: </span> <span class = 'col-xs-offset-1 col-sm-offset-1 col-md-offset-1'><?= $this->session->userdata('email')?></span> </p>
	<p> <span class = "label_heading col-xs-offset-3 col-sm-offset-3 col-md-offset-3 col-md-1"> Make: </span> <span class = 'col-xs-offset-1 col-sm-offset-1 col-md-offset-1'><?= $this->session->userdata('make')?></span> </p>
	<p> <span class = "label_heading col-xs-offset-3 col-sm-offset-3 col-md-offset-3 col-md-1"> Model: </span> <span class = 'col-xs-offset-1 col-sm-offset-1 col-md-offset-1'><?= $this->session->userdata('model')?></span> </p>
	<p> <span class = "label_heading col-xs-offset-3 col-sm-offset-3 col-md-offset-3 col-md-1"> Year: </span> <span class = 'col-xs-offset-1 col-sm-offset-1 col-md-offset-1'><?= $this->session->userdata('year')?></span> </p>
<?php 
	if (!empty($this->session->userdata('vehicle_additional'))){
?>
	<p> <span class = "label_heading col-xs-offset-3 col-sm-offset-3 col-md-offset-3 col-md-1"> Additional Vehicle Info: </span> <span class = 'col-xs-offset-1 col-sm-offset-1 col-md-offset-1'><?= $this->session->userdata('vehicle_additional')?></span> </p>
<?php 
	} 
?>
	<p> <span class = "label_heading col-xs-offset-3 col-sm-offset-3 col-md-offset-3 col-md-1"> Date: </span> <span class = 'col-xs-offset-1 col-sm-offset-1 col-md-offset-1'><?= $this->session->userdata('date')?></span></p>
	<p> <span class = "label_heading col-xs-offset-3 col-sm-offset-3 col-md-offset-3 col-md-1"> Time: </span> <span class = 'col-xs-offset-1 col-sm-offset-1 col-md-offset-1'><?= $this->session->userdata('time')?></span></p>
	<p> <span class = "label_heading col-xs-offset-3 col-sm-offset-3 col-md-offset-3 col-md-1"> Package: </span> <span class = 'col-xs-offset-1 col-sm-offset-1 col-md-offset-1'><?= $this->session->userdata('package')?></span></p>
	<p> <span class = "label_heading col-xs-offset-3 col-sm-offset-3 col-md-offset-3 col-md-1"> Street: </span> <span class = 'col-xs-offset-1 col-sm-offset-1 col-md-offset-1'><?= $this->session->userdata('street')?></span></p>
	<p> <span class = "label_heading col-xs-offset-3 col-sm-offset-3 col-md-offset-3 col-md-1"> City: </span> <span class = 'col-xs-offset-1 col-sm-offset-1 col-md-offset-1'><?= $this->session->userdata('city')?></span></p>
	<p> <span class = "label_heading col-xs-offset-3 col-sm-offset-3 col-md-offset-3 col-md-1"> Zip: </span> <span class = 'col-xs-offset-1 col-sm-offset-1 col-md-offset-1'><?= $this->session->userdata('zip')?></span></p>
<?php 
	if (!empty($this->session->userdata('appt_additional'))){
?>
	<p> <span class = "label_heading col-xs-offset-3 col-sm-offset-3 col-md-offset-3"> Additional Appt. Info: </span> <span class = 'col-xs-offset-1 col-sm-offset-1 col-md-offset-1'><?= $this->session->userdata('appt_additional')?></span> </p>
<?php 
	} 
?>
</body>
</html>