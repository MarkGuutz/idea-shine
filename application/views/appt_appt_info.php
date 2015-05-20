<html lang="en">
<head>
	<meta charset="utf-8">
	<title>Appointment: Appointment Info</title>
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" type="text/css" href="/assets/css/appointment_views/appointment_views.css">
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.4/css/bootstrap.min.css">
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.4/css/bootstrap-theme.min.css">
	<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.11.2/jquery.min.js"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.4/js/bootstrap.min.js"></script>
	<script type="text/javascript">
	</script>
	<style type="text/css">
	</style>
</head>
<body>
	<form class = "form-horizontal" action = "/appointment/contact" id = "apptForm" method = "post">
		<div class = "form-group">
			<label class = "col-sm-3 col-md-offset-2 col-md-2 control-label"> Date: </label>
			<div class = "col-sm-7 col-md-4">
				<input type="date" class="form-control 
<?php 
				if (form_error('date') == TRUE) {
					echo 'validation_border'; 
				} 
?>				
				" name ="date" id = "date"
				value="<?= set_value("date")?>
<?php 
				if ($this->session->userdata("date") == TRUE && set_value("date") == FALSE) {
					echo $this->session->userdata("date"); 
				} 
?>"
				required oninvalid="this.setCustomValidity('Please choose a date.')" 
				x-moz-errormessage="Please choose a date." 
				onchange="this.setCustomValidity('')"
				autocomplete = "on">
				<span class = "validation_prompt"><?= form_error('date')?></span>
			</div>
		</div>
		<div class = "form-group">
			<label class = "col-sm-3 col-md-offset-2 col-md-2 control-label"> Street: </label>
			<div class = "col-sm-7 col-md-4">
				<input type="text" class="form-control
<?php 
				if (form_error('street') == TRUE) {
					echo 'validation_border'; 
				} 
?>				
				"
				name = "street" id = "street"
				value="<?= set_value('street') ?>
<?php 
				if ($this->session->userdata("street") == TRUE && set_value("street") == FALSE) {
					echo $this->session->userdata("street"); 
				} 
?>" 
				required oninvalid="this.setCustomValidity('Please include a street.')" 
				x-moz-errormessage="Please include a street." 
				onchange="this.setCustomValidity('')">
				<span class = "validation_prompt"><?= form_error('street')?></span>	
			</div>
		</div>
		<div class = "form-group">
			<label class = "col-sm-3 col-md-offset-2 col-md-2 control-label"> City:</label>
			<div class = "col-sm-7 col-md-4">
				<input type="text" class="form-control
<?php 
				if (form_error('city') == TRUE) {
					echo 'validation_border'; 
				} 
?>			
				" name = "city" id = "city"
				value="<?= set_value('city') ?>
<?php 
				if ($this->session->userdata("city") == TRUE && set_value("city") == FALSE) { 
					echo $this->session->userdata("city"); 
				} 
?>"
				required oninvalid="this.setCustomValidity('Please include city.')" 
				x-moz-errormessage="Please include city." 
				onchange="this.setCustomValidity('')"
				<span class = "validation_prompt"><?= form_error('city')?></span>	
			</div>
		</div>
		<div class="form-group">
    		<label class="col-sm-3 col-md-offset-2 col-md-2 control-label">Zip:</label>
   			 <div class="col-sm-7 col-md-4">
      			<input type="zip" class="form-control
<?php 
				if (form_error('zip') == TRUE) {
					echo 'validation_border'; 
				} 
?>			
      			" id="zip" name = "zip" id = "zip"
				value="<?= set_value('zip') ?> 
<?php 
				if ($this->session->userdata("zip") == TRUE && set_value("zip") == FALSE) {
					echo $this->session->userdata("zip"); 
				} 
?>"
      			required oninvalid="this.setCustomValidity('Please include a valid zip code.')" 
				x-moz-errormessage="Please include a valid zip code." 
				onchange="this.setCustomValidity('')">
				<span class = "validation_prompt"><?= form_error('zip')?> </span>
    		</div>
  		</div>
		<div class = "form-group">
			<div class = "col-xs-offset-3 col-sm-offset-5 col-md-offset-5">
				<button type="submit" class="btn btn-default">Continue to Vehicle Info</button>
			</div>
		</div>
	</form>
</body>
</html>