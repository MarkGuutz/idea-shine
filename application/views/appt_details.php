<html lang="en">
<head>
	<meta charset="utf-8">
	<title>Appointment Details Summary</title>
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" type="text/css" href="/assets/css/appointment_views/appointment_views.css">
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.4/css/bootstrap.min.css">
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.4/css/bootstrap-theme.min.css">
	<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.11.2/jquery.min.js"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.4/js/bootstrap.min.js"></script>
</head>
<script type="text/javascript">
	$(document).ready(function(){
		$('a').click(function(){
			$("#first_name, #last_name, #phone_no, #email").attr("readonly",false);
		})
	})
</script>
<style type="text/css">
</style>
<body>
	<a href="/appointment/appt"> Back </a>
	<form class="form-horizontal" action="/appointment/send_appt" id="appt_details" method="post">
		<h3 class="col-md-offset-2">Contact Info</h3>
		<div class="form-group">
			<label class="col-sm-3 col-md-offset-2 col-md-2 control-label"> First Name: </label>
			<div class="col-sm-7 col-md-4">
				<input class="form-control" id="first_name" type="text"  value="<?=$this->session->userdata('first_name')?>">
			</div>
		</div>
		<div class="form-group">
			<label class="col-sm-3 col-md-offset-2 col-md-2 control-label"> Last Name: </label>
			<div class="col-sm-7 col-md-4">
				<input class="form-control" id="last_name" type="text"  value="<?=$this->session->userdata('last_name')?>">
			</div>
		</div>
		<div class="form-group">
			<label class="col-sm-3 col-md-offset-2 col-md-2 control-label"> Phone Number: </label>
			<div class="col-sm-7 col-md-4">
				<input class="form-control" id="phone_no" type="text"  value="<?=$this->session->userdata('phone_no')?>">
			</div>
		</div>
		<div class="form-group">
			<label class="col-sm-3 col-md-offset-2 col-md-2 control-label"> Email </label>
			<div class="col-sm-7 col-md-4">
				<input class="form-control" id="email" type="text"  value="<?=$this->session->userdata('email')?>">
			</div>
		</div>
		<h3 class="col-md-offset-2">Vehicle Info</h3>
		<div class="form-group">
			<label class="col-sm-3 col-md-offset-2 col-md-2 control-label"> Make: </label>
			<div class="col-sm-7 col-md-4">
				<input class="form-control" type="text"  value="<?=$this->session->userdata('make')?>">
			</div>
		</div>
		<div class="form-group">
			<label class="col-sm-3 col-md-offset-2 col-md-2 control-label"> Model: </label>
			<div class="col-sm-7 col-md-4">
				<input class="form-control" type="text"  value="<?=$this->session->userdata('model')?>">
			</div>
		</div>
		<div class="form-group">
			<label class="col-sm-3 col-md-offset-2 col-md-2 control-label"> Year: </label>
			<div class="col-sm-7 col-md-4">
				<input class="form-control" type="text"  value="<?=$this->session->userdata('year')?>">
			</div>
		</div>
<?php
		if($this->session->userdata('vehicle_additional') !== ""){
?>
		<div class="form-group">
			<label class="col-sm-3 col-md-offset-2 col-md-2 control-label"> Vehicle Additional Info: </label>
			<div class="col-sm-7 col-md-4">
				<textarea class="form-control" rows = "4" name = "appt_additional"><?= $this->session->userdata('vehicle_additional')?></textarea>
			</div>
		</div>
<?php } ?>
		<h3 class="col-md-offset-2">Appointment Info</h3>
		<div class="form-group">
			<label class="col-sm-3 col-md-offset-2 col-md-2 control-label"> Date: </label>
			<div class="col-sm-7 col-md-4">
				<input class="form-control" type="text"  value="<?=$this->session->userdata('date')?>">
			</div>
		</div>
		<div class="form-group">
			<label class="col-sm-3 col-md-offset-2 col-md-2 control-label"> Time: </label>
			<div class="col-sm-7 col-md-4">
				<input class="form-control" type="text"  value="<?=$this->session->userdata('time')?>">
			</div>
		</div>
		<div class="form-group">
			<label class="col-sm-3 col-md-offset-2 col-md-2 control-label"> Package: </label>
			<div class="col-sm-7 col-md-4">
				<input class="form-control" type="text"  value="<?=$this->session->userdata('package')?>">
			</div>
		</div>
		<div class="form-group">
			<label class="col-sm-3 col-md-offset-2 col-md-2 control-label"> Street: </label>
			<div class="col-sm-7 col-md-4">
				<input class="form-control" type="text"  value="<?=$this->session->userdata('street')?>">
			</div>
		</div>
		<div class="form-group">
			<label class="col-sm-3 col-md-offset-2 col-md-2 control-label"> City: </label>
			<div class="col-sm-7 col-md-4">
				<input class="form-control" type="text"  value="<?=$this->session->userdata('city')?>">
			</div>
		</div>
		<div class="form-group">
			<label class="col-sm-3 col-md-offset-2 col-md-2 control-label"> Zip: </label>
			<div class="col-sm-7 col-md-4">
				<input class="form-control" type="text"  value="<?=$this->session->userdata('zip')?>">
			</div>
		</div>
<?php
		if($this->session->userdata('appt_additional') !== ""){
?>
		<div class="form-group">
			<label class="col-sm-3 col-md-offset-2 col-md-2 control-label"> Additional Appointment Info: </label>
			<div class="col-sm-7 col-md-4">
				<textarea class="form-control" rows = "4" name = "appt_additional"><?= $this->session->userdata('appt_additional')?></textarea>
			</div>
		</div>
<?php } ?>
		<div class = "form-group">
			<div class = "col-xs-offset-3 col-sm-offset-5 col-md-offset-4">
				<button type="submit" class="btn btn-default col-md-offset-1">Submit Appointment Request</button>
			</div>
		</div>
	</form>
</body>