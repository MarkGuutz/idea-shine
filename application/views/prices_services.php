<?php $this->load->view("/templates/header") ?>
	<link rel="stylesheet" type="text/css" href="/assets/css/prices-services.css">
</head>
<script type="text/javascript">
	$(document).ready(function(){
		$(".services-head").click(function(){
			if ($(this).siblings().is(":hidden")){
			    $(this).siblings().slideDown("slow");
			} 
			else{
				$(this).siblings().slideUp("slow");
			}
		});
		$(".prices-head").click(function(){
			if ($(this).siblings().is(":hidden")){
			    $(this).siblings().slideDown("slow");
			} 
			else{
				$(this).siblings().slideUp("slow");
			}
		});
	});
</script>
<?php $this->load->view("/templates/navbar") ?>
	<div class="container-fluid location-header">
		<h3>PRICES &amp; SERVICES</h3>
	</div>
	<form action="/prices-services" method="post">
	<div class="row">
		<div class="col-md-12 packages-head">
			<h2 class="text-center">PACKAGES</h2>
			<div class="divider-container">
				<div class="divider"></div>
			</div>
			<p class="text-center">Please select the package you would like to schedule and submit <a href="#package-btn">below</a>.</p>
		</div>
		<div class="col-sm-6 col-md-3 classic-col package-col">
			<div class="package-container">
				<div class="col-md-12">
					<h4>Starting at $60</h4>
				</div>
				<div class="col-md-12">
					<h3>Classic</h3>
				</div>
				<div class="col-md-12 package-description">
					<p>Perfect for someone on a budget that needs a quick exterior and interior detail. </p>
				</div>
				<div class="col-md-12 completion-time">
					<h5>Minimum time to complete:</h5>
					 <span class="completion-hours">1 Hour</span>
				</div>
				<div class="col-md-12">
					<h4 class="services-head">See Services</h4>
					<div class="services-col">
						<h5>Exterior</h5>
						<ul class="exterior">
							<li><span>Waterless wash</span></li>
							<li><span>Wheels and tires</span></li>
						</ul>
						<h5>Interior</h5>
						<ul class="interior">
							<li><span>Interior windows</span></li>
							<li><span>Dashboard</span></li>
							<li><span>Vacuum</span></li>
						</ul>
					</div>
				</div>
				<div class="col-md-12">
					<h4 class="prices-head">See Prices</h4>
					<div class="prices-col">
						<table>
							<tr>
								<td>Coupe/Sedan:</td>
								<td>$60</td>
							</tr>
							<tr>
								<td>Mid-size truck/SUV:</td>
								<td>$70</td>
							</tr>
							<tr>
								<td>Full-size truck/SUV:</td>
								<td>$80</td>
							</tr>
							<tr>
								<td>Full-size van:</td>
								<td>$90</td>
							</tr>
							<tr>
								<td>Large SUV:</td>
								<td>$90</td>
							</tr>
						</table>
					</div>
				</div>
				<div class="radio-container">
					<input type="radio" name="package" value="Classic Shine"
<?php 			if($this->session->userdata("package") == "Classic Shine"):?>
					checked="checked"
<?php 			endif; ?>
					> Select Classic Shine
				</div>
			</div>
		</div>
		<div class="col-sm-6 col-md-3 plus-col package-col">
			<div class="package-container">
				<div class="col-md-12">
					<h4>Starting at $70</h4>
				</div>
				<div class="col-md-12">
					<h3>Plus</h3>
				</div>
				<div class="col-md-12 package-description">
					<p>Includes all the services from Classic.</p> 
					<p>Get additional protection and shine for your vehicle's paint with wax and glaze. Additional interior sections are detailed.</p>
				</div>
				<div class="col-md-12 completion-time">
					<h5>Minimum time to complete:</h5>
					<span class="completion-hours">2.5 Hours</span>
				</div>
				<div class="col-md-12">
					<h4 class="services-head">See Services</h4>
					<div class="services-col">
					<h5>Exterior</h5>
						<ul class="exterior">
							<li><span>Waterless wash</span></li>
							<li><span>Wheels and tires</span></li>
							<li><span>Wax and glaze</span></li>
						</ul>
					<h5>Interior</h5>
						<ul class="interior">
							<li><span>Interior windows</span></li>
							<li><span>Dashboard</span></li>
							<li><span>Vacuum</span></li>
							<li><span>Door panels</span></li>
							<li><span>Center console</span></li>
							<li><span>Cup holders</span></li>
						</ul>
					</div>
				</div>
				<div class="col-md-12">
					<h4 class="prices-head">See Prices</h4>
					<div class="prices-col">
						<table>
							<tr>
								<td>Coupe/Sedan:</td>
								<td>$80</td>
							</tr>
							<tr>
								<td>Mid-size truck/SUV:</td>
								<td>$90</td>
							</tr>
							<tr>
								<td>Full-size truck/SUV:</td>
								<td>$100</td>
							</tr>
							<tr>
								<td>Full-size van:</td>
								<td>$110</td>
							</tr>
							<tr>
								<td>Large SUV:</td>
								<td>$110</td>
							</tr>
						</table>
					</div>
				</div>
				<div class="radio-container">
					<input type="radio" name="package" value="Plus Shine"
<?php 			if($this->session->userdata("package") == "Plus Shine"):?>
					checked="checked"
<?php 			endif; ?>
					> Select Plus Shine
				</div>
			</div>
		</div>
		<div class="col-sm-6 col-md-3 premium-col package-col">
			<div class="package-container">
				<div class="col-md-12">
					<h4>Starting at $100</h4>
				</div>
				<div class="col-md-12">
					<h3>Premium</h3>
				</div>
				<div class="col-md-12 package-description">
					<p>Includes all the services from Plus.</p>
					<p>We use a highly concentrated waterless solution with a wax and seal to give your vehicle's exterior a deeper cleaning and greater
					paint protection. Your interior's carpet will also get a shampoo treatment.</p>
				</div>
				<div class="col-md-12 completion-time">
					<h5>Minimum time to complete:</h5>
					<span class="completion-hours">3 Hours</span>
				</div>
				<div class="col-md-12">
					<h4 class="services-head">See Services</h4>
					<div class="services-col">
						<h5>Exterior</h5>
						<ul class="exterior">
							<li><span>Highly concentrated waterless wash</span></li>
							<li><span>Wheels and tires</span></li>
							<li><span>Wax and seal</span></li>
						</ul>
						<h5>Interior</h5>
						<ul class="interior">
							<li><span>Interior windows</span></li>
							<li><span>Dashboard</span></li>
							<li><span>Vacuum</span></li>
							<li><span>Door panels</span></li>
							<li><span>Center console</span></li>
							<li><span>Cup holders</span></li>
							<li><span>Vents</span></li>
							<li><span>Carpet shampoo</span></li>
						</ul>
					</div>
				</div>
				<div class="col-md-12">
					<h4 class="prices-head">See Prices</h4>
					<div class="prices-col">
						<table>
							<tr>
								<td>Coupe/Sedan:</td>
								<td>$110</td>
							</tr>
							<tr>
								<td>Mid-size truck/SUV:</td>
								<td>$120</td>
							</tr>
							<tr>
								<td>Full-size truck/SUV:</td>
								<td>$130</td>
							</tr>
							<tr>
								<td>Full-size van:</td>
								<td>$140</td>
							</tr>
							<tr>
								<td>Large SUV:</td>
								<td>$140</td>
							</tr>
						</table>
					</div>
				</div>
				<div class="radio-container">
					<input type="radio" name="package" value="Premium Shine"
<?php 			if($this->session->userdata("package") == "Premium Shine"):?>
					checked="checked"
<?php 			endif; ?>
					> Select Premium Shine
				</div>
			</div>
		</div>
		<div class="col-sm-6 col-md-3 ideal-col package-col">
			<div class="package-container">
				<div class="col-md-12">
					<h4>Starting at $140</h4>
				</div>
				<div class="col-md-12">
					<h3>Ideal</h3>
				</div>
				<div class="col-md-12 package-description">
					<p>Includes all the services from Premium. </p>
					<p>Our most popular package. A polish is added and even the exhaust tips are cleaned. Your interior will look, feel, and smell like it was new.</p>  
				</div>
				<div class="col-md-12 completion-time">
					<h5>Minimum time to complete:</h5>
					<span class="completion-hours">4 Hours</span>
				</div>
				<div class="col-md-12">
					<h4 class="services-head">See Services</h4>
					<div class="services-col">
						<h5>Exterior</h5>
						<ul class="exterior">
							<li><span>Highly concentrated waterless wash</span></li>
							<li><span>Wheels and tires with degreaser</span></li>
							<li><span>Wax and seal</span></li>
							<li><span>Polish</span></li>
							<li><span>Exhaust tips</span></li>
						</ul>
						<h5>Interior</h5>
						<ul class="interior">
							<li><span>Interior windows</span></li>
							<li><span>Dashboard</span></li>
							<li><span>Vacuum</span></li>
							<li><span>Door panels</span></li>
							<li><span>Center console</span></li>
							<li><span>Cup holders</span></li>
							<li><span>Vents</span></li>
							<li><span>Carpet shampoo</span></li>
							<li><span>Leather care</span></li>
							<li><span>Odor eliminator</span></li>
						</ul>
					</div>
				</div>
				<div class="col-md-12">
					<h4 class="prices-head">See Prices</h4>
					<div class="prices-col">
						<table>
							<tr>
								<td>Coupe/Sedan:</td>
								<td>$150</td>
							</tr>
							<tr>
								<td>Mid-size truck/SUV:</td>
								<td>$160</td>
							</tr>
							<tr>
								<td>Full-size truck/SUV:</td>
								<td>$170</td>
							</tr>
							<tr>
								<td>Full-size van:</td>
								<td>$180</td>
							</tr>
							<tr>
								<td>Large SUV:</td>
								<td>$180</td>
							</tr>
						</table>
					</div>
				</div>
				<div class="radio-container">
					<input type="radio" name="package" value="Ideal Shine"
<?php 			if($this->session->userdata("package") == "Ideal Shine"):?>
					checked="checked"
<?php 			endif; ?>
					> Select Ideal Shine
				</div>
			</div>
		</div>
	</div>
	<div class="row submit-row">
		<div class="col-md-12 text-center submit-container">
			<div class="radio-container">
					<input type="radio" name="package" value="Additional Service(s) Only"
<?php 			if($this->session->userdata("package") == "Additional Service(s) Only"):?>
					checked="checked"
<?php 			endif; ?>
					> Additional Service(s) Only
			</div>
			<p>If you would like to add or only want additional services, please scroll down to Additional Services or click <a href="#add-services">here</a>.</p>
			<button id="package-btn" type="submit" class="add-btn">Continue to Request Appointment</button>
		</div>
	</div>
	<div class="divider-mid">
	</div>
	<div class="row">
		<div class="col-sm-offset-2 col-sm-8 col-md-offset-3 col-md-6 packages-head">
			<h2 id="add-services" class="text-center">ADDITIONAL SERVICES</h2>
			<div class="divider-container">
				<div class="divider"></div>
			</div>
			<p class="text-center">Please select all the additional services you would like to add and submit <a href="#submit-add">below</a>.</p>
		</div>
	</div>
	<div class="row">
		<div class="col-sm-offset-2 col-sm-8 col-md-offset-3 col-md-6 add-services">
			<div class="col-md-12 service-name">
				<h3 class="text-center">Motorcylces &amp; Boats</h3>
			</div>
			<div class="col-md-12 add-description">
				<p>If you are interested in having your motorcycle or boat detailed, please contact us and
				we can create a custom package that fits your needs and budget.</p>
			</div>
			<div class="col-md-12 add-prices text-center">
				<h4><a href="/main/contact_us" target="_blank">Contact Us for Estimate</a></h4>
			</div>
		</div>
	</div>
	<div class="row">
		<div class="col-sm-offset-2 col-sm-8 col-md-offset-3 col-md-6 add-services">
			<div class="col-md-12 service-name">
				<h3 class="text-center">Upholstery Deep Clean</h3>
			</div>
			<div class="col-md-12 add-description">
				<p>Is your interior need of a detailing, but you don't need your exterior cleaned? Then this package is for you.
				The upholstery deep cleaning includes all the interior services from our highest package (Ideal).</p>
			</div>
			<div class="col-md-12 add-prices">
				<h4 class="prices-head text-center">See Prices</h4>
				<div class="prices-col">
					<table>
						<tr>
							<td>Coupe/Sedan:</td>
							<td>$60</td>
						</tr>
						<tr>
							<td>Mid-size truck/SUV:</td>
							<td>$70</td>
						</tr>
						<tr>
							<td>Full-size truck/SUV:</td>
							<td>$80</td>
						</tr>
						<tr>
							<td>Full-size van:</td>
							<td>$100</td>
						</tr>
						<tr>
							<td>Large SUV:</td>
							<td>$100</td>
						</tr>
					</table>
				</div>
			</div>
			<div class="col-md-12 add-checkbox text-center">
				<input type="checkbox" name="deep_clean" value="Upholstery Deep Clean"
<?php 			if($this->session->userdata("deep_clean") !== FALSE):?>
					checked="checked"
<?php 			endif; ?>
				> 
				<label>Add Upholstery Deep Clean</label> 
			</div>
		</div>
	</div>
	<div class="row">
		<div class="col-sm-offset-2 col-sm-8 col-md-offset-3 col-md-6 add-services">
			<div class="col-md-12 service-name">
				<h3 class="text-center">Headlight Restoration</h3>
			</div>
			<div class="col-md-12 add-description">
				<p>Not only are faded headlights an eyesore, but it's also a safety hazard. Our headlight restoration will remove the oxidation build up. This will restore
				your visibility during night driving and make your headlights look new.</p>
			</div>
			<div class="col-md-12 add-prices text-center">
				<h4>Price: $40.00</h4>
			</div>
			<div class="col-md-12 add-checkbox text-center">
				<input type="checkbox" name="headlight_restoration" value="Headlight Restoration"
<?php 			if($this->session->userdata("headlight_restoration") !== FALSE):?>
					checked="checked"
<?php 			endif; ?>
				> 
				<label>Add Headlight Restoration</label> 
			</div>
		</div>
	</div>
	<div class="row">
		<div class="col-sm-offset-2 col-sm-8 col-md-offset-3 col-md-6 add-services">
			<div class="col-md-12 service-name">
				<h3 class="text-center">Pet Hair Removal</h3>
			</div>
			<div class="col-md-12 add-description">
				<p>We love our pets, but sometimes they leave behind hair, fur, etc. that can make the inside of our vehicles look and smell bad. We use different products that 
				are more effective removing what our pets have left behind.</p>
			</div>
			<div class="col-md-12 add-prices text-center">
				<h4><a href="/main/contact_us" target="_blank">Contact Us for Estimate</a></h4>
			</div>
			<div class="col-md-12 add-checkbox text-center">
				<input type="checkbox" name="pet_hair_removal" value="Pet Hair Removal"
<?php 			if($this->session->userdata("pet_hair_removal") !== FALSE):?>
					checked="checked"
<?php 			endif; ?>
				>
				<label>Add Pet Hair Removal</label> 
			</div>
		</div>
	</div>
	<div class="row">
		<div class="col-sm-offset-2 col-sm-8 col-md-offset-3 col-md-6 add-services add-services-last">
			<div class="col-md-12 service-name">
				<h3 class="text-center ">Exterior Trim Restoration</h3>
			</div>
			<div class="col-md-12 add-description">
				<p>If your exterior's plastic trim is starting to fade (window trim, rocker panels, etc.), then this service is for you. We restore all the exterior plastic trim to their
				original shine.</p>
			</div>
			<div class="col-md-12 add-prices text-center">
				<h4><a href="/main/contact_us" target="_blank">Contact Us for Estimate</a></h4>
			</div>
			<div class="col-md-12 add-checkbox text-center">
				<input type="checkbox" name="exterior_trim" value="Exterior Trim Restoration"
<?php 			if($this->session->userdata("exterior_trim") !== FALSE):?>
					checked="checked"
<?php 			endif; ?>
				> 
				<label>Add Exterior Trim Restoration</label> 
			</div>
		</div>
	</div>
	<div class="row">
		<div class="col-sm-offset-2 col-sm-8 col-md-offset-3 col-md-6 add-services">
			<div class="col-md-12 service-name">
				<div id="submit-add" class = "add-btn-container text-center">
					<button type="submit" class="add-btn">Continue to Request Appointment</button>
				</div>
			</div>
		</div>
	</div>
	</form>
<?php $this->load->view("/templates/footer") ?>