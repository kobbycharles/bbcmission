<!DOCTYPE html>


<?php
   require_once 'login.php';
   $connection= new mysqli($db_hostname,$db_username,$db_password,$db_database);
if ($connection->connect_error) die ($connection->error);
   session_start();
   
   if(isset($_POST['username'])) {
      // removes backslashed 
      $username =  stripslashes($_REQUEST['username']);
      $username = mysqli_real_escape_string($connection,$username);
      $password =  stripslashes($_REQUEST['password']);
      $password = mysqli_real_escape_string($connection,$password); 
      
      $query = "SELECT * FROM admin WHERE username = '$username' and password = '$password'";
      $result = mysqli_query($connection,$query) or die(msql_error());
      $row = mysqli_num_rows($result);
    	
      if($row == 1) {
         $_SESSION['username'] = $username;
         
         header("location: welcome.php");
      }else {
         header("location: alert.html") ;
      }
   }
?>

<html lang='en'>
<head>
	<title>bootstrap project</title>
	<meta http-equiv='refresh' content='100'>
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
	<header class='login'>
		<div class='overlay1'></div>
		<div class='row'>
			<div class='col-sm-12 col-md-4 col-lg-4'>
			</div>
			<div class='col-sm-12 col-md-4 col-lg-4'>
		<div class='login-container'>
			<h3>Sign in</h3><br>
			<form method='post'>
			<i class='far fa-user fa-lg'></i><input class='form-input' type='text' size=30 name='username' placeholder='username'><br><br>
			<i class='fas fa-key fa-lg'></i><input class='form-input' type='password' size=30 name='password' placeholder='password'>
			<input class='btn' type='submit'>
		</form>
		</div>
	</div>
		<div class='col-sm-12 col-md-4 col-lg-4'>
			</div>
		</div>
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
