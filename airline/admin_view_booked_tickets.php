<?php
	session_start();
?>
<html>
	<head>
		<title>
			View Booked Tickets
		</title>
		<style>
			input {
    			border: 1.5px solid #030337;
    			border-radius: 4px;
    			padding: 7px 30px;
			}
			input[type=submit] {
				background-color: #030337;
				color: white;
    			border-radius: 4px;
    			padding: 7px 45px;
    			margin: 0% 15.8%
			}
			input[type=date] {
				border: 1.5px solid #030337;
    			border-radius: 4px;
    			padding: 5.5px 44.5px;
			}
		</style>
		<link rel="stylesheet" type="text/css" href="css/style.css"/>
		<link rel="stylesheet" href="font-awesome-4.7.0\css\font-awesome.min.css">
	</head>
	<body>
	<img class="logo1" src="flightlylogo.jpg"/> 
		<h1 id="title">
			Flightly
		</h1>
		<div>
			<ul>
				<li><a href="admin_homepage.php"><i class="fa fa-home" aria-hidden="true"></i> Home</a></li>
				<li><a href="admin_homepage.php"><i class="fa fa-desktop" aria-hidden="true"></i> Dashboard</a></li>
				<li><a href="logout_handler.php"><i class="fa fa-sign-out" aria-hidden="true"></i> Logout</a></li>
			</ul>
		</div>
		<form action="admin_view_booked_tickets_form_handler.php" method="post">
			<center>
			<h2>VIEW LIST OF BOOKED TICKETS</h2>
			<div>
			<table cellpadding="5">
				<tr>
					<td class="fix_table">Enter Flight No.</td>
					<td class="fix_table">Enter Departure Date</td>
				</tr>
				<tr>
					<td class="fix_table"><input type="text" name="flight_no" required></td>
					<td class="fix_table"><input type="date" name="departure_date" required></td>
				</tr>
			</table>
			<br>
			<br>
			<input type="submit" value="Submit" name="Submit">
			</div>
		</form>
		<center>
	</body>
</html>

<style>
.logo1{
    width: 150px;
    position: relative;
    top: 7px;
    left: 7px;
	
}

#title{
	display: inline;
	color: #2F4675;
	font-family: "Trebuchet MS", Helvetica, sans-serif;
	margin-left: 2%;
	
}

ul {
	list-style-type: none;
	margin: 0;
	padding: 0;
	overflow: hidden;
    background-color: #06090F;
}
.welcome_text{
	display: inline;
	color: white;
	font-size: 50px;
	font-family: "Trebuchet MS", Helvetica, sans-serif;
	margin-top: 3%;
	margin-left: 35%;
	text-align: center;
}
</style>