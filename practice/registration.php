
<!doctype html>
<html>
<head>
<meta charset="UTF-8">
<title>Registration</title>
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
	<div>
	<form action="registration.php" method="post">
		<div class="container">
			<div class="row">
			<div class="col-md-6">
		<h1>Registration</h1>
		<p>Fill in the form with the correct values</p>
			<label for="firstname">
			<b>First Name:</b>
			</label>
			<input type="text" name="firstname" id="firstname" required>
			<br></br>
			<label for="lastname">
			<b>Last Name:</b>
			</label>
			<input type="text" name="lastname" id="lastname" required>
			<br>
			<label for="email">
			<b>Email Address:</b>
			</label>
			<input type="email" name="email" id="email" required>
			<br>
				<label for="phonenumber">
			<b>Phone Number:</b>
			</label>
			<input type="text" name="phonenumber" id="phonenumber" required>
		<br>
				<label for="password">
			<b>Password:</b>
			</label>
			<input type="password" name="password" id="password" required>
		<br>
		<input class="btn btn-dark" id="register" type="submit" name="register" value="Register">
		</div>
		</div>
		</div>
		</form>
	</div>
<?php include_once('Footer.php');?>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/sweetalert2@8"></script>
<script type="text/javascript">
	$(function(){
		$('#register').click(function(e){
			var valid = this.form.checkValidity();
			if(valid){
			var firstname 	= $('#firstname').val();
			var lastname	= $('#lastname').val();
			var email 		= $('#email').val();
			var phonenumber = $('#phonenumber').val();
			var password 	= $('#password').val();
			
				e.preventDefault();	
				$.ajax({
					type: 'POST',
					url: 'process.php',
					data: {firstname: firstname,lastname: lastname,email: email,phonenumber: phonenumber,password: password},
					success: function(data){
					Swal.fire({
								'title': 'Successful',
								'text': data,
								'type': 'success'
								})
							
					},
					error: function(data){
						Swal.fire({
								'title': 'Errors',
								'text': 'There were errors while saving the data.',
								'type': 'error'
								})
					}
				});
				
			}else{
				
			}
			
		});		

	});
	
</script>
</body>
</html>