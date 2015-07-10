<html lang="en">
<head>
	<title>Appointment Request Summary</title>
</head>
<body>
	<p>  First Name: <?= $this->session->userdata("info")["first_name"]?></p>
	<p>  Last Name: <?= $this->session->userdata("info")["last_name"]?></p>
	<p>  Phone Number: <?= $this->session->userdata("info")["phone_no"]?></p>
	<p>  Email: <?= $this->session->userdata("info")["email"]?></p>
	<p>  Message: <?= $this->session->userdata("info")["message"]?></p>
</body>
</html>