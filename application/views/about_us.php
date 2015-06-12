<?php $this->load->view("/templates/header") ?>
<style type="text/css">
	.pic-body img{
		width: 100%;
		margin-top: 50px;
	}

	.main-body h3{
		margin: 45px 0px 15px 0px;
		text-align: center;
		font-weight: bold;
	}

	.main-body{
		margin-bottom: 70px;
	}

	.bold-statement{
		font-family: 'Karma', serif;
		font-size: 23px;
		font-weight: bold;
	}

	p{
		line-height: 300%;
	}

</style>
<?php $this->load->view("/templates/navbar") ?>
	<div class="container-fluid location-header">
		<h3>About Ideal Shine</h3>
	</div>
	<div class="row">
		<div class="col-md-offset-2 col-md-8 pic-body">
			<img src="/assets/pictures/car-wash-guy.png">
		</div>
	</div>
	<div class="row">
		<div class="col-xs-offset-1 col-xs-10 col-sm-offset-1 col-sm-9 col-md-offset-2 col-md-8 main-body">
			<h3>One Man, One Mission</h3>
			<p>Ideal Shine was founded in 2014 by me, Daniel Cortez. I started this business because I wanted to share my
			<span class="bold-statement"> passion for detailing </span>with the Bay Area. I have over <span class="bold-statement">10 years of experience</span> 
			detailing cars, trucks, and motorcycles. What started as a hobby has become a mission for me. Ideal Shine's goal is to provide
			mobile detailing services that is 
			<span class="bold-statement"> convenient</span>, <span class="bold-statement">affordable</span>, and 
			<span class="bold-statement">environmentally conscious</span> services. We do this by detailing your vehicle at a location you decide, making appointments
			easy through the phone or our <a href="/appointment/contact"> online appointment request</a>, and offer <a href="/main/prices_services"> affordable packages 
			starting at $50</a>. We are proud to use cleaning solutions the enable us to drastically <span class="bold-statement">reduce our water use by 95%</span>, but
			with the <span class="bold-statement">same quality</span> as traditional washes.
			</p>
		</div>
	</div>
<?php $this->load->view("/templates/footer") ?>