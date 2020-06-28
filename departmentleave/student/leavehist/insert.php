<?php
	require_once 'connect.php';
	$data = json_decode(file_get_contents("php://input"));
	$firstname = $data->firstname;
	$lastname = $data->lastname;
	$status = $data->status;
	$conn->query("INSERT INTO `studentleaves` (firstname, lastname, status) VALUES('$firstname', '$lastname', '$status')") or die(mysqli_error());
?>