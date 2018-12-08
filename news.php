<!DOCTYPE html>
<?php
require_once 'login.php';
$connection= new mysqli($db_hostname,$db_username,$db_password,$db_database);
if ($connection->connect_error) die ($connection->connect_error);

                        
                                       
                                                        ?>
<html lang='en'>
<head>
	<title>bootstrap project</title>
	<meta http-equiv='refresh' content='1000'>
	<meta charset="utf-8">
	<meta name='viewport' content='width=device-width, intial-scale=1'>
	<link rel='stylesheet' href='css/bootstrap.css'>
	<link rel='stylesheet' href='fontawesome/css/all.css'>
	<link rel='stylesheet' href='fontawesome/css/font-awesome.min.css'>
	<link rel='stylesheet' href='fontawesome/css/font-awesome.css'>
	<link rel='stylesheet' href='fontawesome/css/brands.css'>
	<link rel='stylesheet' href='css/bootstrap.min.css'>
	<link rel='stylesheet' href='fontawesome/css/brands.min.css'>
	<link rel='stylesheet' href='css/bootstrap-grid.css'>
	<link rel='stylesheet' href='css/bootstrap-grid.min.css'>
	<link rel='stylesheet' href='css/bootstrap-reboot.css'>
	<link rel='stylesheet' href='css/bootstrap-reboot.min.css'>
	<link rel='stylesheet' href='css/main.css'>
</head>
<body>
	<!--this codes creates the navigation bar with navigation items on it-->
	<nav class='navbar navbar-expand-sm justify-content-center fixed-top'>
		<h6 class='navbar-brand' href='#'><img src="images/logo.png" width=45em >Bethel Baptist Mission</h6>
		<ul class='navbar-nav'>
			<li class='nav-item active'> <a class='nav-link' href='index.php'>Home</a></li>
			<li class='nav-item'> <a class='nav-link' href='calender.php'>Calender of activities</a></li>
			<li class='nav-item'> <a class='nav-link' href='news.php'>Latest News</a></li>
			<li class='nav-item'> <a class='nav-link' href='registeration.php'>Join us</a></li>
			<li class='nav-item'> <a class='nav-link' href='admin.php'>Admin login</a></li>
		</ul>
	</nav>
	<header class='reg'>
		<div class='overlay2'></div>
			<div class='description1'>
				<h1>welcome<h1>
			<p>Bethel Baptist Mission - Iron City is a family that is working together 
			for the common good and the renewal of Christian faith. We launched on Easter 
			Sunday of 2009, planting congregations in Kasoa and Weija. Our vision 
			is not for people just to attend church, but to be the church, following Jesus’ command to go and make 
			disciples of all nations.</p>
			<h1>WHAT TO EXPECT</h1>
			<h4>COME AS YOU ARE<h4>
			<p>We are an informal and friendly church who accepts people as they are. There is no need to dress up unless it 
				makes you feel more comfortable.</p>
				<h4>CHILDRENS SERVICE</h4>
			<p>Our children’s ministry uses a state-of-art gadgets to teach the young children. After you register your 
			children, our team will be happy to help you find their class.</p>
			<h4>BIBLE STUDIES</h4>
			<p>Every Wednesday we have a weekly gathering of middle school and high school students. It’s an opportunity 
			for us to have fun, worship God, and discuss the Scriptures together.
			WEDNESDAYS 6:30-8:30 PM</p>
		</div>
	</header>
	<div class='background'>
	<div class='form1'>
			<h1></div>
				<div class='container'>
	<form class='reg-form' method='post' action='index.php'>
		<div class='info'><h3>Membership form</h3>
			<hr width=75%>
		<p><i>Please complete this form below to become a member of the Baptist family.<br> The fields marked with </i><b>*</b><i> are very vital and should not be skipped.</i></p>
		<hr width=75%>
	</div>
		<div class='row'>
		<div class='col-md-4'>
			<h6>First Name*<h6>
			<input class='form-input'type='text' name='firstname' placeholder='enter your first name here' size=35>
			<h6>Middle Name<h6>
			<input class='form-input'type='text' name='middlename' placeholder='enter your middle name here' size=35>
			<h6>Surname Name*<h6>
			<input class='form-input'type='text' name='surname' placeholder='enter your surname name here' size=35>
			<h6>Sex*<h6>
			<input class='form-input' type='radio' value='male' name='sex' checked>male
			<input class='form-input' type='radio' value='female' name='sex'>female

			<h6>Date of Birth*<h6>
			<input class='form-input'type='text' name='dob' placeholder='enter your dob here eg:06/05/1993' size=35>

		</div>
		<div class='col-md-4'>
			<h6>Place of Residence*<h6>
			<input class='form-input'type='text' name='por' placeholder='enter your place of residence here' size=35>
			<h6>Address<h6>
			<input class='form-input'type='text' name='address' placeholder='enter your residential address here' size=35>
			<h6>Home Town*<h6>
			<input class='form-input'type='text' name='hometown' placeholder='enter your hometown here' size=35>
			<h6>Region of Hometown<h6>
			<input class='form-input'type='text' name='rhometown' placeholder='enter your region of hometown here' size=35>
			<h6>Marital status<h6>
			<input class='form-input' type='radio' name='maritalstatus' checked > Married
			<input class='form-input' type='radio' name='maritalstatus'> Engaged
			<h6>No. Children<h6>
			<input class='form-input' type='text' name='noc' placeholder='enter no. of children here' size=35>
		</div>
		<div class='col-md-4'>
			<h6>Occupation*<h6>
			<input class='form-input'type='text' name='occupation' placeholder='enter your occupation here' size=35>
			<h6>Name of Former Church*<h6>
			<input class='form-input'type='text' name='formerchurch' placeholder='enter name of former church here' size=35>
			<h6>Special talents<h6>
			<input class='form-input'type='text' name='specialtalents' placeholder='enter your special talents here' size=35>
			<h6>Are you baptised?*<h6>
			<input class='form-input' type='radio' name='baptised' checked > Yes
			<input class='form-input' type='radio' name='baptised'> No
			<h6>Method of Baptism*<h6>
				<input class='form-input' type='radio' name='mob' checked > Immersion
			<input class='form-input' type='radio' name='baptism-method'> Sprinkling
				<input class='form-input' type='radio' name='baptism-method'> Other
		</div>
	</div>
		<input class='btn' type='submit' action='registeration.php'>
	</form>
</div>
</div>
<footer class='footer'>
		<div class='row'>
			<div class='col-sm-4'>
			<h5 align='center' color='blue'><strong>site map</strong></h5>
			<p><a class='footer-link' href='index.php'>home</a></p>
			<p>calender of activities</p>
			<p>latest news</p>
			<p>gallery</p>
		</div>
		<div class='col-sm-4'>
			<h5>Location</h5>
			<p>Kasoa - Iron City Galilea Market Road</p><br>
			<p>Ghana Post: GP0556 055</p>
		</div>
		<div class='col-sm-4 social-icons'><h5 align='center'><strong>social media links</strong></h5>
			<a class='footer-link' align='center' href='#'><span class='fa fa-facebook fa-lg'></span></a><br>
			<a class='footer-link' align='center' href='#'><i class='fa fa-instagram fa-lg'></i></a>
		</div>
	</div>
	<h6 align='center'><span class='fas fa-copyright fa-spin'></span>Kobby Charles</h6>
</footer>
<script type='text/javascript' href='../js/main.js'></script>
</body>
</html>