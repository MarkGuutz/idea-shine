<?php $this->load->view("/templates/header") ?>
	<link href='http://fonts.googleapis.com/css?family=Karma:600' rel='stylesheet' type='text/css'>
	<link rel="stylesheet" type="text/css" href="/assets/css/home.css">
</head>
<?php $this->load->view("/templates/navbar") ?>
	<div class="row">
		<div class="col-md-12 body">
			<img class="main-body-pic" src='/assets/images/home/main-body-pic-home.jpg' alt='Ideal Shine Main Home Page Pic'>
			<img class="xs-screen-only" src='/assets/images/home/alt-body-home.jpg' alt='Ideal Shine Main Home Page Mobile'>
			<div class="see-packages">
				<a href="/main/prices_services">See Packages Starting at $60</a>
			</div>
			<div class="make-appt">
				<a href="/appointment/contact">Make an Appointment</a>
			</div>
		</div>
	</div>
	<div class="row xs-screen-only">
		<div class="col-xs-12 see-packages-xs">
			<a href="/main/prices_services">See Packages Starting at $60</a>
		</div>
		<div class="col-xs-12 make-appt-xs">
			<a href="/appointment/contact">Make an Appointment</a>
		</div>
	</div>
	<div class="row">
		<div class="col-sm-4 col-md-4 bottom-body">
			<div class="content-container">
				<a href="/main/about_us">
				<div class="divider">
					<h4>About Ideal Shine</h4>
				</div>
				</a>
			</div>
			<img src='/assets/images/home/about-ideal-shine-home.jpg' alt="About Ideal Shine Mobile Detailing">
			<div class="bottom-body-p">
				<p>10 Years of Detailing Experience</p>
				<a href="/main/about_us">What's Ideal Shine</a>
			</div>
		</div>
		<div class="col-sm-4 col-md-4 bottom-body">
			<div class="content-container">
				<a href="/main/testimonials">
					<div class="divider">
						<h4>Testimonials</h4>
					</div>
				</a>
			</div>
			<img src='/assets/images/home/testimonial-home.jpg' alt="Andrew's Mobile Detailing Testimonial">
			<div class="bottom-body-p">
				<p>"I was surprised when they.."</p>
				<a href="/main/testimonials">See Andrew's Story</a>
			</div>
		</div> 
		<div class="col-sm-4 col-md-4 bottom-body">
			<div class="content-container">
				<a href="/main/faqs">
					<div class="divider">
						<h4>FAQs</h4>
					</div>
				</a>
			</div>
			<img src='/assets/images/home/faqs-waterless-wash-home.jpg' alt="FAQs Waterless Wash">
			<div class="bottom-body-p">
				<p>We Use 95% Less Water</p>
				<a href="/main/faqs">How We Do It</a>
			</div>
		</div>  
	</div>
<?php $this->load->view("/templates/footer") ?>