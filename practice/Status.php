	<?php 
include_once('db_connection.php'); 
$status = $_POST['status'];
$sql = "INSERT INTO appointments (status) VALUES('$status')";

 if (mysqli_query($conn, $sql)) {
 echo "New record created successfully";
} else {
 echo "Error: " . $sql . "<br>" . mysqli_error($conn);
}