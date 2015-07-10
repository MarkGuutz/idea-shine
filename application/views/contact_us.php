<?php $this->load->view("/templates/header")?>
	<script type="text/javascript" src="/assets/js/input_active.js"> </script>
	<link href='http://fonts.googleapis.com/css?family=Karma:600' rel='stylesheet' type='text/css'>
	<link rel="stylesheet" type="text/css" href="/assets/css/contact-us.css">
</head>
<?php $this->load->view("/templates/navbar") ?>
	<div class="container-fluid location-header">
		<h3>CONTACT US</h3>
	</div>
	<div class="row contact-options">
		<div class="col-sm-12 col-md-12">
			<table>
				<tr>
					<td><span class="glyphicon glyphicon-phone-alt"></span></td>
					<td><a href="tel:1-408-207-2147">408-207-2147</a></td>
				</tr>
				<tr>
					<td><span class="glyphicon glyphicon-envelope"></span></td>
					<td><a href="mailto:idealshine@idealshinedetailing.com?Subject=Contact%20Inquiry" target="_top">
						idealshine@idealshinedetailing.com</a>
					</td>
				</tr>
			</table>
		</div>
	</div>
	<div class="row form-img_container">
		<form class = "form-horizontal form-container" action = "/main/contact_us" method = "post">
		<!-- <p class="required-field-prompt">Please <span class="required-field-bold">complete all the fields</span>.</p> -->
	<!-- ************************************** First Name Input *************************************** -->
			<div class = "form-group">
				<label class = "col-sm-3 col-md-offset-2 col-md-2 control-label"> First Name </label>
				<div class = "col-sm-6 col-md-4">
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
					autocomplete = "on" autofocus>
					<span class = "validation_prompt"><?= form_error('first_name')?></span>
				</div>
			</div>
	<!-- ************************************** Last Name Input *************************************** -->
			<div class = "form-group">
				<label class = "col-sm-3 col-md-offset-2 col-md-2 control-label"> Last Name </label>
				<div class = "col-sm-6 col-md-4">
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
				<label class = "col-sm-3 col-md-offset-2 col-md-2 control-label"> Phone Number</label>
				<div class = "col-sm-6 col-md-4">
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
	    		<label for="inputEmail3" class="col-sm-3 col-md-offset-2 col-md-2 control-label">Email</label>
	   			 <div class="col-sm-6 col-md-4">
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
				<label class="col-sm-3 col-md-offset-2 col-md-2 control-label">Message</label>
				<div class="col-xs-12 col-sm-7 col-md-5">
					<textarea class="form-control
	<?php 			if (form_error('message') == TRUE):?>
						input_active
	<?php 			endif; ?>" 
					rows="3" name="message" required><?= set_value('message') ?></textarea>
					<span class = "validation_prompt"><?= form_error('message')?></span>
				</div>
			</div>
			<!-- ************************************** Bot/Spam Test *************************************** -->
			<div style="display: none;">
				<label for = "alt_phone"> Alt Phone </label>
				<input type = "text" id = "alt_phone" name = "alt_phone">
			</div>
			<div class="form-group">
				<div class="col-xs-offset-3 col-sm-offset-5 col-md-offset-5">
					<button type="submit" class="submit-btn">Send</button>
				</div>
			</div>
		</form>
	</div>
<?php $this->load->view("/templates/footer") ?>