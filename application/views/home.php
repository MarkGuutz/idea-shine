<?php $this->load->view("/templates/header") ?>
	<link href='http://fonts.googleapis.com/css?family=Karma:600' rel='stylesheet' type='text/css'>
	<link rel="stylesheet" type="text/css" href="/assets/css/home.css">
</head>
<?php $this->load->view("/templates/navbar") ?>
<?php if($this->session->flashdata('success') == TRUE): ?>
	<div class="row status-update">
		<span class = "success_prompt"><?= $this->session->flashdata('success')?></span>
	</div>
<?php endif; ?>
	<div class="row">
		<div class="col-md-12 body">
			<img class="main-body-pic" src='/assets/images/home/main-body-pic-home.jpg' alt='Ideal Shine Main Home Page Pic'>
			<img class="xs-screen-only" src='/assets/images/home/alt-body-home.jpg' alt='Ideal Shine Main Home Page Mobile'>
			<div class="see-packages">
				<a href="/prices-services">See Packages Starting at $60</a>
			</div>
			<div class="make-appt">
				<a href="/request-mobile-detailing-appointment-contact">Request an Appointment</a>
			</div>
		</div>
	</div>
	<div class="row xs-screen-only">
		<div class="col-xs-12 see-packages-xs">
			<a href="/prices-services">See Packages Starting at $60</a>
		</div>
		<div class="col-xs-12 make-appt-xs">
			<a href="/request-mobile-detailing-appointment-contact">Request an Appointment</a>
		</div>
	</div>
	<div class="row mid-body-container">
		<div class="col-xs-12 col-sm-12 col-md-12 mid-body">
			<div class="content-container">
				<div class="divider1">
					<h4>SOUTH BAY'S MOBILE DETAILER</h4>
				</div>
			</div>
			<img src="/assets/images/home/south-bay-map.png">
		</div>
	</div>
	<div class="row">
		<div class="col-sm-4 col-md-4 bottom-body">
			<div class="content-container">
				<a href="/about-ideal-shine">
					<div class="divider">
						<h4>OUR STORY</h4>
					</div>
				</a>
			</div>
			<img src='/assets/images/home/about-ideal-shine-home.jpg' alt="About Ideal Shine Mobile Detailing">
			<div class="bottom-body-p">
				<p></p>
				<a href="/about-ideal-shine">About Ideal Shine</a>
			</div>
		</div>
		<div class="col-sm-4 col-md-4 bottom-body">
			<div class="content-container">
				<a href="/customers-cars">
					<div class="divider">
						<h4>CUSTOMER'S CARS</h4>
					</div>
				</a>
			</div>
			<img src='/assets/images/home/testimonial-home.jpg' alt="Andrew's Mobile Detailing Testimonial">
			<div class="bottom-body-p">
				<p></p>
				<a href="/customers-cars">Andrew's Story</a>
			</div>
		</div> 
		<div class="col-sm-4 col-md-4 bottom-body">
			<div class="content-container">
				<a href="/mobile-detailing-faqs">
					<div class="divider">
						<h4>95% LESS WATER</h4>
					</div>
				</a>
			</div>
			<img src='/assets/images/home/faqs-waterless-wash-home.jpg' alt="FAQs Waterless Wash">
			<div class="bottom-body-p">
				<p></p>
				<a href="/mobile-detailing-faqs">How We Do It</a>
			</div>
		</div>  
	</div>
<?php $this->load->view("/templates/footer") ?>