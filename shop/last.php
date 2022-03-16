<?php

$fullname = filter_input(INPUT_POST,'fullname');
$username = filter_input(INPUT_POST,'username');
$email = filter_input(INPUT_POST,'email');
$password = filter_input(INPUT_POST,'password');




if (!empty($fullname) || !empty($username) || !empty($email) || !empty($password)) {
	
	$host = "localhost";
	$dbusername = "root";
	$dbpassword = "";
	$dbname = "hostel";

	//create connnection
	
	$conn = new mysqli($host, $dbusername, $dbpassword, $dbname);

	
	if (mysqli_connect_error()){
		die('Connection Error('.mysqli_connection_error().') '. mysqli_connection_error());

	} 

	

	else {
		$sql = "INSERT INTO hostel (fullname, username, email, password)
		values ('$fullname', '$username', '$email', '$password')";
		if ($conn->query($sql)){
			echo "Registration Sucessfully Submited";
				

		}
		else{
			echo "Fatal Error:". $sql ."br". $conn->error;
		}
		$conn->close();



	} 
} else {
	echo "All field are required";
	die();
}


?>