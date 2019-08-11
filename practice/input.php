<?php
include 'db_connection.php';
$username = $_POST['username'];
$surname= $_POST['surname'];
$email = $_POST['email'];
$password = $_POST['password'];

if(!empty($username) || !empty($surname) || !empty($email) || !empty($password)){ 
    //create connection
$host = "localhost";
    $dbUsername = "root";
    $dbPassword = "root";
    $dbname = "garage";
    //create connection
    $conn = new mysqli($host, $dbUsername, $dbPassword, $dbname);

	if(mysqli_connect_error()){die('Connect Error('.mysqli_connect_errno().')'. mysqli_connect_Error());}else{$SELECT = "SELECT email FROM Register WHERE email = ? Limit 1";
     $INSERT = "INSERT INTO Register (username, surname, email, password) values(?, ?, ?, ?,)";
     //Prepare statement
     $stmt = $conn->prepare($SELECT);
     $stmt->bind_param("s", $email);
     $stmt->execute();
     $stmt->bind_result($email);
     $stmt->store_result();
     $rnum = $stmt->num_rows;
     if ($rnum==0) {
      $stmt->close();
      $stmt = $conn->prepare($INSERT);
      $stmt->bind_param("ssss", $username, $surname,$email, $password);
      $stmt->execute();
      echo "New record inserted sucessfully";
}else {
      echo "Someone already registered using this email";
     }
     $stmt->close();
     CloseCon($conn);
    }
} else{
	echo "All fields are required";
	die();
}
?>