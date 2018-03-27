<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>Hello World | FOSS Lab Project</title>
  <!-- Tell the browser to be responsive to screen width -->
  <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
  <!-- Bootstrap 3.3.7 -->
  <link rel="stylesheet" href="bootstrap/css/bootstrap.min.css">
  <link rel="stylesheet" href="dist/css/AdminLTE.min.css">

  <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
  <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
  <!--[if lt IE 9]>
  <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
  <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
  <![endif]-->

  <!-- Google Font -->
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,600,700,300italic,400italic,600italic">
</head>
<body class="hold-transition login-page">
<div class="login-box">
  <div class="login-logo">
    <a href="../../index2.html"><b>HELLO</b> WORLD</a>
  </div>
    
  <!-- /.login-logo -->
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
        <!-- /.col -->
        <div class="col-xs-4">
          <button type="submit" class="btn btn-primary btn-block btn-flat">Sign In</button>
        </div>
        <!-- /.col -->
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
  <!-- /.login-box-body -->
</div>
<!-- /.login-box -->

<!-- jQuery 3 -->
<script src="plugins/jQuery/jquery-2.2.3.min.js"></script>
<!-- Bootstrap 3.3.7 -->
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
