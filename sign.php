<?php
include_once("dbcon.php");
session_start();

$user_name = trim($_POST['name']);
$user_email = trim($_POST['email']);
$user_phone = trim($_POST['phone']);
$user_password = ($_POST['pass']);

if (!$user_email && !$user_password) {
	echo "all fields required";
}
elseif (!$user_email) {
	echo "No User";
}

elseif (!$user_password) {
	echo "No Pass";
}

else { 
		$sql = "INSERT INTO myguests (name, password,email,phone) VALUES ('$user_name', '$user_password', '$user_email','$user_phone')";
		if ($conn->query($sql) === TRUE) {
			$_SESSION['user_session'] = $user_name;
		} else {
		    echo "Error: " . $sql . "<br>" . $conn->error;
		}
   }



 ?>