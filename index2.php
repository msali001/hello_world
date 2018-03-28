<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <title>Hello World | FOSS Lab Project</title>
        <!-- Tell the browser to be responsive to screen width -->
        <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
        <!-- Bootstrap 3.3.6 -->
        <link rel="stylesheet" href="bootstrap/css/bootstrap.min.css">
        <!-- Font Awesome -->
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.5.0/css/font-awesome.min.css">
        <!-- Ionicons -->
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/ionicons/2.0.1/css/ionicons.min.css">
        <!-- Theme style -->
        <link rel="stylesheet" href="dist/css/AdminLTE.min.css">
        <!-- AdminLTE Skins. Choose a skin from the css/skins
       folder instead of downloading all of them to reduce the load. -->
        <link rel="stylesheet" href="dist/css/skins/_all-skins.min.css">
        <link rel="stylesheet" href="plugins/bootstrap-wysihtml5/bootstrap3-wysihtml5.min.css">
        
    </head>
    <body class="skin-purple sidebar-mini sidebar-collapse">
        <div class="wrapper">
            

<header class="main-header">
    <!-- Logo -->
    <a href="#" class="logo">
      <!-- mini logo for sidebar mini 50x50 pixels -->
      <span class="logo-mini"><b>H</b>W</span>
      <!-- logo for regular state and mobile devices -->
      <span class="logo-lg"><b>Hello</b>World</span>
    </a>
    <!-- Header Navbar: style can be found in header.less -->
    <nav class="navbar navbar-static-top">
      <!-- Sidebar toggle button-->
      

      <div class="navbar-custom-menu">
        <ul class="nav navbar-nav">
        </ul>
      </div>
    </nav>
  </header>
            <div class="content-wrapper">
                <!-- Content Header (Page header) -->
                <section class="content">
                    <div class="row">
                        <!-- left column -->
                        <div class="col-md-7">
                            <div class="box box-primary">
                                <div class="box-header with-border">
                                    <h3 class="box-title">Add your Thought</h3>
                                </div>
                                <form class="form-horizontal" id="regForm" method="post" action="thought.php">
                                <div class="box-body">
                                    
                                    <div class="form-group">
                                        <label for="name" class="col-sm-2 control-label">Title</label>
                                        <div class="col-sm-10">
                                            <input type="text" required="required" class="form-control" id="name" name="title" placeholder="eg Musthafa Ali">
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label for="email" class="col-sm-2 control-label">Your Thought</label>
                                        <div class="col-sm-10">
                                            <textarea row="4" cols="50" required="required" name="thought" class="form-control" id="stdGuardian" placeholder="Your Thought"></textarea>
                                        </div>
                                    </div>
                                </div>
                                    
                                    <!-- /.box-body -->
                                    <div class="box-footer">
                                        <button type="submit" class="btn btn-primary">Submit</button>
                                    </div>
                                </form>
                                
                            </div>
                        </div>
                    </div>
                </section> 
                <!-- /.content -->
            </div>
            <!-- /.content-wrapper --> 
              <footer class="main-footer">
    <div class="pull-right hidden-xs">
      <b>Version</b> 0.0.1 alpha
    </div>
    <strong>Copyright &copy; 2016-2020 <a href="#"> HELLOWorld</a>.</strong> All rights reserved.
  </footer>
    </body
    <!-- jQuery 2.2.3 -->
    <script src="plugins/jQuery/jquery-2.2.3.min.js"></script>
    
    <!-- jQuery UI 1.11.4 -->
    <script src="https://code.jquery.com/ui/1.11.4/jquery-ui.min.js"></script>
    <!-- Resolve conflict in jQuery UI tooltip with Bootstrap tooltip -->
    <script>
        $.widget.bridge('uibutton', $.ui.button);
    </script>
    
    <!-- Bootstrap 3.3.6 -->
    <script src="bootstrap/js/bootstrap.min.js"></script>
    
    <!-- InputMask -->
    <script src="plugins/input-mask/jquery.inputmask.js"></script>
    <script src="plugins/input-mask/jquery.inputmask.date.extensions.js"></script>
    <script src="plugins/slimScroll/jquery.slimscroll.min.js"></script>
    <script src="dist/js/app.min.js"></script>
    <script>
        $(document).ready(function () {

            $(":input").inputmask();

        });
    </script>
    <script src="dist/js/jquery.validate.js"></script>
    <script>
        $().ready(function() {
            $("#regForm").validate({
                rules: {
                    admissionNum :{
                        required :true,
                        minlength :6,
                        maxlength :6
                    }
                },
                messages:{
                    admissionNum :{
                        required:"Enter Admission Number",
                        minlength:"Must Be 6 Digit",
                        maxlenth:"Must Be 6 Digit"
                    }
                }
             });
         });
        
    </script>
    

</html>
