<?php session_start();

if ( isset( $_SESSION['user_id'] ) ) {
} else {
    header("Location: adminlogin.php");
}
?>

<html>
<head>   
<link rel="stylesheet" type="text/css" href="Style.css">
    <!-- Bootstrap -->
    <link href="bootstrap-4.0.0.css" rel="stylesheet">
</head>
<body>
	<nav class="navbar navbar-expand-lg navbar-light bg-light">
      <img src="logo.png" width="150"  alt="" href="#"/>
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
      </button>
		
      <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav mr-auto">
          <li class="nav-item">
            <a class="nav-link ml-2 text-primary" href="Morgan.html">Home</a>
          </li>
          <li class="nav-item">
            <a class="nav-link text-primary" href="AboutUs.html">About</a>
          </li>
          <li class="nav-item active">
            <a class="nav-link active text-primary" href="login.php">
				Book Now</a></li>
			
          <li class="nav-item">
            <a class="nav-link text-primary" href="ContactUs.html">Contact Us</a>
          </li>
        </ul>
        <form class="form-inline my-2 my-lg-0">
          <input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search">
          <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>	
        </form>
		  <button class="btn btn-outline-success my-2 my-sm-0" href="login.php">Log in</button><!--Admin Login-->
      </div>
    </nav>
	<div class="jumbotron text-center mt-2 bg-gradient-primary">
	<div class="row">
	<div class="col-4">
	<h2 style="color:white;">View Bookings Information </h2>
	<p style="color:#dddddd;">View Booking Information on Record</p>
	<a class="btn btn-dark" href="Bookings.php">
	View</a>	
	</div>
	<div class="col-4">
		<h2 style="color:white;">View Roster</h2>
	<p style="color:#dddddd;">View Garage and Employee Schedules</p>
	<a class="btn btn-dark"href="php-shift-planning/index.html">
	View</a>	
	</div>
		<div class="col-4">
			<h2 style="color:white;">View Invoices</h2>
	<p style="color:#dddddd;">View invoices for Bookings</p>
	<a class="btn btn-dark" href="ViewInvoices.php">
	View</a>
	</div>
	</div>
	</div>
	
	<div class="row">
	<div class="col-4">
	<!--<?php include_once('CalendarFunctions.php'); ?>-->
	</div>
	<div class="col-6">
	<!--php include_once('Bookings.php'); ?>-->
		</div>
	</div>
	<div class="section">
      <div class="container">
        <div class="row">
          <div class="col-md-4 col-12">
            <h3 class="text-center">WHO WE ARE</h3>
            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Repellendus, ducimus, sit, quibusdam quidem recusandae veniam eos quod error nisi repellat excepturi laboriosam aspernatur suscipit possimus consectetur dolores nihil labore quas eius illo accusamus nulla sed blanditiis porro accusantium. Perspiciatis, perferendis!</p>
          </div>
          <div class="col-md-4 col-12">
            <h3 class="text-center">GET IN TOUCH</h3>
            <address class="text-center">
              <strong>Ger's Garage</strong><br>
              Dublin, Ireland<br>
            <br>
              <abbr title="Phone">P:</abbr> +353 (83) 860-8164
            </address>
          </div>
          <div class="col-md-4 col-12">
            <h3 class="text-center">Logout</h3>
            <form>
              <div class="form-group col-12">
				  <center><button class="btn btn-dark mt-2" href="logout.php">logout</button></center>
              </div>
            </form>
          </div>
        </div>
      </div>
    </div>
    <hr>
    <footer class="text-center">
      <div class="container">
        <div class="row">
          <div class="col-12">
            <p>Copyright © MyCompany. All rights reserved.</p>
          </div>
        </div>
      </div>
    </footer>	

</body>
</html> 
