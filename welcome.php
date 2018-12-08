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
		<div class='overlay1'></div>
		<div class='description'></div>
		<div class="blog">
<div class="container">
<h1 class="text-center">Blog</h1>
<div class="row">
<div class="col-md-4 col-lg-4 col-sm-12">
<div class="card">
<div class="card-img">
<img src="images/prayer.jpg" class="img-fluid">
</div>
<div class="card-body">
<h4 class="card-title">No Soul is Far Too Gone</h4>
<p class="card-text">
My teenage daughter and I burst into tears in worship last weekend.</p>
</div>
<div class="card-footer">
<a href="prayer.php" class="card-link">Read more.....</a>
</div>
</div>
</div>
<div class="col-md-4 col-lg-4 col-sm-12">
<div class="card">
<div class="card-img">
<img src="images/unity.jpg" class="img-fluid">
</div>
<div class="card-body">
<h4 class="card-title">Christian Unity</h4>
<p class="card-text">
Unity among two or more people gets its virtue entirely from something else.
</p>
</div>
<div class="card-footer">
<a href="unity.php" class="card-link">Read more.....</a>
</div>
</div>
</div>
<div class="col-md-4 col-lg-4 col-sm-12">
<div class="card">
<div class="card-img">
<img src="images/lifestyle.jpg" class="img-fluid">
</div>
<div class="card-body">
<h4 class="card-title">Christian Lifestyle</h4>
<p class="card-text">
Jesus gave His followers an abundant life full of purpose, potential and joy.
</p>
</div>
<div class="card-footer">
<a href="christian-lifestyle.php" class="card-link">Read more</a>
</div>
</div></div>
</div>
</div>
</div>
	</header>

	<footer class='footer1'>
		<div class='row'>
			<div class='col-sm-4'>
			<h6 align='center' color='blue'><strong>site map</strong></h6>
			<h6><a class='footer-link' href='index.php'>home</a></h6>
			<h6>calender of activities</h6>
			<h6>latest news</h6>
			<h6>gallery</h6>
		</div>
		<div class='col-sm-4'>
			<h5>Location</h5>
			<p>Kasoa - Iron City Galilea Market Road</p>
			<p>Ghana Post: GP0556 055</p>
		</div>
		<div class='col-sm-4 social-icons'><h6 align='center'><strong>social media links</strong></h6>
			<a class='footer-link' align='center' href='#'><span class='fa fa-facebook fa-lg'> Facebook</span></a><br>
			<a class='footer-link' align='center' href='#'><i class='fa fa-instagram fa-lg'> Instagram</i></a>
		</div>
	</div>
	<h6 align='center'><span class='fas fa-copyright fa-spin'></span>Kobby Charles</h6>
</footer>
<script type='text/javascript' href='../js/main.js'></script>
   </body>
   
</html>