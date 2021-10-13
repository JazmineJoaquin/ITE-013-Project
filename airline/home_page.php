<?php
	session_start();
?>
<html>
	<head>
		<title>
			Welcome to Flightly
		</title>
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
				<li><a href="index.html"><i class="fa fa-home" aria-hidden="true"></i> Home</a></li>
				<li>
					<?php
						if(isset($_SESSION['login_user'])&&$_SESSION['user_type']=='Customer')
						{
							echo "<a href=\"book_tickets.php\"><i class=\"fa fa-ticket\" aria-hidden=\"true\"></i> Book Tickets</a>";
						}
						else if(isset($_SESSION['login_user'])&&$_SESSION['user_type']=='Administrator')
						{
							echo "<a href=\"admin_ticket_message.php\"><i class=\"fa fa-ticket\" aria-hidden=\"true\"></i> Book Tickets</a>";
						}
						else
						{
							echo "<a href=\"login_page.php\"><i class=\"fa fa-ticket\" aria-hidden=\"true\"></i> Book Tickets</a>";
						}
					?>
				</li>
				<li><a href="home_page.php"><i class="fa fa-plane" aria-hidden="true"></i> About Us</a></li>
				<li><a href="contact.php"><i class="fa fa-phone" aria-hidden="true"></i> Contact Us</a></li>
				<li><a href="pnrall.php"><i class="fa fa-ticket" aria-hidden="true"></i> Check PNR </a></li>

				<li>
					<?php
						if(isset($_SESSION['login_user'])&&$_SESSION['user_type']=='Customer')
						{
							echo "<a href=\"customer_homepage.php\"><i class=\"fa fa-sign-in\" aria-hidden=\"true\"></i> Login</a>";
						}
						else if(isset($_SESSION['login_user'])&&$_SESSION['user_type']=='Administrator')
						{
							echo "<a href=\"admin_homepage.php\"><i class=\"fa fa-sign-in\" aria-hidden=\"true\"></i> Login</a>";
						}
						else
						{
							echo "<a href=\"login_page.php\"><i class=\"fa fa-sign-in\" aria-hidden=\"true\"></i> Login</a>";
						}
					?>
				</li>
			</ul>
		</div>
		
		<div class="container">
					<img class="image" src="homebg.jpeg" width=100%>
					<h3 class="welcome_text">Welcome to Flightly: <br> Booking Agency</h3>

			<div class="marquee"><marquee width="295px" direction="up" height="310px">
				<center>Weather Update
				<script src="https://apps.elfsight.com/p/platform.js" defer></script>
			<div class="elfsight-app-14fcea1a-dcd2-42e1-88f4-d5cf82a2587e"></div>
			</marquee></div></center>
			<div>
			<p class="test">Flightly assures its guests of GUARANTEED flights on all Philippine domestic destinations, but passengers are still advised to check their email notifications from time to time for any updates.</p>
			<p class="test1"> Check Promos Here:<br><a class="test1" href="contact.php">Flight Promos</a><br><br> Check Hotel Deals:<br><a class="test1" href="contact.php">Hotel Promos</a><br><br> Check Fares Here:<br><a class="test1" href="flightfares.html">Flight Fares</a></p>
					</div>

					
					</div>
					</div>
					
		<!--check out addling local host in links and other places

			shift login/logout buttons to right side
		-->
	</body>
</html>

<style>
	h3{
	
	color: #2F4675;
		position: relative
	}
.logo1{
    width: 150px;
    position: relative;
    top: 7px;
    left: 7px;
	
}
.image{
	position:absolute;
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
	color: #2F4675;
	font-size: 50px;
	font-family: "Trebuchet MS", Helvetica, sans-serif;
	margin-top: 3%;
	margin-left: 30%;
	text-align: center;
}
p.test {
  width: 11em; 
  border: 1.5px solid #F5F5F5;
  word-wrap: break-word;
  padding: 80px 50px 50px 50px;
  margin-left: 3%;
  border-radius: 5px;
  background: none;
 
  text-align: center;
  float: left;
  height:180px;
  position: absolute;
  top: 60%;
  backdrop-filter: blur(5px);

}
p.test1 {
  width: 11em; 
  border: 1.5px solid #F5F5F5;
  word-wrap: break-word;
  padding: 80px 50px 50px 50px;
  margin-left: 3%;
  border-radius: 5px;
  background:none;
 
  text-align: left;
  float: left;
  height:180px;
  position: absolute;
  top: 60%;backdrop-filter: blur(5px);
left: 25%;
}
.marquee{
	position: absolute;
	margin-top: 15.1%;
	margin-left: 65%;
	color: black;
	font-style: bold;
}
</style>