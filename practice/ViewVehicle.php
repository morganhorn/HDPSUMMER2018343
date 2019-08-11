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
	<a class="ml-4 mt-4 btn btn-dark" href="UserHomepage.php">
	Back</a>
	<div class="pb-1 mt-5 mb-1 ml-4 border-bottom">
	&nbsp;
	<h1>Vehicle Information</h1></div>
	<div class="col-12">
	<table class="ml-4 vehicles">
	<tr>
	<th>Year</th>
		<th>Make</th>
		<th>Model</th>
		<th>License</th>
		<th>Engine Type</th>
		<th>Comments</th>
	</tr>

<?php 
include_once('db_connection.php'); 
$sql = "SELECT * FROM Vehicle";//WHERE email ='$username'
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    // output data of each row
    while($row = $result->fetch_assoc()) {
        echo "<tr><td>" . $row["year"]. "</td><td>" . $row["make"]. "</td><td> " . $row["model"]. "</td><td>". $row["license"]." </td><td> " .$row["engine"]."</td><td> " .$row["comments"]. " </td>" ;
    }
} else {
    echo "0 results";
}
$conn->close();
	?>

</table>
<?php include_once('Footer.php');?>
</body>
</html>
