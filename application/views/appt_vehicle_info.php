<?php $this->load->view('templates/header') ?>
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
/********************************************** Lists updates on errors w/ validation or session is set ************************************************/
				var html_str = "<option value = '<?= $this->session->userdata('make')?><?= set_value('make')?>'><?= set_value('make')?><?= $this->session->userdata('make')?> </option>";
                    html_str += "<option value = 'Other'> Other </option>"; 
                    for(var i = 0; i < res.makes.length; i++) {
                        html_str += "<option value = '"+ res.makes[i].name+"'>" + res.makes[i].name + "</option>";
                    }
                    $("#makers_list").html(html_str);
                    for(var i = 0; i < res.makes.length; i++) {
            			if ($("#makers_list").val() == res.makes[i].name){
                			for(var j = 0; j < res.makes[i].models.length; j++) {
	                        	html_str += "<option value = '"+ res.makes[i].models[j].name+"'>" + res.makes[i].models[j].name + "</option>";
	                        }
	                    }
            		}
                	$("#models_list").html(html_str);
                	html_str = '';
                	html_str += "<option value = '<?= $this->session->userdata('model')?><?= set_value('model')?>'><?= $this->session->userdata('model')?><?= set_value('model')?></option>"; 
                	html_str += "<option value = 'Other'> Other </option>"; 	
            		for(var i = 0; i < res.makes.length; i++) {
            			if ($("#makers_list").val() == res.makes[i].name){
                			for(var j = 0; j < res.makes[i].models.length; j++) {
	                        	html_str += "<option value = '"+ res.makes[i].models[j].name+"'>" + res.makes[i].models[j].name + "</option>";
	                        }
	                    }
            		}
                	$("#models_list").html(html_str);
                	html_str = '';
                	html_str += "<option value = <?= $this->session->userdata('year')?>> <?= $this->session->userdata('year')?> </option>"; 
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
/**************************************************** List updates on change *************************************************************/
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
			<label class = "col-sm-3 col-md-offset-2 col-md-2 control-label"> Make: </label>
				<div class = "col-sm-7 col-md-4">
					<select name = "make" class = "form-control
<?php 
				if (form_error('make') == TRUE) {
					echo 'input_active'; 
				} 
?>" 
					id = "makers_list"
					required oninvalid = "this.setCustomValidity('Please choose a make.')"
					onchange = "this.setCustomValidity('')"
					x-moz-errormessage = "Please choose a make.">
					</select>
					<span class = "validation_prompt"><?= form_error('make')?> </span>
				</div>
		</div>
		<div class = "form-group">
			<label class = "col-sm-3 col-md-offset-2 col-md-2 control-label"> Model: </label>
				<div class = "col-sm-7 col-md-4">
					<select name = "model" class = "form-control
<?php 
				if (form_error('model') == TRUE) {
					echo 'input_active'; 
				} 
?>" 
					id = "models_list"
					required oninvalid = "this.setCustomValidity('Please choose a model.')"
					onchange = "this.setCustomValidity('')"
					x-moz-errormessage = "Please choose a model.">
					</select>
					<span class = "validation_prompt"><?= form_error('model')?> </span>
				</div>
		</div>
		<div class = "form-group">
			<label class = "col-sm-3 col-md-offset-2 col-md-2 control-label"> Year: </label>
				<div class = "col-sm-7 col-md-4">
					<select name = "year" class = "form-control
<?php 
				if (form_error('year') == TRUE) {
					echo 'input_active'; 
				} 
?>" 
					id = "years_list"
					required oninvalid = "this.setCustomValidity('Please choose a year.')"
					onchange="this.setCustomValidity('')"
					x-moz-errormessage="Please choose a year.">
					</select>
					<span class = "validation_prompt"><?= form_error('year')?> </span>
				</div>
		</div>
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
</body>
</html>