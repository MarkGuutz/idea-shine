<div class="row appt-process-row">
		<div class="col-xs-3 col-sm-3 col-md-3 appt-process">
<?php 	if($this->session->userdata("contact_info") == "complete"):?>
			<a class="section-complete" href="/appointment/contact">1. Contact</a>
			<a href="/appointment/contact"><div class="xs-container xs-complete">
				<span class="glyphicon glyphicon-user"></span>
			</div></a>
<?php	else: ?>
			<a class="section-incomplete" href="#">1. Contact</a>
			<a href="#"><div class="xs-container xs-incomplete">
				<span class="glyphicon glyphicon-user"></span>
			</div></a>
<?php 	endif; ?>
		</div>
		<div class="col-xs-3 col-sm-3 col-md-3 appt-process">
<?php 	if($this->session->userdata("vehicle_info") == "complete"):?>
			<a class="section-complete" href="/appointment/vehicle">2. Vehicle &amp; Package</a>
			<a href="/appointment/vehicle"><div class="xs-container xs-complete">
				<img src='/assets/images/glyphicons-6-car.png'>
			</div></a>
<?php	else: ?>
			<a class="section-incomplete" href="#">2. Vehicle &amp; Package</a>
			<a href="#"><div class="xs-container xs-incomplete">
				<img src='/assets/images/glyphicons-6-car.png'>
			</div></a>
<?php 	endif; ?>
		</div>
		<div class="col-xs-3 col-sm-3 col-md-3 appt-process">
<?php 	if($this->session->userdata("appt_info") == "complete"):?>
			<a class="section-complete" href="/appointment/appt">3. Time &amp; Location</a>
			<a href="/appointment/appt"><div class="xs-container xs-complete">
				<span class="glyphicon glyphicon-time"></span>
			</div></a>
<?php	else: ?>
			<a class="section-incomplete" href="#">3. Time &amp; Location</a>
			<a href="#"><div class="xs-container xs-incomplete">
				<span class="glyphicon glyphicon-time"></span>
			</div></a>
<?php 	endif; ?>
		</div>
		<div class="col-xs-3 col-sm-3 col-md-3 appt-process">
<?php 	if($this->session->userdata("appt_info") == "complete"):?>
			<a class="section-complete" href="/appointment/details">4. Summary</a>
			<a href="/appointment/details"><div class="xs-container xs-complete">
				<span class="glyphicon glyphicon-list-alt"></span>
			</div></a>
<?php	else: ?>
			<a class="section-incomplete" href="#">4. Summary</a>
			<a href="#"><div class="xs-container xs-incomplete">
				<span class="glyphicon glyphicon-list-alt"></span>
			</div></a>
<?php 	endif; ?>
		</div>
	</div>