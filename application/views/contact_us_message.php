<html lang="en">
<head>
	<meta charset="utf-8">
	<title>Appointment Request Summary</title>
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" type="text/css" href="/assets/css/appointment_views/appointment_views.css">
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.4/css/bootstrap.min.css">
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.4/css/bootstrap-theme.min.css">
	<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.11.2/jquery.min.js"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.4/js/bootstrap.min.js"></script>
</head>
<style type="text/css">
	.label_heading{
		font-size: 14px;
	}

	p {
		font-size: 25px;
	}
</style>
<body>
	<p> <span class = "label_heading col-xs-offset-3 col-sm-offset-3 col-md-offset-3 col-md-1"> First Name: </span> <span class = 'col-xs-offset-1 col-sm-offset-1 col-md-offset-1'> <?= $this->session->userdata("info")["first_name"];?></span> </p>
	<p> <span class = "label_heading col-xs-offset-3 col-sm-offset-3 col-md-offset-3 col-md-1"> Last Name: </span> <span class = 'col-xs-offset-1 col-sm-offset-1 col-md-offset-1'><?= $this->session->userdata("info")["last_name"];?></span> </p>
	<p> <span class = "label_heading col-xs-offset-3 col-sm-offset-3 col-md-offset-3 col-md-1"> Phone Number: </span> <span class = 'col-xs-offset-1 col-sm-offset-1 col-md-offset-1'><?= $this->session->userdata("info")["phone_no"];?></p>
	<p> <span class = "label_heading col-xs-offset-3 col-sm-offset-3 col-md-offset-3 col-md-1"> Email: </span> <span class = 'col-xs-offset-1 col-sm-offset-1 col-md-offset-1'><?= $this->session->userdata("info")["email"];?></span> </p>
	<p> <span class = "label_heading col-xs-offset-3 col-sm-offset-3 col-md-offset-3 col-md-1"> Message: </span> <span class = 'col-xs-offset-1 col-sm-offset-1 col-md-offset-1'><?= $this->session->userdata("info")["message"];?></span> </p>
</body>
</html>