<?php
    require 'connect.php';
    $title =$thought=$id= $sql = "";
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
	 	$title = test_input($_POST["title"]);
		$thought= test_input($_POST["thought"]);
		session_start();
		$id = $_SESSION['userid'];
		echo $id."\n";
		$sql = "INSERT INTO thoughts(id,heading,`text`) VALUES($id,'$title','$thought')";
		echo $sql;
		$retval=mysqli_query($conn, $sql);
        if(! $retval ) {
            echo 'errrrrrororrrrr';
        }
        header('Location: ' . 'index2.php');
        die();
	 }


	 function test_input($data) {
          $data = trim($data);
          $data = stripslashes($data);
          $data = htmlspecialchars($data);
          return $data;
     }
