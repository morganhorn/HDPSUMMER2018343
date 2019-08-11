<?php
require_once('db_connection.php');

if(isset($_POST)){
	$firstname 		= $_POST['firstname'];
	$lastname 		= $_POST['lastname'];
	$email 			= $_POST['email'];
	$phonenumber	= $_POST['phonenumber'];
	$password 		= sha1($_POST['password']);
		$sql = "INSERT INTO Register (firstname, lastname, email, phonenumber, password ) VALUES ('$firstname','$lastname','$email','$phonenumber','$password')";
		if (mysqli_query($conn, $sql)) {
 echo "New record created successfully";
} else {
 echo "Error: " . $sql . "<br>" . mysqli_error($conn);
}}
	//$stmtinsert = $conn->prepare($sql);
		//$result = $stmtinsert->execute([$firstname, $lastname, $email, $phonenumber, $password]);
		//if($stmtinsert){
			//echo 'Successfully saved.'. $_POST['lastname'].''.$_POST['email'];
		//}else{
		//	echo 'There were errors while saving the data.';
		//}
//}else{
//	echo 'No data';
//}
//$conn->close();