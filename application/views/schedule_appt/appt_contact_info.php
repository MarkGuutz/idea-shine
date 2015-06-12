<?php $this->load->view('templates/header') ?>
	<link rel="stylesheet" type="text/css" href="/assets/css/appointment_views/appointment_views.css">
	<script type="text/javascript" src="/assets/js/input_active.js"> </script>
</head>
<?php $this->load->view('templates/navbar') ?>
	<div class="container-fluid location-header">
		<h3>Schedule Appointment</h3>
	</div>
	<?= $this->session->flashdata("status") ?>
	<form class = "form-horizontal" action = "/appointment/contact" id = "contactForm" method = "post">
<!-- ************************************** First Name Input *************************************** -->
		<div class = "form-group">
			<label class = "col-sm-3 col-md-offset-2 col-md-2 control-label"> First Name: </label>
			<div class = "col-sm-7 col-md-4">
	<!--**** 1. Add class if form_error == TRUE  2. Set value to session('first_name') if == TRUE 3. Set 
			'required' attribute ****-->
				<input type="text" class="form-control 
<?php 			if (form_error('first_name') == TRUE):?>
					input_active
<?php 			endif; ?>" 			
				name ="first_name" id = "first_name"
				value="<?= set_value("first_name") ?>
<?php 			if ($this->session->userdata("first_name") == TRUE && set_value("first_name") == FALSE) {
					echo $this->session->userdata("first_name"); 
				} 
?>"				required oninvalid="this.setCustomValidity('Please include a first name.')" 
				x-moz-errormessage="Please include a first name." 
				onchange="this.setCustomValidity('')"
				autocomplete = "on">
				<span class = "validation_prompt"><?= form_error('first_name')?></span>
			</div>
		</div>
<!-- ************************************** Last Name Input *************************************** -->
		<div class = "form-group">
			<label class = "col-sm-3 col-md-offset-2 col-md-2 control-label"> Last Name: </label>
			<div class = "col-sm-7 col-md-4">
	<!--**** 1. Add class if form_error == TRUE  2. Set value to session('last_name') if == TRUE 3. Set 
			'required' attribute ****-->
				<input type="text" class="form-control
<?php 			if (form_error('last_name') == TRUE):?>
					input_active
<?php 			endif; ?>" 	
				name = "last_name" id = "last_name"
				value="<?= set_value('last_name') ?>
<?php 
				if ($this->session->userdata("last_name") == TRUE && set_value("last_name") == FALSE) {
					echo $this->session->userdata("last_name"); 
				} 
?>"				required oninvalid="this.setCustomValidity('Please include a last name.')" 
				x-moz-errormessage="Please include a last name." 
				onchange="this.setCustomValidity('')">
				<span class = "validation_prompt"><?= form_error('last_name')?></span>	
			</div>
		</div>
<!-- ************************************** Phone Number Input *************************************** -->
		<div class = "form-group">
			<label class = "col-sm-3 col-md-offset-2 col-md-2 control-label"> Phone Number:</label>
			<div class = "col-sm-7 col-md-4">
	<!--**** 1. Add class if form_error == TRUE  2. Set value to session('phone_no') if == TRUE 3. Set 
			'required' attribute ****-->
				<input type="text" class="form-control
<?php 			if (form_error('phone_no') == TRUE):?>
					input_active
<?php 			endif; ?>" 	
	 			name = "phone_no" id = "phone_no"
				value="<?= set_value('phone_no') ?>
<?php 
				if ($this->session->userdata("phone_no") == TRUE && set_value("phone_no") == FALSE) { 
					echo $this->session->userdata("phone_no"); 
				} 
?>"				required oninvalid="this.setCustomValidity('Please include a valid phone number.')" 
				x-moz-errormessage="Please include a valid phone number." 
				onchange="this.setCustomValidity('')">
				<span class = "validation_prompt"><?= form_error('phone_no')?></span>	
			</div>
		</div>
<!-- ************************************** Email Input *************************************** -->
		<div class="form-group">
    		<label for="inputEmail3" class="col-sm-3 col-md-offset-2 col-md-2 control-label">Email:</label>
   			 <div class="col-sm-7 col-md-4">
   	<!--**** 1. Add class if form_error == TRUE  2. Set value to session('email') if == TRUE 3. Set 
			'required' attribute ****-->
      			<input type="email" class="form-control
<?php 			if (form_error('email') == TRUE):?>
					input_active
<?php 			endif; ?>" 	
	 			id="inputEmail3" name = "email" id = "email"
				value="<?= set_value('email') ?> 
<?php 
				if ($this->session->userdata("email") == TRUE && set_value("email") == FALSE) {
					echo $this->session->userdata("email"); 
				} 
?>"				required oninvalid="this.setCustomValidity('Please include a valid email address.')" 
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
<?php $this->load->view('templates/footer') ?>