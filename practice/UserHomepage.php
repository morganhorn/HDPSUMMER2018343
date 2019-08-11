	<?php session_start();

if ( isset( $_SESSION['user_id'] ) ) {
} else {
    header("Location: login.php");
}
?>
<!DOCTYPE html>
<html>
	<head>
		<link rel="stylesheet" type="text/css" href="Style.css">
    <!-- Bootstrap -->
    <link href="bootstrap-4.0.0.css" rel="stylesheet"></head>
	<body>
	<nav class="navbar navbar-expand-lg navbar-light bg-light">
      <img src="logo.png" width="150"  alt="" href="#"/>
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
      </button>
		
      <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav mr-auto">
          <li class="nav-item active">
            <a class="nav-link ml-2 active text-primary" href="Morgan.html">Home</a>
          </li>
          <li class="nav-item">
            <a class="nav-link text-primary" href="AboutUs.html">About</a>
          </li>
          <li class="nav-item">
            <a class="nav-link text-primary" href="Hobbies.html">
				Book Now</a></li>
			
          <li class="nav-item">
            <a class="nav-link text-primary" href="ContactUs.html">Contact Us</a>
          </li>
        </ul>
        <form class="form-inline my-2 my-lg-0">
          <input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search">
          <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>	
        </form>
		  <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Log in</button><!--Admin Login-->
      </div>
    </nav>
	&nbsp;
	<center><h1 "color:#343e3d;">Welcome, User. </h1></center>
	&nbsp;
	<div class="jumbotron text-center mt-2 bg-gradient-primary">
	<div class="row">
	<div class="col-4">
	<h2 style="color:white;">View Contact Information </h2>
	<p style="color:#dddddd;">View Contact Information on Record</p>
	<a class="btn btn-dark" href="ViewContact.php">
	View</a>	
	</div>
	<div class="col-4">
		<h2 style="color:white;">View Vehicles</h2>
	<p style="color:#dddddd;">View Saved Vehicles and Add Vehicles</p>
	<a class="btn btn-dark"href="ViewVehicle.php">
	View</a>	
	</div>
		<div class="col-4">
			<h2 style="color:white;">View Bookings</h2>
	<p style="color:#dddddd;">View Previous Bookings and Make an upcoming Booking</p>
	<a class="btn btn-dark" href="ViewBookings.php">
	View</a>
	</div>
	</div>
	</div>
	<?php include_once('Footer.php');?>	

</body>
</html>