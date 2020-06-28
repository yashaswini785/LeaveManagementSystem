<?php
	require_once 'connect.php';
	$data = json_decode(file_get_contents("php://input"));
	$mem_id = $data->mem_id;
	$name = $data->name;
	$firstname = $data->firstname;
	$lastname = $data->lastname;
	$status = $data->status;
	$conn->query("UPDATE `action` SET `status` = '$status'  WHERE `mem_id` = $mem_id") or die(mysqli_error());
?>