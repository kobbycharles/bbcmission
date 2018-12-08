<?php
   require_once 'login.php';
   include('session.php');
?>
<html>
   <head>
      <title>Welcome </title>
      <meta http-equiv='refresh' content='1000'>
	<meta charset="utf-8">
	<meta name='viewport' content='width=device-width, intial-scale=1'>
	<link rel='stylesheet' href='css/bootstrap.css'>
	<link rel='stylesheet' href='fontawesome/css/all.css'>
	<link rel='stylesheet' href='fontawesome/css/font-awesome.min.css'>
	<link rel='stylesheet' href='fontawesome/css/fontawesome.css'>
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
      <nav class='navbar1 navbar-expand-sm justify-content-center fixed-top'>
		<h6 class='navbar-brand' href='#'><img src="images/logo.png" width=45em >Bethel Baptist Mission</h6>
		<ul class='navbar-nav'>
			<li class='nav-item active'> <a class='nav-link' href='welcome.php'>Home</a></li>
			<li class='nav-item'> <a class='nav-link' href='welcome-calender.php'>Calender of activities</a></li>
			<li class='nav-item'> <a class='nav-link' href='welcome-news.php'>Latest News</a></li>
			<li class='nav-item'> <a class='nav-link' href='#'>Member info</a></li>
			<li><div class='hey'><h6>Welcome <i><strong><?php echo $_SESSION['username']; ?></strong></i></h6></div></li>
			<li class='nav-item'> <a class='nav-link' href='logout.php'>Logout</a></li>
		</ul>
	</nav>
	<header class='header1'>
		<div class='news'>
		<h3 class>Complete the Form Below to Add News to The Noticeboard.</h3>
		<form method='post' action='welcome-news.php'>
			<table>
				<tr>
					<td><h6>Topic: </h6></td>
			<td><input type='text' size=30 name='username' placeholder='Topic of the announcement'></td><br><br>
		</tr>
		<tr>
			<td>Announcement: </td>
			<td><textarea name='announcement' rows=4 cols=40 >Please enter announcement in this column</textarea></td><br>
			<tr>
			<td><input class='btn' type='submit'></td>
		</tr>
		</table>
		</form>
		</div>
	</header>

	<footer class='footer'>
		<div class='row'>
			<div class='col-sm-4'>
			<h5><strong>Site map</strong></h5>
			<p><a class='footer-link' href='index.php'>home</a></p>
			<p><a class='footer-link' href='calender.php'>calender of activities</a></p>
			<p>latest news</p>
			<p>gallery</p>
		</div>
		<div class='col-sm-4'>
			<h5><strong>Location</strong></h5>
			<p><span class='fas fa-position'></span>Kasoa - Iron City Galilea Market Road</p>
			<p>Ghana Post: GP0556 055</p>
		</div>
		<div class='col-sm-4 social-icons'><h5><strong>social media links</strong></h5>
			<a class='footer-link' href='#'><span class='fa fa-facebook fa-lg'></span></a><br>
			<a class='footer-link' href='#'><i class='fa fa-instagram fa-lg'></i></a>
		</div>
	</div>
	<h6 align='center'><span class='fas fa-copyright fa-spin'></span>Kobby Charles</h6>
</footer>
<script type='text/javascript' href='../js/main.js'></script>
   </body>
   
</html>