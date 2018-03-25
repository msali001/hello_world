<?php
     $name = $password = $url = "";
     if ($_SERVER["REQUEST_METHOD"] == "POST") {
          $name = test_input($_POST["username"]);
          $password = test_input($_POST["password"]);
          if(test_login($name,$password)) {
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
     
     function test_login($usr , $passwd) {
          if ($usr === "user" && $passwd === "user") {
               return true;
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

?>
