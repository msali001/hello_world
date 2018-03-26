<?php
    require 'connect.php';
    $name = $password = $url = "";
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
          $name = test_input($_POST["user"]);
          $password = test_input($_POST["password"]);
          if(test_login($name,$password,$conn)) {
               $url = "index.php";
               session_start();
               $_SESSION['name'] = $name;
          }
          else {
               $url = "login.php?status=failed";
          }
          redirect($url);
     }
     
     function test_input($data) {
          $data = trim($data);
          $data = stripslashes($data);
          $data = htmlspecialchars($data);
          return $data;
     }
     
     function test_login($usr , $passwd,$conn) {
        if ($usr != "" && $passwd != "") {
            $sql = "SELECT l.id FROM login l, registration y where l.`password`='$passwd' and y.email = '$usr'";
            echo $sql;
            $result = mysqli_query($conn, $sql);

            if (mysqli_num_rows($result) > 0) {
                return true;
            }
            else {
                return false;
            }
            
          }
          else {
               return false;
          }
     }
     function redirect($url)
     {
          header('Location: ' . $url);
          die();
     }
      mysqli_close($conn); 
?>
