<?php $this->load->view("/templates/header")?>
	<link rel="stylesheet" type="text/css" href="/assets/css/appointment_views/appointment_views.css">
	<script type="text/javascript" src="/assets/js/input_active.js"> </script>
	<link href='http://fonts.googleapis.com/css?family=Karma:600' rel='stylesheet' type='text/css'>
<style type="text/css">
	.success_prompt{
		color: green;
	}

	.contact-options div h5{
		margin: 2px 0px -5px 0px;
	}

	.required-field-bold{
		color: #E88E3B;
		font-weight: bold;
		font-size: 18px;
		text-decoration: underline;
	}

	.status-update span{
		font-weight: bold;
		font-family: 'Karma', serif;
		margin-bottom: 10px;
	}

	.status-update{
		margin-top: 15px;
	}

	.contact-options, .required-field-prompt, .status-update{
		text-align: center;
	}

	.required-field-prompt, .required-field-bold{
		font-size: 14px;
	}

	.form-group{
		padding-top: 10px;
	}

	.contact-options div p{
		margin: 15px 0px 0px 0px;
	}

	.submit-btn{
		color: white;
		background: #18829C;
		width: 150px;
		height: 35px;
		border-radius: 4px;
		border: 1px solid transparent;
		font-weight: bold;
	}

</style>
<?php $this->load->view("/templates/navbar") ?>
	<div class="container-fluid location-header">
		<h3>Contact Us</h3>
	</div>
	<div class="row status-update">
		<span class = "validation_prompt"><?= $this->session->flashdata('error')?></span>
		<span class = "success_prompt"><?= $this->session->flashdata('success')?></span>
	</div>
	<div class="row contact-options">
		<div class="col-sm-12 col-md-12">
			<h5>Reach us at: </h5>
			<p class="col-xs-12 col-sm-12 col-md-12 glyphicon glyphicon-phone-alt"> <a href="tel:408-207-2147">408-207-2147</a></p> 
			<p class="col-xs-12 col-sm-12 col-md-12 glyphicon glyphicon-envelope">
			<a href="mailto:idealshinedetailing@gmail.com?Subject=Contact%20Inquiry" target="_top">
			idealshinedetailing@gmail.com 
			</a></p>
			<p class="col-xs-12 col-sm-12 col-md-12 glyphicon glyphicon-align-justify"> <span>Contact Form Below:</span></p>
			<p class="required-field-prompt">Please <span class="required-field-bold">complete all the fields</span>.</p>
		</div>
	</div>
	<form class = "form-horizontal" action = "/main/contact_us" method = "post">
<!-- ************************************** First Name Input *************************************** -->
		<div class = "form-group">
			<label class = "col-sm-offset-0 col-sm-3 col-md-offset-2 col-md-2 control-label"> First Name </label>
			<div class = "col-xs-12 col-sm-6 col-md-4">
	<!--**** 1. Add class if form_error == TRUE  2. Set value to session('first_name') if == TRUE 3. Set 
			'required' attribute ****-->
				<input type="text" class="form-control 
<?php 			if (form_error('first_name') == TRUE):?>
					input_active
<?php 			endif; ?>" 			
				name ="first_name" id = "first_name"
				value="<?= set_value("first_name") ?>"
				required oninvalid="this.setCustomValidity('Please include a first name.')" 
				x-moz-errormessage="Please include a first name." 
				onchange="this.setCustomValidity('')"
				autocomplete = "on">
				<span class = "validation_prompt"><?= form_error('first_name')?></span>
			</div>
		</div>
<!-- ************************************** Last Name Input *************************************** -->
		<div class = "form-group">
			<label class = "col-sm-offset-0 col-sm-3 col-md-offset-2 col-md-2 control-label"> Last Name </label>
			<div class = "col-xs-12 col-sm-6 col-md-4">
	<!--**** 1. Add class if form_error == TRUE  2. Set value to session('last_name') if == TRUE 3. Set 
			'required' attribute ****-->
				<input type="text" class="form-control
<?php 			if (form_error('last_name') == TRUE):?>
					input_active
<?php 			endif; ?>" 	
				name = "last_name" id = "last_name"
				value="<?= set_value('last_name') ?>"
				required oninvalid="this.setCustomValidity('Please include a last name.')" 
				x-moz-errormessage="Please include a last name." 
				onchange="this.setCustomValidity('')">
				<span class = "validation_prompt"><?= form_error('last_name')?></span>	
			</div>
		</div>
<!-- ************************************** Phone Number Input *************************************** -->
		<div class = "form-group">
			<label class = "col-sm-offset-0 col-sm-3 col-md-offset-2 col-md-2 control-label"> Phone Number</label>
			<div class = "col-xs-12 col-sm-6 col-md-4">
	<!--**** 1. Add class if form_error == TRUE  2. Set value to session('phone_no') if == TRUE 3. Set 
			'required' attribute ****-->
				<input type="text" class="form-control
<?php 			if (form_error('phone_no') == TRUE):?>
					input_active
<?php 			endif; ?>" 	
	 			name = "phone_no" id = "phone_no"
				value="<?= set_value('phone_no') ?>"
				required oninvalid="this.setCustomValidity('Please include a valid phone number.')" 
				x-moz-errormessage="Please include a valid phone number." 
				onchange="this.setCustomValidity('')">
				<span class = "validation_prompt"><?= form_error('phone_no')?></span>	
			</div>
		</div>
<!-- ************************************** Email Input *************************************** -->
		<div class="form-group">
    		<label for="inputEmail3" class="col-sm-offset-0 col-sm-3 col-md-offset-2 col-md-2 control-label">Email</label>
   			 <div class="col-xs-12 col-sm-6 col-md-4">
   	<!--**** 1. Add class if form_error == TRUE  2. Set value to session('email') if == TRUE 3. Set 
			'required' attribute ****-->
      			<input type="email" class="form-control
<?php 			if (form_error('email') == TRUE):?>
					input_active
<?php 			endif; ?>" 	
	 			id="inputEmail3" name = "email" id = "email"
				value="<?= set_value('email') ?>"
				required oninvalid="this.setCustomValidity('Please include a valid email address.')" 
				x-moz-errormessage="Please include a valid email address." 
				onchange="this.setCustomValidity('')">
				<span class = "validation_prompt"><?= form_error('email')?> </span>
    		</div>
  		</div>
<!-- ************************************** Message Input *************************************** -->
		<div class="form-group">
			<label class="col-sm-offset-0 col-sm-3 col-md-offset-2 col-md-2 control-label">Message</label>
			<div class="col-xs-12 col-sm-7 col-md-5">
				<textarea class="form-control
<?php 			if (form_error('message') == TRUE):?>
					input_active
<?php 			endif; ?>" 
				rows="3" name="message" required><?= set_value('message') ?></textarea>
				<span class = "validation_prompt"><?= form_error('message')?></span>
			</div>
		</div>
		</div>
		<!-- ************************************** Bot/Spam Test *************************************** -->
		<div style="display: none;">
			<label for = "alt_phone"> Alt Phone </label>
			<input type = "text" id = "alt_phone" name = "alt_phone">
		</div>
		<div class="form-group">
			<div class="col-xs-offset-4 col-xs-12 col-sm-offset-5 col-sm-1 col-md-offset-5">
				<button type="submit" class="submit-btn">Send</button>
			</div>
		</div>
	</form>
<?php $this->load->view("/templates/footer") ?>