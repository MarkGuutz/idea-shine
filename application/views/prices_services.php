<?php $this->load->view("/templates/header") ?>
<style type="text/css">
	.package-col{
		border: 1px black solid;
		margin-top: 30px;
		padding: 0 0 40px 0;
	}

	.package-col h3{
		margin: 0 -15px;
		font-family: 'Karma', serif;
	}

	.package-col div:nth-child(2) h4{
		background-color: #F7F7F7;
		padding: 10px;
		margin: 0px -15px;
	}

	.package-col, .prices-col h4{
		text-align: center;
		margin-bottom: 25px;
	}

	.services-col{
		text-align: left;
		margin: 20px 0px;
	}

	li{
		line-height: 300%;
		font-size: 10px;
	}

	table{
		margin: 0 auto;
	}

	td:nth-child(odd){
		padding-right: 60px;
	}

	td{
		line-height: 270%;
	}

	.appt-btn{
		margin-top: 40px;
	}
/*Clssic Column */
	.classic-col h3{
		border-bottom: solid 1px black;
	}

/*Plus Column*/
	.plus-col{
		margin-bottom: 40px;
	}

	.plus-col h3{
		background-color: black;
		color: white;
	}
/*Premium column */
	.premium-col h3{
		background-color: #E88E3B;
		color: white;
	}	
/*Premium column */
	.ideal-col h3{
		background-color: #18829C;
		color: white;
	}

	.services-col, .prices-col{
		display: none;
	}	

	.services-head, .prices-head{
		cursor: hand;
	}
</style>
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
		<h3>Prices and Services</h3>
	</div>
	<div class="row">
		<div class="col-sm-6 col-md-3 classic-col package-col">
			<div class="col-md-12">
				<h3>Classic</h3>
			</div>
			<div class="col-md-12">
				<h4>Starting at $50</h4>
			</div>
			<div class="col-md-12 completion-time">
				<h5>Approximate time to complete: 1 Hour</h5>
			</div>
			<div class="col-md-12">
				<h4 class="services-head">Services</h4>
				<div class="services-col">
					<h5>Exterior</h5>
					<ul>
						<li><span>Waterless wash and dry</span></li>
						<li><span>Wheels and tires</span></li>
					</ul>
					<h5>Interior</h5>
					<ul>
						<li><span>Interior windows</span></li>
						<li><span>Dashboard</span></li>
						<li><span>Vacuum</span></li>
					</ul>
				</div>
			</div>
			<div class="col-md-12">
				<h4 class="prices-head">Prices</h4>
				<div class="prices-col">
					<table>
						<tr>
							<td>Coupe/Sedan:</td>
							<td>$50</td>
						</tr>
						<tr>
							<td>Mid-size truck/SUV:</td>
							<td>$60</td>
						</tr>
						<tr>
							<td>Full-size truck/SUV:</td>
							<td>$70</td>
						</tr>
						<tr>
							<td>Full-size van:</td>
							<td>$80</td>
						</tr>
						<tr>
							<td>Large SUV:</td>
							<td>$80</td>
						</tr>
					</table>
				</div>
			</div>
			<form action="/main/prices_services" method="post">
				<input class="appt-btn" type="submit" value="Schedule Classic Shine">
				<input type="hidden" name="package" value="Classic Shine">
			</form>
		</div>
		<div class="col-sm-6 col-md-3 plus-col package-col">
			<div class="col-md-12">
				<h3>Plus</h3>
			</div>
			<div class="col-md-12">
				<h4>Starting at $70</h4>
			</div>
			<div class="col-md-12 completion-time">
				<h5>Approximate time to complete: 2.5 Hours</h5>
			</div>
			<div class="col-md-12">
				<h4 class="services-head">Services</h4>
				<div class="services-col">
				<h5>Exterior</h5>
					<ul>
						<li><span>Waterless wash and dry</span></li>
						<li><span>Wheels and tires</span></li>
						<li><span>Wax and glaze</span></li>
					</ul>
				<h5>Interior</h5>
					<ul>
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
				<h4 class="prices-head">Prices</h4>
				<div class="prices-col">
					<table>
						<tr>
							<td>Coupe/Sedan:</td>
							<td>$70</td>
						</tr>
						<tr>
							<td>Mid-size truck/SUV:</td>
							<td>$80</td>
						</tr>
						<tr>
							<td>Full-size truck/SUV:</td>
							<td>$90</td>
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
			<form action="/main/prices_services" method="post">
				<input class="appt-btn" type="submit" value="Schedule Plus Shine">
				<input type="hidden" name="package" value="Plus Shine">
			</form>
		</div>
		<div class="col-sm-6 col-md-3 premium-col package-col">
			<div class="col-md-12">
				<h3>Premium</h3>
			</div>
			<div class="col-md-12">
				<h4>Starting at $100</h4>
			</div>
			<div class="col-md-12 completion-time">
				<h5>Approximate time to complete: 3 Hours</h5>
			</div>
			<div class="col-md-12">
				<h4 class="services-head">Services</h4>
				<div class="services-col">
					<h5>Exterior</h5>
					<ul>
						<li><span class="">Wheels and tires</span></li>
						<li><span>Highly concentrated waterless wash and hand dry </span></li>
						<li><span>Wax and seal</span></li>
					</ul>
					<h5>Interior</h5>
					<ul>
						<li><span>Interior windows</span></li>
						<li><span>Dashboard</span></li>
						<li><span>Door panels</span></li>
						<li><span>Center console</span></li>
						<li><span>Cup holders</span></li>
						<li><span>Vacuum</span></li>
						<li><span>Vents</span></li>
						<li><span>Carpet shampoo</span></li>
					</ul>
				</div>
			</div>
			<div class="col-md-12">
				<h4 class="prices-head">Prices</h4>
				<div class="prices-col">
					<table>
						<tr>
							<td>Coupe/Sedan:</td>
							<td>$100</td>
						</tr>
						<tr>
							<td>Mid-size truck/SUV:</td>
							<td>$110</td>
						</tr>
						<tr>
							<td>Full-size truck/SUV:</td>
							<td>$120</td>
						</tr>
						<tr>
							<td>Full-size van:</td>
							<td>$130</td>
						</tr>
						<tr>
							<td>Large SUV:</td>
							<td>$130</td>
						</tr>
					</table>
				</div>
			</div>
			<form action="/main/prices_services" method="post">
				<input class="appt-btn" type="submit" value="Schedule Premium Shine">
				<input type="hidden" name="package" value="Premium Shine">
			</form>
		</div>
		<div class="col-sm-6 col-md-3 ideal-col package-col">
			<div class="col-md-12">
				<h3>Ideal</h3>
			</div>
			<div class="col-md-12">
				<h4>Starting at $140</h4>
			</div>
			<div class="col-md-12 completion-time">
				<h5>Approximate time to complete: 4 Hours</h5>
			</div>
			<div class="col-md-12">
				<h4 class="services-head">Services</h4>
				<div class="services-col">
					<h5>Exterior</h5>
					<ul>
						<li><span>Highly concentrated waterless wash and hand dry </span></li>
						<li><span>Wax and seal</span></li>
						<li><span>Wheels and tires with degreaser</span></li>
						<li><span>Polish</span></li>
						<li><span>Exhaust tips</span></li>
					</ul>
					<h5>Interior</h5>
					<ul>
						<span class="">
							<li><span>Interior windows</span></li>
							<li><span>Dashboard</span></li>
							<li><span>Door panels</span></li>
							<li><span>Center console</span></li>
							<li><span>Cup holders</span></li>
							<li><span>Vacuum</span></li>
							<li><span>Vents</span></li>
							<li><span>Carpet shampoo</span></li>
						</span>
						<li><span>Leather care</span></li>
						<li><span>Odor eliminator</span></li>
					</ul>
				</div>
			</div>
			<div class="col-md-12">
				<h4 class="prices-head">Prices</h4>
				<div class="prices-col">
					<table>
						<tr>
							<td>Coupe/Sedan:</td>
							<td>$140</td>
						</tr>
						<tr>
							<td>Mid-size truck/SUV:</td>
							<td>$150</td>
						</tr>
						<tr>
							<td>Full-size truck/SUV:</td>
							<td>$160</td>
						</tr>
						<tr>
							<td>Full-size van:</td>
							<td>$170</td>
						</tr>
						<tr>
							<td>Large SUV:</td>
							<td>$170</td>
						</tr>
					</table>
				</div>
			</div>
				<form action="/main/prices_services" method="post">
					<input class="appt-btn" type="submit" value="Schedule Ideal Shine">
					<input type="hidden" name="package" value="Ideal Shine">
				</form>
		</div>
	</div>
<?php $this->load->view("/templates/footer") ?>