<?php session_start();

if ( isset( $_SESSION['user_id'] ) ) {
} else {
    header("Location: adminlogin.php");
}
?>
<!DOCTYPE html>
<html>
	<head>
		<link rel="stylesheet" type="text/css" href="Style.css">
    <!-- Bootstrap -->
    <link href="bootstrap-4.0.0.css" rel="stylesheet"></head>
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
	
	
	
	
	
	<div class="row">

	
	<div class="col-6">
<table class="bookings">
	<tr>
	<th>BookingId</th>
		<th>Name</th>
		<th>Phone</th>
		<th>Address</th>
		<th>City</th>
		<th>Country</th>
		<th>Date</th>
		<th>Service</th>
		<th>Employees</th>
		<th>Status</th>
		<th>Invoice</th>
	</tr>

	<?php 
include_once('db_connection.php'); 
$username = $_POST['status'];
$sql = "SELECT * FROM bookings";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    // output data of each row
    while($row = $result->fetch_assoc()) {
        echo "<tr><td>" . $row["bookingid"]. "</td><td>" . $row["firstname"]. " " . $row["lastname"]. "</td><td>". $row["phonenumber"]." </td><td> " .$row["addressline1"]." " .$row["addressline2"]. " </td><td> " .$row["city"]. "</td><td> " .$row["country"]. " </td><td>" .$row["bookingdate"]. " </td><td>" .$row["serviceneeded"]." </td>" ;
    }
} else {
    echo "0 results";
}
$conn->close();
	?>
	<td><select ID="Employee1">
		<option value="#">Please Select</option>
		<option value="Steve">Steve</option>
		<option value="Frank">Frank</option>
		<option value="Kevin">Kevin</option>
		<option value="Phil">Phil</option>
		<button class="btn btn-dark" id="status">Save</button>
		
		</td><td><select name="status" ID="status1">
		<option value="#">Choose...</option>
		<option value="Booked">Booked</option>
		<option value="InService">In Service</option>
		<option value="Completed">Completed</option>
	<option value="Scrapped">Scrapped</option></select>
	<br>
	<input class="btn btn-dark" type="submit" id="status" name="status">
	</td>
</table>
</div>
		<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/sweetalert2@8"></script>
		<script type="text/javascript">
	$(function(){
		$('#status').click(function(e){
			var valid = this.form.checkValidity();
			if(valid){
			var status 	= $('#status').val();
			
				e.preventDefault();	
				$.ajax({
					type: 'POST',
					url: 'Status.php',
					data: {status: status},
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
		<?php include_once('Footer.php');?>
</body>
</html>