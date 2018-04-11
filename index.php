<?php
    session_start();
    if(!isset($_SESSION['name'])) {
        header("location: login.php?status=login");
        die();
    }
    $name = $_SESSION["name"];
    ?>
<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>Hello World | FOSS Lab Project</title>
  <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
  <link rel="stylesheet" href="bootstrap/css/bootstrap.min.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.5.0/css/font-awesome.min.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/ionicons/2.0.1/css/ionicons.min.css">
  <link rel="stylesheet" href="dist/css/AdminLTE.min.css">
  <link rel="stylesheet" href="dist/css/skins/_all-skins.min.css">
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,600,700,300italic,400italic,600italic">
</head>
<body class="hold-transition skin-blue layout-boxed sidebar-collapse">
<div class="wrapper">

  <header class="main-header">
    <a href="index2.html" class="logo">
      <span class="logo-lg"><b>Hello</b>World</span>
    </a>
    <nav class="navbar navbar-static-top">
      <div class="navbar-custom-menu">
        <ul class="nav navbar-nav">
          <li class="dropdown messages-menu">
          <li class="dropdown user user-menu">
            <a href="#" class="dropdown-toggle" data-toggle="dropdown">
              <img src="dist/img/avatar04.png" class="user-image" alt="User Image">
              <span class="hidden-xs"><?php echo $name; ?></span>
            </a>
            <ul class="dropdown-menu">
              <li class="user-header">
                <img src="dist/img/avatar04.png" class="img-circle" alt="User Image">
                <p>
                  <?php echo $name; ?>
                </p>
              </li>
              <li class="user-body">
                
              </li>
              <li class="user-footer">
                <div class="pull-right">
                  <a href="logout.php" class="btn btn-default btn-flat">Sign out</a>
                </div>
              </li>
            </ul>
          </li>
        </ul>
      </div>
    </nav>
  </header>
  <aside class="main-sidebar">
  </aside>
  <div class="content-wrapper">
    <section class="content-header">
      <h1>
          Hello <b>World</b>
        <small>The Ultimate Thought sharer</small>
      </h1>
      <a href="index2.php" class="btn btn-block btn-success">ADD A NEW THOUGHT</a>
      
    </section>
     <section class="content">
        <?php
            require 'connect.php';
            $sql = "SELECT thoughts.heading,thoughts.`text`,registration.`name` FROM foss_lab.thoughts INNER JOIN registration ON thoughts.id = registration.id ";
            $result = mysqli_query($conn, $sql);
            if (mysqli_num_rows($result) > 0) {
                while($row = mysqli_fetch_assoc($result)) {
                    echo '<div class="callout callout-info">';
                    echo '<h4>'.$row['heading'].'</h4>';
                    echo '<p>'.$row['text']; echo '&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;~(<b>'.$row['name'].'</b>)</p></div>';
                }
            }
        ?>
    </section>
  </div>
  <footer class="main-footer">
    <div class="pull-right hidden-xs">
      <b>Version</b> 0.0.1 alpha
    </div>
    <strong>Copyright © 2016-2020 <a href="www.github.com/codali">HelloWorld</a>.</strong> All rights
    reserved.&nbsp;&nbsp;&nbsp;<a href="feed.php">ADD YOUR FEEDBACK</a>
  </footer>
  <div class="control-sidebar-bg"></div>
</div>
<script src="plugins/jQuery/jquery-2.2.3.min.js"></script>
<script src="bootstrap/js/bootstrap.min.js"></script>
<script src="dist/js/adminlte.min.js"></script>
<script src="dist/js/demo.js"></script>
</body>
</html>
