<div class="row center-text appt-process-row">
		<div class="col-sm-12 col-md-offset-1 col-md-11 appt-process1">
		<div class="col-xs-3 col-sm-2 col-md-2 appt-process">
<?php 	if($this->session->userdata("contact_info") == "complete"):?>
			<a class="section-complete-first" href="/request-mobile-detailing-appointment-contact">Contact</a>
			<a href="/request-mobile-detailing-appointment-contact"><div class="xs-container xs-complete">
				<span class="glyphicon glyphicon-user"></span>
			</div></a>
<?php	else: ?>
			<a class="section-incomplete-first" href="#">Contact</a>
			<a href="#"><div class="xs-container xs-incomplete">
				<span class="glyphicon glyphicon-user"></span>
			</div></a>
<?php 	endif; ?>
		</div>
		<div class="col-xs-3 col-sm-4 col-md-3 appt-process">
<?php 	if($this->session->userdata("vehicle_info") == "complete"):?>
			<a class="section-complete" href="/request-mobile-detailing-appointment-vehicle-service">Vehicle &amp; Package</a>
			<a href="/request-mobile-detailing-appointment-vehicle-service"><div class="xs-container xs-complete">
				<img src='/assets/images/glyphicons-6-car.png'>
			</div></a>
<?php	else: ?>
			<a class="section-incomplete" href="#">Vehicle &amp; Package</a>
			<a href="#"><div class="xs-container xs-incomplete">
				<img src='/assets/images/glyphicons-6-car.png'>
			</div></a>
<?php 	endif; ?>
		</div>
		<div class="col-xs-3 col-sm-3 col-md-3 appt-process">
<?php 	if($this->session->userdata("appt_info") == "complete"):?>
			<a class="section-complete" href="/request-mobile-detailing-appointment-appt-details">Time &amp; Location</a>
			<a href="/request-mobile-detailing-appointment-appt-details"><div class="xs-container xs-complete">
				<span class="glyphicon glyphicon-time"></span>
			</div></a>
<?php	else: ?>
			<a class="section-incomplete" href="#">Time &amp; Location</a>
			<a href="#"><div class="xs-container xs-incomplete">
				<span class="glyphicon glyphicon-time"></span>
			</div></a>
<?php 	endif; ?>
		</div>
		<div class="col-xs-3 col-sm-2 col-md-2 appt-process">
<?php 	if($this->session->userdata("appt_info") == "complete"):?>
			<a class="section-complete-last" href="/request-mobile-detailing-appointment-summary">Summary</a>
			<a href="/request-mobile-detailing-appointment-summary"><div class="xs-container xs-complete">
				<span class="glyphicon glyphicon-list-alt"></span>
			</div></a>
<?php	else: ?>
			<a class="section-incomplete-last" href="#">Summary</a>
			<a href="#"><div class="xs-container xs-incomplete">
				<span class="glyphicon glyphicon-list-alt"></span>
			</div></a>
<?php 	endif; ?>
		</div>
		</div>
</div>