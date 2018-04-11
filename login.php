<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <title>Hello World | FOSS Lab Project</title>
  <link rel="stylesheet" href="bootstrap/css/bootstrap.min.css">
  <link rel="stylesheet" href="dist/css/AdminLTE.min.css">
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,600,700,300italic,400italic,600italic">
</head>
<body class="hold-transition login-page">
<div class="login-box">
  <div class="login-logo">
    <a href="../../index2.html"><b>HELLO</b> WORLD</a>
  </div>
  <div class="login-box-body">
    <p class="login-box-msg">Sign in to start your session</p>
    <form action="validator.php" method="post">
      <div class="form-group has-feedback">
          <input type="email" class="form-control" placeholder="Email" name="user" required="required">
          <span class="glyphicon glyphicon-envelope form-control-feedback"></span>
      </div>
      <div class="form-group has-feedback">
          <input type="password" class="form-control" placeholder="Password" name="password" required="required">
        <span class="glyphicon glyphicon-lock form-control-feedback"></span>
      </div>
      <div class="row">
        <div class="col-xs-8">
          <a href="register.php" class="text-center">Register a new membership</a>
        </div>
        <div class="col-xs-4">
          <button type="submit" class="btn btn-primary btn-block btn-flat">Sign In</button>
        </div>
      </div>
    </form>
  </div>
  <div class="alert alert-danger alert-dismissible" id="error_box">
        <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
        <i class="icon fa fa-ban"></i>
        Invalid username or password
  </div>
  <div class="alert alert-warning alert-dismissible" id="warning_box">
        <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
        <i class="icon fa fa-warning"></i>
        Login to Continue
  </div>
</div>
<script src="plugins/jQuery/jquery-2.2.3.min.js"></script>
<script src="bootstrap/js/bootstrap.min.js"></script>
<script>
        var status = window.location.search;
        status = status.replace("?status=", '');
        document.getElementById("error_box").disabled = true;

        if(status === "failed") {
            $("#warning_box").remove();
        }
        else if (status === "login") {
            $("#error_box").remove();
        }
        else {
            $("#warning_box").remove();
            $("#error_box").remove();
        }
    </script>
</body>
</html>
