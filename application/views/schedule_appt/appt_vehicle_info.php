<?php $this->load->view('templates/header') ?>
	<link rel="stylesheet" type="text/css" href="/assets/css/appointment_views/appointment_views.css">
	<script type="text/javascript" src="/assets/js/input_active.js"> </script>
	<script type="text/javascript">
		$(document).ready(function(){
/******************************************** API call to Edmunds Car DB ***********************************************/				
		/******************************* Lists makes, models, & year on page load  ********************************/
		$.get("https://api.edmunds.com/api/vehicle/v2/makes?fmt=json&api_key=49kzsbfg3qem84zj35unehhs", function(res) { 
    			/********************* Set make to session or set_value if either == TRUE *******************/
    			var html_str = "html_str = <option><?= set_value('make')?></option>";
<?php 			if ($this->session->userdata("make") == TRUE && set_value("make") == FALSE): ?>
					html_str =  "<option> <?= $this->session->userdata('make')?> </option>";
<?php 			endif; ?>
				/******************************** Lists makes on page load *************************************/
				html_str += "<option> Other </option>"
                for(var i = 0; i < res.makes.length; i++) {
                    html_str += "<option>" + res.makes[i].name + "</option>";
                }
                $("#makers_list").html(html_str);
                /********************** Set model to session or set_value if either == TRUE *********************/
<?php 			if (!empty($this->session->userdata("model")) && empty(form_error('model')) && empty(set_value('model'))): ?>
					html_str =  "<option> <?= $this->session->userdata('model')?> </option>";
<?php			else: ?>
					html_str = "<option><?= set_value('model')?></option>";
<?php 			endif; ?>
				/************************************* Lists models on page load ***********************************/
				html_str += "<option> Other </option>"
				$("#models_list").html(html_str);
                for(var i = 0; i < res.makes.length; i++) {
        			if ($("#makers_list").val() == res.makes[i].name){
            			for(var j = 0; j < res.makes[i].models.length; j++) {
                        	html_str += "<option>" + res.makes[i].models[j].name + "</option>";
                        }
                    }
        		}
            	$("#models_list").html(html_str);
				html_str = "html_str = <option><?= set_value('year')?></option>";
				/********************** Set year to session or set_value if either == TRUE *********************/
<?php 			if (!empty($this->session->userdata("year")) && !is_null(set_value("year"))):?>
					html_str =  "<option> <?= $this->session->userdata('year')?> </option>";
<?php 			endif; ?>
				/************************************* Lists models on page load ***********************************/
            	html_str += "<option> Other </option>"; 	
            	for(var i = 0; i < res.makes.length; i++) {
        			if ($("#makers_list").val() == res.makes[i].name){
            			for(var j = 0; j < res.makes[i].models.length; j++) {
                        	if ($("#models_list").val() == res.makes[i].models[j].name){
                        		for(var k = 0; k < res.makes[i].models[j].years.length; k++){
                        			html_str += "<option>" + res.makes[i].models[j].years[k].year + "</option>";
                        		}
                        	}
                        }
                    }
        		}
            	$("#years_list").html(html_str);
        /******************************* Model and Year list updates on change to make value ***************************/
                $("#makers_list").change(function(){
                 html_str = "<option></option>";
                 $("#years_list").html('');
                 html_str += "<option> Other </option>"; 
                 for(var i = 0; i < res.makes.length; i++) {
                     if ($("#makers_list").val() == res.makes[i].name){
                         for(var j = 0; j < res.makes[i].models.length; j++) {
                             html_str += "<option>" + res.makes[i].models[j].name + "</option>";
                            }
                        }
                 }
                 $("#models_list").html(html_str);
                })
        /************************************ Years list updates on change to model value ******************************/
                $("#models_list").change(function(){
                 html_str = "<option> </option>";
                 html_str += "<option> Other </option>"; 
                 for(var i = 0; i < res.makes.length; i++) {
                     if ($("#makers_list").val() == res.makes[i].name){
                         for(var j = 0; j < res.makes[i].models.length; j++) {
                             if ($("#models_list").val() == res.makes[i].models[j].name){
                                 for(var k = 0; k < res.makes[i].models[j].years.length; k++){
                                     html_str += "<option>" + res.makes[i].models[j].years[k].year + "</option>";
                                 }
                             }
                            }
                        }
                 }
                 $("#years_list").html(html_str);
            	});
            }, "json");
		});
	</script>
</head>
<?php $this->load->view('templates/navbar') ?>
	<div class="container-fluid location-header">
		<h3>Schedule Appointment</h3>
	</div>
	<a href="/appointment/contact"> Back </a>
	<form class = "form-horizontal" action = "/appointment/vehicle" method = "post" id = "vehicleForm">
<!-- ************************************** Make Input *************************************** -->		
		<div class = "form-group">
			<label class = "col-sm-3 col-md-offset-2 col-md-2 control-label"> Make: </label>
				<div class = "col-sm-7 col-md-4">
				<!--**** 1. Add class if form_error == TRUE 2. Set 'required' attribute ****-->
					<select name = "make" class = "form-control
<?php 				if (form_error('make') == TRUE):?>
						input_active
<?php 				endif; ?>" 	
					id = "makers_list"
					required oninvalid = "this.setCustomValidity('Please choose a make.')"
					onchange = "this.setCustomValidity('')"
					x-moz-errormessage = "Please choose a make.">
					</select>
					<span class = "validation_prompt"><?= form_error('make')?> </span>
				</div>
		</div>
<!-- ************************************** Model Input *************************************** -->
		<div class = "form-group">
			<label class = "col-sm-3 col-md-offset-2 col-md-2 control-label"> Model: </label>
				<div class = "col-sm-7 col-md-4">
				<!--**** 1. Add class if form_error == TRUE 2. Set 'required' attribute ****-->
					<select name = "model" class = "form-control
<?php 				if (form_error('model') == TRUE):?>
						input_active
<?php 				endif; ?>" 	
					id = "models_list"
					required oninvalid = "this.setCustomValidity('Please choose a model.')"
					onchange = "this.setCustomValidity('')"
					x-moz-errormessage = "Please choose a model.">
					</select>
					<span class = "validation_prompt"><?= form_error('model')?> </span>
				</div>
		</div>
<!-- ************************************** Year Input *************************************** -->
		<div class = "form-group">
			<label class = "col-sm-3 col-md-offset-2 col-md-2 control-label"> Year: </label>
				<div class = "col-sm-7 col-md-4">
				<!--**** 1. Add class if form_error == TRUE 2. Set 'required' attribute ****-->
					<select name = "year" class = "form-control
<?php 				if (form_error('year') == TRUE):?>
						input_active
<?php 				endif; ?>" 	
					id = "years_list"
					required oninvalid = "this.setCustomValidity('Please choose a year.')"
					onchange="this.setCustomValidity('')"
					x-moz-errormessage="Please choose a year.">
					</select>
					<span class = "validation_prompt"><?= form_error('year')?> </span>
				</div>
		</div>
<!-- ***************************** Optional Additional Vehicle Info ************************** -->
		<div class = "form-group">
			<label class = "col-sm-3 col-md-offset-2 col-md-2 control-label"> Additional Info: </label>
			<div class = "col-sm-7 col-md-5">
				<textarea class="form-control" rows="4" name = "vehicle_additional" 
				placeholder = "If you cannot find your vehicle: 1. Select 'Other' in all the dropdowns above 2. Write the make, model, and year in this text-box."><?= $this->session->userdata('vehicle_additional')?></textarea>
			</div>
		</div>
		<div class = "form-group">
			<div class = "col-xs-offset-3 col-sm-offset-5 col-md-offset-5">
				<button type="submit" class="btn btn-default">Continue to Appointment Info</button>
			</div>
		</div>
	</form>
<?php $this->load->view('templates/footer') ?>