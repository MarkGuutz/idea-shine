<html lang="en">
<head>
	<meta charset="utf-8">
	<title>Appointment: Vehicle Info</title>
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" type="text/css" href="/assets/css/appointment_views/appointment_views.css">
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.4/css/bootstrap.min.css">
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.4/css/bootstrap-theme.min.css">
	<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.11.2/jquery.min.js"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.4/js/bootstrap.min.js"></script>
	<script type="text/javascript">
		$(document).ready(function(){
				$("button").click(function(){
	    			$("#vehicleForm").each(function(){
	    				if ($(this).val() == ""){
	    					$(".form-control").addClass("input_active");
	    				}
	    			});
    			});
			$.get("https://api.edmunds.com/api/vehicle/v2/makes?fmt=json&api_key=49kzsbfg3qem84zj35unehhs", function(res) { 
/********************************************************** List updates on errors w/ validation ****************************************************/
				var html_str = "<option value = <?= set_value('make')?>> <?= set_value('make')?> </option>";
                    html_str += "<option value = 'Other'> Other </option>"; 
                    for(var i = 0; i < res.makes.length; i++) {
                        html_str += "<option value = '"+ res.makes[i].name+"'>" + res.makes[i].name + "</option>";
                    }
                    $("#makers_list").html(html_str);
                    html_str = "<option <?= set_value('make')?>><?= set_value('make')?></option>";
                    for(var i = 0; i < res.makes.length; i++) {
                			if ($("#makers_list").val() == res.makes[i].name){
	                			for(var j = 0; j < res.makes[i].models.length; j++) {
		                        	html_str += "<option value = '"+ res.makes[i].models[j].name+"'>" + res.makes[i].models[j].name + "</option>";
		                        }
		                    }
                		}
                	$("#models_list").html(html_str);
                	html_str = '';
                	html_str += "<option <?= set_value('model')?>><?= set_value('model')?></option>"; 
                		for(var i = 0; i < res.makes.length; i++) {
                			if ($("#makers_list").val() == res.makes[i].name){
	                			for(var j = 0; j < res.makes[i].models.length; j++) {
		                        	html_str += "<option value = '"+ res.makes[i].models[j].name+"'>" + res.makes[i].models[j].name + "</option>";
		                        }
		                    }
                		}
                	$("#models_list").html(html_str);
                	html_str = '';
                	html_str += "<option> </option>"; 
                	for(var i = 0; i < res.makes.length; i++) {
                			if ($("#makers_list").val() == res.makes[i].name){
	                			for(var j = 0; j < res.makes[i].models.length; j++) {
		                        	if ($("#models_list").val() == res.makes[i].models[j].name){
		                        		for(var k = 0; k < res.makes[i].models[j].years.length; k++){
		                        			html_str += "<option value = '"+ res.makes[i].models[j].years[k].year+"'>" + res.makes[i].models[j].years[k].year + "</option>";
		                        		}
		                        	}
		                        }
		                    }
                		}
                	$("#years_list").html(html_str);
/****************************************************************** List updates on change *************************************************************/
                	$("#makers_list").change(function(){
                		html_str = "<option></option>";
                		$("#years_list").html('');
                		html_str += "<option value = 'Other'> Other </option>"; 
                		for(var i = 0; i < res.makes.length; i++) {
                			if ($("#makers_list").val() == res.makes[i].name){
	                			for(var j = 0; j < res.makes[i].models.length; j++) {
		                        	html_str += "<option value = '"+ res.makes[i].models[j].name+"'>" + res.makes[i].models[j].name + "</option>";
		                        }
		                    }
                		}
                		$("#models_list").html(html_str);
                	})
                	$("#models_list").change(function(){
                		html_str = "<option> </option>";
                		html_str += "<option value = 'Other'> Other </option>"; 
                		for(var i = 0; i < res.makes.length; i++) {
                			if ($("#makers_list").val() == res.makes[i].name){
	                			for(var j = 0; j < res.makes[i].models.length; j++) {
		                        	if ($("#models_list").val() == res.makes[i].models[j].name){
		                        		for(var k = 0; k < res.makes[i].models[j].years.length; k++){
		                        			html_str += "<option value = '"+ res.makes[i].models[j].years[k].year+"'>" + res.makes[i].models[j].years[k].year + "</option>";
		                        		}
		                        	}
		                        }
		                    }
                		}
                		$("#years_list").html(html_str);
                	})
			}, "json");
		})
	</script>
	<style type="text/css">
    .input_active:invalid, .validation_border{
        border: 1px solid red;
    }
	</style>
</head>
<body>
	<a href="/appointment/contact"> Back </a>
	<form class = "form-horizontal" action = "/appointment/vehicle" method = "post" id = "vehicleForm">
		<div class = "form-group">
			<label class = "col-md-offset-2 col-md-1 control-label"> Make: </label>
				<div class = "col-md-4">
					<select name = "make" class = "form-control
<?php 
				if (form_error('make') == TRUE) {
					echo 'validation_border'; 
				} 
?>			
					" id="makers_list"
					required oninvalid = "this.setCustomValidity('Please choose a make.')"
					onchange="this.setCustomValidity('')"
					x-moz-errormessage="Please choose a make.">
					</select>
				</div>
		</div>
		<div class = "form-group">
			<label class = "col-md-offset-2 col-md-1 control-label"> Model: </label>
				<div class = "col-md-4">
					<select name = "model" class = "form-control
<?php 
				if (form_error('model') == TRUE) {
					echo 'validation_border'; 
				} 
?>
					" id = "models_list"
					required oninvalid = "this.setCustomValidity('Please choose a model.')"
					onchange="this.setCustomValidity('')"
					x-moz-errormessage="Please choose a model.">
					</select>
				</div>
		</div>
		<div class = "form-group">
			<label class = "col-md-offset-2 col-md-1 control-label"> Year: </label>
				<div class = "col-md-4">
					<select name = "year" class = "form-control
<?php 
				if (form_error('year') == TRUE) {
					echo 'validation_border'; 
				} 
?>
					" id = "years_list"
					required oninvalid = "this.setCustomValidity('Please choose a year.')"
					onchange="this.setCustomValidity('')"
					x-moz-errormessage="Please choose a year.">
					</select>
				</div>
		</div>
		<div class = "form-group">
			<label class = "col-md-offset-1 col-md-2 control-label"> Additional Info: </label>
			<div class = "col-md-5">
				<textarea class="form-control" rows="4" name = "vehicle_additional" 
				placeholder = "If you cannot find your vehicle: 1. Select 'Other' in all the dropdowns above 2. Write the make, model, and year in this text-box."></textarea>
			</div>
		</div>
		<div class = "form-group">
			<div class = "col-sm-offset-5 col-md-offset-5">
				<button type="submit" class="btn btn-default">Continue to Appointment Info</button>
			</div>
		</div>
	</form>
</body>
</html>