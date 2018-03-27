<?php
$username = "root";
$password = "";
$servername = "localhost:3306";
$db = "foss_lab"; 

//connection to the database
$conn = mysqli_connect($servername, $username, $password,$db);

// Check connection
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}
//echo "Connected successfully";


