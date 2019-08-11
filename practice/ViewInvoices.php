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
            <a class="nav-link ml-2 active text-primary" href="AdminHomepage.php">Home <span class="sr-only">(current)</span></a>
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
<a class="ml-4 mt-4 btn btn-dark" href="AdminHomepage.php">
	Back</a>
	<div class="pb-1 mt-5 mb-1 ml-4 border-bottom">
	&nbsp;
	<h1>Bookings</h1></div>
<table class="ml-4 invoices">
	<tr>
	<th>BookingID</th>
	<th>Name</th>
		<th>Billing Address</th>
		<th>Vehicle Info</th>
		<th>Service Needed</th>
		<th>Date/Time</th>
		<th>Status</th>
		<th>Phone Number</th>
		<th>Email</th>
		<th>Invoice</th>
	</tr>

	<?php 
include_once('db_connection.php'); 
$sql="SELECT b.bookingid, b.firstname, b.lastname, b.addressline1, b.addressline2, b.city, b.country,b.phonenumber,b.email,a.service,a.status,a.firstdate,a.firsttime,v.year,v.make,v.model
FROM bookings b
LEFT JOIN appointments a ON a.email = b.email
LEFT JOIN vehicle v ON v.email = b.email";	
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    // output data of each row
         while($row = $result->fetch_assoc()) {
        echo "<tr><td>". $row["bookingid"]."</td><td>" . $row["firstname"]. " " . $row["lastname"]. "</td><td> " . $row["addressline1"]. "<br> ". $row["addressline2"]."<br> " .$row["city"]." <br>" .$row["country"]. " </td><td>".$row["year"]."<br>". $row["make"]."br".$row["model"]." </td><td>".$row["service"]."</td><td>".$row["date"]."/".$row["time"]."</td><td>".$row["status"]."</td><td>".$row["phonenumber"]." </td><td>" .$row["email"]."</td>";
    }
} else {
    echo "0 results";
}?>
	<td><a class="btn btn-dark" href="invoicr-master/example/index.php">Invoice</a></td>
</tr>
</table>
<?php include_once('Footer.php');?>
</body>
</html>
