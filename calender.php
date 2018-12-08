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
	<header class='calender'>
		<div class='overlay2'></div>
			<div class='description1'>
				<h4>Programs and Activities for the Year 2018</h4><br>
			 <div class="table-responsive">
                <table class="table">
                    <thead>
                        <tr>
                            <th>DAY</th>
                            <th>DATE</th>
                            <th>PROGRAM</th>
                            <th>LEADER ON DUTY</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                        	<td>Monday</td>
                            <td>11/03/2018</td>
                            <td>Annual thanksgiving service</td>
                            <td>Mr. Agyenim Boateng</td>
                        </tr>
                         <tr>
                        	<td>Tuesday</td>
                            <td>12/03/2018</td>
                            <td>Annual fundraising service</td>
                            <td>Mr. Adom Charles</td>
                        </tr> <tr>
                        	<td>Thurday</td>
                            <td>11/05/2018</td>
                            <td>Ordination service</td>
                            <td>Mr. Ebenezer Elanyor</td>
                        </tr> <tr>
                        	<td>Friday</td>
                            <td>15/06/2018</td>
                            <td>End of month revival service</td>
                            <td>Mr. Adom Theophilus</td>
                        </tr>
                    </tbody>
                </table>
		</div>
	</header>
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