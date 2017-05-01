<?php
include_once("dbcon.php");
session_start();

$user_email = trim($_POST['name']);
$user_password = trim($_POST['pass']);

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
		$sql = "INSERT INTO myguests (name, password) VALUES ('$user_email', '$user_password')";
		if ($conn->query($sql) === TRUE) {
			$_SESSION['user_session'] = $user_email;
		} else {
		    echo "Error: " . $sql . "<br>" . $conn->error;
		}
   }



 ?>