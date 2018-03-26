<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <title>Hello World | FOSS Lab Project</title>
        <!-- Tell the browser to be responsive to screen width -->
        <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
        <!-- Bootstrap 3.3.6 -->
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">
        <!-- Font Awesome -->
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.5.0/css/font-awesome.min.css">
        <!-- Ionicons -->
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/ionicons/2.0.1/css/ionicons.min.css">
        <!-- Theme style -->
        <link rel="stylesheet" href="dist/css/AdminLTE.min.css">

    </head>
    <body class="hold-transition login-page">
        <div class="login-box">
            <div class="login-logo">
                <b>Hello</b>World
            </div>
            <form action="validator.php" method="post">
            <div class="login-box-body">
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
                <div class="form-group has-feedback">
                    <input type="text" class="form-control" placeholder="Enter username" name="user" required/>
                </div>
                <div class="form-group has-feedback">
                    <input class="form-control" name="password" type="password" placeholder="Password" >
                </div>
                <div class="row">
                    <div class="col-xs-4 pull-right">
                        <button type="submit" class="btn btn-primary btn-block btn-flat">Sign In</button>
                    </div>
                </div>
            </div>
            </form>
        </div>
    </body>
    <script  src="https://code.jquery.com/jquery-2.2.4.min.js"  integrity="sha256-BbhdlvQf/xTY9gja0Dq3HiwQF8LaCRTXxZKRutelT44="  crossorigin="anonymous"></script>
<!-- Bootstrap 3.3.6 -->
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery.inputmask/3.3.4/inputmask/inputmask.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery.inputmask/3.3.4/inputmask/inputmask.extensions.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery.inputmask/3.3.4/inputmask/inputmask.date.extensions.js"></script>
    <script>
        $(document).ready(function () {

            $(":input").inputmask();

        });
    </script>
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

</html>
