
<?php
session_start();
require_once('db_connection.php');
if ( ! empty( $_POST ) ) {
    if ( isset( $_POST['username'] ) && isset( $_POST['password'] ) ) {
        // Getting submitted user data from database
        $stmt = $conn->prepare("SELECT * FROM Register WHERE email = '$username' AND password = '$password'");
        $stmt->bind_param('s', $_POST['username']);
        $stmt->execute();
        $result = $stmt->get_result();
    	$user = $result->fetch_object();
    		
    	// Verify user password and set $_SESSION
    	if ( password_verify( $_POST['password'], $user->password ) ) {
    		$_SESSION['user_id'] = $user->ID;
			 header("Location: UserHomepage.php");
    	}
    }
}?>
<!doctype html>
<html>
<head>
<meta charset="UTF-8">
<title>Login</title>
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
		  <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Log in</button><!--Admin Login-->
      </div>
    </nav>
	&nbsp;
	<div class="col-lg-12">
	<div class="justify-content-center h-100">
		<div class="user_card">
			<div class="justify-content-center">
				<div class="brand_logo_container">
					<center>
					<img src="logo.png" class="brand_logo" alt="GersGaragelogo">
						</center>
				</div>
			</div>	
			&nbsp;
			<div class="d-flex justify-content-center form_container">
				<form action="" method="post">
					<div class="input-group mb-3">
						<div class="input-group-append">
							<span class="input-group-text"><i class="fas fa-user">Username</i></span>					
						</div>
						<input type="text" name="username" id="username" class="form-control input_user" required>
					</div>
					<div class="input-group mb-2">
						<div class="input-group-append">
							<span class="input-group-text"><i class="fas fa-key">Password</i></span>					
						</div>
						<input type="password" name="password" id="password" class="form-control input_pass" required>
					</div>
					<div class="form-group">
						<div class="custom-control custom-checkbox">
							<input type="checkbox" name="rememberme" class="custom-control-input" id="customControlInline">
							<label class="custom-control-label" for="customControlInline">Remember me</label>
						</div>
			</div>
			<div class="d-flex justify-content-center mt-3 login_container">
				<input type="submit" value="Submit">
				<!--<button type="button" name="button" id="login" class="btn btn-dark">Login</button> -->
			</div>
			</form>
			</div>
			<div class="d-flex justify-content-center mt-3">
				<div class="d-flex justify-content-center links">
					Don't have an account? <a href="registration.php" class="ml-2">Sign Up</a>
				</div>
			</div>
		</div>
	</div>
</div>
	&nbsp;
	&nbsp;
<?php include_once('Footer.php');?>
</body>
</html>