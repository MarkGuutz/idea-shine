<html lang="en">
<head>
	<title>Appointment Request Summary</title>
</head>
<style type="text/css">
	table{
		margin-left: auto;
		margin-right: auto;
		padding-left: 25px; 
	}

	p{
		font-size: 16px;
	}

	table td{
		padding: 15px;
		font-size: 16px;
	}

	.disclaimer {
		background-color: #e8e8e8;
		color: #7c7b7b;
		border-top: 1px #4b4b4b solid;
		font-size: 12px;
	}

	.greetings, .closing, .signature{
		margin-left: 25px;
	}

	.closing, .signature{
		margin-top: 25px;
	}

	.signature{
		margin-bottom: 70px;
	}
</style>
<body>
	<div class="greetings">
		<p>Thank you <?= $this->session->userdata('first_name')?> for requesting an appointment!</p>
		<p>We have received your appointment request and are reviewing it now. We will contact you within 24 hours 
		to confirm the date, time, and price.</p>
		<p>Below is a summary of the information that you submitted:</p>
	</div>
	<table>
		<tr>
			<td>First Name: </td>
			<td> <?= $this->session->userdata('first_name')?></td>
		</tr>
		<tr>
			<td>Last Name: </td> 
			<td> <?= $this->session->userdata('last_name')?></td>
		</tr>
		<tr>
			<td>Phone Number: </td> 
			<td> <?= $this->session->userdata('phone_no')?></td>
		</tr>
		<tr>
			<td>Email: </td>
			<td> <?= $this->session->userdata('email')?></td>
		</tr>
		<tr>
			<td>Make: </td>
			<td> <?= $this->session->userdata('make')?></td>
		</tr>
		<tr>
			<td>Model: </td> 
			<td> <?= $this->session->userdata('model')?></td>
		</tr>
		<tr>
			<td>Year: </td>
			<td> <?= $this->session->userdata('year')?></td>
		</tr>
<?php 	if (!empty($this->session->userdata('vehicle_additional'))):?>
		<tr> 
			<td>Additional Vehicle Info: </td>
			<td> <?= $this->session->userdata('vehicle_additional')?></td>
		</tr>
<?php endif; ?>
		<tr>
			<td>Date: </td> 
			<td> <?= $this->session->userdata('date')?></td>
		</tr>
		<tr>
			<td>Time: </td> 
			<td> <?= $this->session->userdata('time')?></td>
		</tr>
		<tr>
			<td>Package: </td> 
			<td> <?= $this->session->userdata('package')?></td>
		</tr>
		<tr>
			<td>Street: </td> 
			<td> <?= $this->session->userdata('street')?></td>
		</tr>
		<tr>
			<td>City: </td> 
			<td> <?= $this->session->userdata('city')?></td>
		</tr>
		<tr>
			<td>Zip: </td> 
			<td> <?= $this->session->userdata('zip')?></td>
		</tr>
<?php if (!empty($this->session->userdata('appt_additional'))): ?>
		<tr>
			<td>Additional Appt. Info: </td>
			<td> <?= $this->session->userdata('appt_additional')?></td>
		</tr>
<?php endif;?>
<?php if (!empty($this->session->userdata("deep_clean")) || !empty($this->session->userdata("headlight_restoration")) || !empty($this->session->userdata("pet_hair_removal")) || !empty($this->session->userdata("exterior_trim"))): ?>
		<tr>
			<td>Additional Service(s):</td>
<?php if (!empty($this->session->userdata("deep_clean"))): ?>
			<td><?=$this->session->userdata("deep_clean")?></td>
<?php endif;?>
<?php if (!empty($this->session->userdata("headlight_restoration"))): ?>
			<td><?=$this->session->userdata("headlight_restoration")?></td>
<?php endif;?>
<?php if (!empty($this->session->userdata("pet_hair_removal"))): ?>
			<td><?=$this->session->userdata("pet_hair_removal")?></td>
<?php endif;?>
<?php if (!empty($this->session->userdata("exterior_trim"))): ?>
			<td><?=$this->session->userdata("exterior_trim")?></td>
<?php endif;?>
		</tr>
<?php endif;?>
	</table>
	<div class="closing">
		<p>If there are any changes to the information that you have submitted or if you have any questions, please contact us at 
		<p><a href="tel:1-408-207-2147">408-207-2147</a></p>
		<p>or 
		<p><a href="mailto:idealshine@idealshinedetailing.com?Subject=Contact%20Inquiry" target="_top">idealshine@idealshinedetailing.com</a>.</p>
		</p>
	</div>
	<div class="signature">
		<p>Thanks,</p>
		<p>Daniel Cortez</p>
		<p>Ideal Shine Mobile Detailing</p>
	</div>
	<p class="disclaimer">
		This email transmitted with it are confidential and intended solely for the use of the individual or entity to whom they are addressed. 
		This message contains confidential information and is intended only for the 
		individual named. If you are not the named addressee you should not disseminate, distribute or copy this e-mail. Please notify the sender immediately 
		by e-mail if you have received this e-mail by mistake and delete this e-mail from your system. If you are not the intended recipient you are notified 
		that disclosing, copying, distributing or taking any action in reliance on the contents of this information is strictly prohibited.
	</p>
</body>
</html>