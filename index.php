<?php
    session_start();
    if(!isset($_SESSION['name'])) {
        header("location: login.php?status=login");
        die();
    }
    $name = $_SESSION["name"];
    ?>
<html>
    <h1>HELLO <?php echo $name; ?></h1>
  <h2>Welcome to our Hello World Page</h2>
  
  <a href="logout.php">Click Here to Logout</a>
</html>
