<?php $this->load->view("/templates/header") ?>
<link href='http://fonts.googleapis.com/css?family=Karma:600' rel='stylesheet' type='text/css'>
<style type="text/css">
	.body img, .sub-body img{
		width: 100%;
	}

	.sub-body, .body{
		padding: 0px;
	}

	.row{
		margin: 0px
	}
	
	.see-packages a, .make-appt a{
		color:white;
		text-decoration: none;
		border: 2px solid #fff;
		padding: 7px 30px;
		text-align: center;
		font-size: 1.5em;
		background:rgba(0,0,0,0.25);
		font-family: 'Karma', serif;
		transition: .5s;
	}

	.see-packages a:hover, .make-appt a:hover{
		border-radius: 10px;
		padding: 10px 40px;
		background:rgba(0,0,0,0.45);
		transition: .5s;
	}

	.see-packages a:hover{
		border: 2px solid #18829C;
	}

	.make-appt a:hover{
		border: 2px solid #E88E3B;
	}

	.make-appt{
		position:absolute;
		top: 90%;
		left:60%;
	}

	.see-packages{
		position: absolute;
		top: 90%;
		left:15%;
	}	
/*****************************************  Sub Body ******************************************/ 
	.sub-body:hover .sub-body-p, .sub-body:hover .sub-body-p p{
		visibility: hidden;
	}

	.sub-body-p {
		width: 100%;
		height: 100%;
		position: absolute;
		top:0;
		left:0;
		text-align: center;
	}

	.sub-body-p p{
		font-family: 'Karma', serif;
		font-size: 20px;
		color: white;
		background:rgba(0,0,0,0.35);
		margin-top: 27%;
	}

	.sub-body-link{
		width: 100%;
		height: 100%;
		position: absolute;
		top:0;
		left:0;
		text-align: center;
		visibility: hidden;
	}

	.sub-body-link h1{
		margin-top: 27%;
	}

	.sub-body:hover .sub-body-link{
		visibility: visible;
		background: rgba(0,0,0,0.55);
		transition: .5s;
	} 

	.sub-body:hover .sub-body-link a{
		visibility: visible;
		transition: .5s;
		font-size: 25px;
		color: white;
		background:rgba(0,0,0,0.75);
		padding: 5px 30px 10px 30px;
		border: 1px solid white;
	}

	.sub-body-link a:hover{
		border-radius: 8px;
		text-decoration: underline;
	}
</style>
<?php $this->load->view("/templates/navbar") ?>
	<div class="row">
		<div class="col-md-12 body">
			<img src='/assets/pictures/body.jpg' alt='body-img'>
			<div class="see-packages">
				<a href="/main/prices_services">See Packages Starting at $50</a>
			</div>
			<div class="make-appt">
				<a href="/appointment/contact">Make an Appointment</a>
			</div>
		</div>
	</div>
	<div class="row">
		<div class="col-sm-4 col-md-4 sub-body">
			<img src='/assets/pictures/left-sub-body.jpg' alt="">
			<div class="sub-body-p">
				<p>10 Years of Detailing Experience</p>
			</div>
			<div class="sub-body-link">
				<h1><a href="/main/about_us">About Ideal Shine</a></h1>
			</div>
		</div>
		<div class="col-sm-4 col-md-4 sub-body">
			<img src='/assets/pictures/left-sub-body.jpg' alt="">
			<div class="sub-body-p">
				<p>"I was surprised when they.."</p>
			</div>
			<div class="sub-body-link">
				<h1><a href="/main/testimonials">See Blah's Story</a></h1>
			</div>
		</div> 
		<div class="col-sm-4 col-md-4 sub-body">
			<img src='/assets/pictures/left-sub-body.jpg' alt="">
			<div class="sub-body-p">
				<p>We Use 95% Less Water</p>
			</div>
			<div class="sub-body-link">
				<h1><a href="/main/faqs">Learn More</a></h1>
			</div>
		</div>  
	</div>
<?php $this->load->view("/templates/footer") ?>