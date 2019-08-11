	<?php session_start();

if ( isset( $_SESSION['user_id'] ) ) {
} else {
    header("Location: login.php");
}
?>
<!doctype html>
<html>
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
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
          <li class="nav-item active">
            <a class="nav-link ml-2 active text-primary" href="#">Home <span class="sr-only">(current)</span></a>
          </li>
          <li class="nav-item">
            <a class="nav-link text-primary" href="AboutUs.html">About</a>
          </li>
          <li class="nav-item">
            <a class="nav-link text-primary" href="UserBooking.php">
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
<a class="ml-4 mt-4 btn btn-dark" href="UserHomepage.php">
	Back</a>
	<div class="pb-1 mt-5 mb-1 ml-4 border-bottom">
	&nbsp;
	<h1>Contact Information</h1></div>
<table class="ml-4 bookings">
	<tr>
	<th>Name</th>
		<th>Billing Address</th>
		<th>Phone Number</th>
		<th>Email</th>
	</tr>

	<?php 
include_once('db_connection.php'); 
$sql="SELECT * FROM Bookings";//where email= '$username'	
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    // output data of each row
         while($row = $result->fetch_assoc()) {
        echo "<tr><td>" . $row["firstname"]. " " . $row["lastname"]. "</td><td> " . $row["addressline1"]. " ". $row["addressline2"]." " .$row["city"]." " .$row["country"]. " </td><td>".$row["phonenumber"]." </td><td>" .$row["email"]."</td></tr>";
    }
} else {
    echo "0 results";
}?>
</tr>
</table>
<?php include_once('Footer.php');?>
</body>
</html>
