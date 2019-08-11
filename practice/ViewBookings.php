	<?php session_start();

if ( isset( $_SESSION['user_id'] ) ) {
} else {
    header("Location: adminlogin.php");
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
	<h1>Bookings</h1></div>
<table class="ml-4 viewbookings">
	<tr>
	<th>Vehicle</th>
		<th>Date</th>
		<th>Time</th>
		<th>Mechanic</th>
		<th>Status</th>
	</tr>

	<?php 
include_once('db_connection.php'); 
//$sqlvehicle="SELECT * FROM appointments";	
$sqlvehicle = "SELECT v.year, v.make, v.model, a.firstdate, a.firsttime, a.mechanic, a.status
FROM vehicle v
LEFT JOIN appointments a ON a.email = v.email";//where email= '$username'	
$result = $conn->query($sqlvehicle);

if ($result->num_rows > 0) {
    // output data of each row
    while($row = $result->fetch_assoc()) {
        echo "<tr><td>" . $row["year"]. "" . $row["make"]. " " . $row["model"]. "</td><td>".$row["firstdate"]."</td><td>".$row["firsttime"]."</td><td>".$row["mechanic"]."</td><td>".$row["status"].'</td>';
    }
} else {
    echo "0 results";
}

$conn->close();
	?>
	<!--<td><select ID="Employee1">
		<option value="#">Please Select</option>
		<option value="Steve">Steve</option>
		<option value="Frank">Frank</option>
		<option value="Kevin">Kevin</option>
		<option value="Phil">Phil</option>
		</td><td><select ID="Status">
		<option value="#">Please Select</option>
		<option value="Booked">Booked</option>
		<option value="InService">In Service</option>
		<option value="Completed">Completed</option>
		<option value="Scrapped">Scrapped</option></td><td><button on class="btn btn-dark">Invoice</button></td>-->
	</tr>
</table>
<?php include_once('Footer.php');?>
</body>
</html>
