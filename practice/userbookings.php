<?php
require_once('db_connection.php');

if(isset($_POST)){
	$firstname 		= $_POST['firstname'];
	$lastname 		= $_POST['lastname'];
	$email	= $_POST['email'];
	$phonenumber	= $_POST['phonenumber'];
	$address 		= $_POST['address'];
	$address2 		= $_POST['address2'];
	$city 		= $_POST['city'];
	$country 		= $_POST['country'];
	$service 		= $_POST['services'];
	$year 		= $_POST['year'];
	$make 		= $_POST['make'];
	$model 			= $_POST['model'];
	$license	= $_POST['license'];
	$engine 		= $_POST['engine'];
	$firstdate	= $_POST['firstdate'];
	$firsttime	= $_POST['firsttime'];
	$comments 		= $_POST['comments'];
	
	$sqlvehicle = "INSERT INTO Vehicle (email,year, make, model, license, engine, comments) VALUES ('$email','$year','$make','$model','$license', '$engine', '$comments')";
	
	$sqlbook = "INSERT INTO Bookings (firstname, lastname, email, phonenumber, addressline1, addressline2, city, country,) VALUES ('$firstname','$lastname','$email', '$phonenumber','$address', '$address2', '$city', '$country')";
	
	$sqlappt = "INSERT INTO appointments (service, firstdate, firsttime) VALUES ('$service','$firstdate','$firsttime')";
	if (mysqli_query($conn, $sqlvehicle)){
 echo "Vehicle saved";
} else {
echo "Error: " . $sqlvehicle . "<br>" . mysqli_error($conn);
}
	if (mysqli_query($conn, $sqlbook)) {
 echo ", Booking saved";
} else {
 echo "Error: " . $sqlbook . "<br>" . mysqli_error($conn);
}
	if (mysqli_query($conn, $sqlappt)) {
 echo ", Appointment saved";
} else {
 echo "Error: " . $sqlappt . "<br>" . mysqli_error($conn);
}




}