<?php
	require_once 'connect.php';
	$data = json_decode(file_get_contents("php://input"));
	$mem_id = $data->mem_id;
	$query = $conn->query("DELETE FROM `studentleaves` WHERE `mem_id` = $mem_id") or die(mysqli_error());
?>