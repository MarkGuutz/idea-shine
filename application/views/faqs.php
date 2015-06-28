<?php $this->load->view("/templates/header") ?>
<style type="text/css">
	.faq-index ul{
		list-style-type: none;
	}

	.faq-index li{
		margin-top: 30px;
	}

	.contact-link{
		margin: 50px 0px 50px 0px;
	}

	.q-a_section h2{
		font-weight: bold;
	}

	.q-a_row{
		margin-bottom: 50px;
	}

	.q-a_section h3{
		font-weight: bold;
		font-family: 'Karma', serif;
	}	

	.q-a_section h3:not(:first-of-type), hr{
		margin: 65px 0px 20px 0px;
	}

	.q-a_section h3:first-of-type{
		margin-top: 40px;
	}	
</style>
<?php $this->load->view("/templates/navbar") ?>
	<div class="container-fluid location-header">
		<h3>FAQs</h3>
	</div>
	<div class="row faq-index">
		<div class="col-xs-offset-1 col-xs-10 col-sm-offset-2 col-sm-8 col-md-offset-2 col-md-8">
			<p class="contact-link">If you don't see a question that you have please contact us <a href="/main/contact_us">here</a>.</p>
			<h4><a href="#waterless-sec">Waterless Wash</a></h4>
			<ul>
				<li><a href="#waterless-1">Do you still use water? </a></li>
				<li><a href="#waterless-2">Why do you use waterless products?</a></li>
				<li><a href="#waterless-3">Will I receive the same quality with waterless wash? </a></li>
			</ul>
			<h3><a href="#appointment-sec">Appointments</a></h3>
			<ul>
				<li><a href="#appointment-1">How does requesting an appointment online work?</a></li>
				<li><a href="#appointment-2">What happens during the appointment?</a></li>
			</ul>
			<hr>
		</div>
	</div>
	<div class="row q-a_row">
		<div class="col-xs-offset-1 col-xs-10 col-sm-offset-1 col-sm-9 col-md-offset-2 col-md-8 q-a_section">
			<h2 id="waterless-sec">Waterless Wash</h2>
			<h3 id="waterless-1">Do you still use water?</h3>
				<p>Yes, but we use 95% less water than a traditional car wash. Our waterless wash uses less than a gallon of water 
				versus a typical car wash in your driveway that can use up to 100 gallons of water.</p>
			<h3 id="waterless-2">Why do you use waterless products?</h3>
				<p>Due to the severity of the current drought in California, we wanted to reduce our water use, but still be able
				deliver high quality detailing services. After countless hours researching products and techniques, we are proud
				to have found a way to meet the needs of our customers and the environment.</p>
			<h3 id="waterless-3">Will I receive the same quality with waterless wash?</h3>
				<p>Yes, we decided to use waterless solutions because we found that it didn't reduce the quality of the wash. The
				waterless product that we use has a built in wax and clay, which does not harm the paint. We would not use any product
				on our customers' vehicles that we wouldn't use on our own!</p>
		</div>
	</div>
	<div class="row q-a_row">
		<div class="col-xs-offset-1 col-xs-10 col-sm-offset-1 col-sm-9 col-md-offset-2 col-md-8 q-a_section">
			<h2 id="appointment-sec">Appointments</h2>
			<h3 id="appointment-1">How does requesting an appointment online work?</h3>
				<p>After you complete the online appointment request form, we will contact within 24 hours to confirm the details of your
				appointment. The follow up consits of confirming the location, date, time, and price. If there is a scheduliing conflict,
				we will work with you to set up an alternate date and time.</p>
			<h3 id="appointment-2">What happens during the appointment?</h3>
				<p>After we confirmed the appointment details with you, we will meet at the location, date, and time that you specified. We do
				a walkaround before the wash. After that you can go relax, while we detail your car. We will contact you once we are finished and
				you can take a look at your shiny vehicle.
				</p>
			<p class="contact-link">Still have questions? Contact us <a href="/main/contact_us">here</a>.</p>
		</div>
	</div>
<?php $this->load->view("/templates/footer") ?>