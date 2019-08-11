<?php
function OpenCon()
 {
 $dbhost = "localhost";
 $dbuser = "root";
 $dbpass = "root";
 $db = "garage";
 // $conn = new mysqli($dbhost, $dbuser, $dbpass,$db) or die("Connect failed: %s\n". $conn -> error);
 $conn = mysqli_connect($dbhost, $dbuser, $dbpass,$db);
	
	if(!$conn) {
		die ("Connection failed: " . mysqli_connect_error());
	}
	echo "Connected successfully";
 


 return $conn;
 }
 
OpenCon();

function CloseCon($conn)
 {
 $conn -> close();
 }

$conn = OpenCon();


//CloseCon($conn);
?>