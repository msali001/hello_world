<?php
    require 'connect.php';
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $name = $passwrod = $email = "";
        $name = test_input($_POST["name"]);
        $passwrod = test_input($_POST["password"]);
        $email = test_input($_POST["email"]);
        
        $query = "INSERT INTO `foss_lab`.`registration` (`name`, `email`) VALUES ('$name', '$email')";
        echo $query;
        $retval = mysqli_query( $conn, $query );
            
            if(! $retval ) {
                echo 'errrrrrororrrrr';
            }
            else {
                $last_id = mysqli_insert_id($conn);
                $query = "INSERT INTO `foss_lab`.`login` (`id`, `password`) VALUES ('$last_id', '$passwrod')";
                mysqli_query( $conn, $query );
                header('Location: ' . 'login.php');
                die();
            }
        

    }
    
    function test_input($data) {
          $data = trim($data);
          $data = stripslashes($data);
          $data = htmlspecialchars($data);
          return $data;
     }
