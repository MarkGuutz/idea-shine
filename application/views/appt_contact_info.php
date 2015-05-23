<html lang="en">
<head>
	<meta charset="utf-8">
	<title>Appointment: Contact Info</title>
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" type="text/css" href="/assets/css/appointment_views/appointment_views.css">
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.4/css/bootstrap.min.css">
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.4/css/bootstrap-theme.min.css">
	<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.11.2/jquery.min.js"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.4/js/bootstrap.min.js"></script>
	<script type="text/javascript">
    	$(document).ready(function(){
    		$("button").click(function(){
    			$("#contactForm input").each(function(){
    				if ($(this).val() == ""){
    					$(".form-control").addClass("input_active");
    				}
    			});

    			$("#contactForm input").each(function(){
    				if(<?php form_error('first_name') == TRUE ?>){
    					alert('hi');
    				}
    			})
    		});
    	});	
	</script>
	<style type="text/css">
    .input_active:invalid, .validation_border{
        border: 1px solid red;
    }
	</style>
</head>
<body>
	<form class = "form-horizontal" action = "/appointment/contact" id = "contactForm" method = "post">
		<div class = "form-group">
			<label class = "col-sm-3 col-md-offset-2 col-md-2 control-label"> First Name: </label>
			<div class = "col-sm-7 col-md-4">
				<input type="text" class="form-control 
<?php 
				if (form_error('first_name') == TRUE) {
					echo 'input_active'; 
				} 
?>				
				" name ="first_name" id = "first_name"
				value="<?= set_value("first_name")?>
<?php 
				if ($this->session->userdata("first_name") == TRUE && set_value("first_name") == FALSE) {
					echo $this->session->userdata("first_name"); 
				} 
?>"
				required oninvalid="this.setCustomValidity('Please include a first name.')" 
				x-moz-errormessage="Please include a first name." 
				onchange="this.setCustomValidity('')"
				autocomplete = "on">
				<span class = "validation_prompt"><?= form_error('first_name')?></span>
			</div>
		</div>
		<div class = "form-group">
			<label class = "col-sm-3 col-md-offset-2 col-md-2 control-label"> Last Name: </label>
			<div class = "col-sm-7 col-md-4">
				<input type="text" class="form-control
<?php 
				if (form_error('last_name') == TRUE) {
					echo 'input_active'; 
				} 
?>				
				"
				name = "last_name" id = "last_name"
				value="<?= set_value('last_name') ?>
<?php 
				if ($this->session->userdata("last_name") == TRUE && set_value("last_name") == FALSE) {
					echo $this->session->userdata("last_name"); 
				} 
?>" 
				required oninvalid="this.setCustomValidity('Please include a last name.')" 
				x-moz-errormessage="Please include a last name." 
				onchange="this.setCustomValidity('')">
				<span class = "validation_prompt"><?= form_error('last_name')?></span>	
			</div>
		</div>
		<div class = "form-group">
			<label class = "col-sm-3 col-md-offset-2 col-md-2 control-label"> Phone Number: <br> 
			<span class = "format_ex">(Numbers only)</span> </label>
			<div class = "col-sm-7 col-md-4">
				<input type="text" class="form-control
<?php 
				if (form_error('phone_no') == TRUE) {
					echo 'input_active'; 
				} 
?>			
				" name = "phone_no" id = "phone_no"
				value="<?= set_value('phone_no') ?>
<?php 
				if ($this->session->userdata("phone_no") == TRUE && set_value("phone_no") == FALSE) { 
					echo $this->session->userdata("phone_no"); 
				} 
?>"
				required oninvalid="this.setCustomValidity('Please include a valid phone number.')" 
				x-moz-errormessage="Please include a valid phone number." 
				onchange="this.setCustomValidity('')"
				pattern="[0-9][0-9][0-9][0-9][0-9][0-9][0-9][0-9][0-9][0-9]"
				title="Please enter only numbers (e.g. 1234567890) with no dashes or parenthesis.">
				<span class = "validation_prompt"><?= form_error('phone_no')?></span>	
			</div>
		</div>
		<div class="form-group">
    		<label for="inputEmail3" class="col-sm-3 col-md-offset-2 col-md-2 control-label">Email:</label>
   			 <div class="col-sm-7 col-md-4">
      			<input type="email" class="form-control
<?php 
				if (form_error('email') == TRUE) {
					echo 'input_active'; 
				} 
?>			
      			" id="inputEmail3" name = "email" id = "email"
				value="<?= set_value('email') ?> 
<?php 
				if ($this->session->userdata("email") == TRUE && set_value("email") == FALSE) {
					echo $this->session->userdata("email"); 
				} 
?>"
      			required oninvalid="this.setCustomValidity('Please include a valid email address.')" 
				x-moz-errormessage="Please include a valid email address." 
				onchange="this.setCustomValidity('')">
				<span class = "validation_prompt"><?= form_error('email')?> </span>
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