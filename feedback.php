<?php
	require 'connect.php';
	if ($_SERVER["REQUEST_METHOD"] == "POST") {
		$name = $_POST["name"];
		$feed = $_POST["text"];
		$sql = "INSERT into foss_lab.feedback values ('$name','$feed')";
		$result = mysqli_query($conn, $sql);
		header('Location: index.php');
		die();
	}
?>
//this is a comment
