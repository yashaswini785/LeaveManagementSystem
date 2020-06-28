<?php
	require_once 'connect.php';
	$data = json_decode(file_get_contents("php://input"));
	$name = $data->name;
	$firstname = $data->firstname;
	$lastname = $data->lastname;
	$status = $data->status;
	$conn->query("INSERT INTO `action` (name, firstname, lastname, status) VALUES('$name', '$firstname', '$lastname', '$status')") or die(mysqli_error());
?>