<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <!-- <link rel="apple-touch-icon" sizes="76x76" href="assets/img/apple-icon.png"> -->
    <!-- <link rel="icon" type="image/png" href="assets/img/favicon.png"> -->
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
    <title>用户注册</title>
    <meta content='width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0, shrink-to-fit=no' name='viewport' />
    <!--     Fonts and icons     -->
    <link href="https://fonts.googleapis.com/css?family=Montserrat:400,700,200" rel="stylesheet" />
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/latest/css/font-awesome.min.css" />
    <!-- CSS Files -->
    <link href="../Module/css/bootstrap.min.css" rel="stylesheet" />
    <link href="../Module/css/now-ui-kit.css?v=1.1.0" rel="stylesheet" />
    <!-- CSS Just for demo purpose, don't include it in your project -->
    <link href="../Module/css/demo.css" rel="stylesheet" />
    <!-- Canonical SEO -->
    <link rel="canonical" href="" />
    <!--  Social tags      -->
    <meta name="keywords" content="">
    <meta name="description" content="">
</head>

<body class="login-page sidebar-collapse">
    <!-- Navbar -->
    
    <!-- End Navbar -->
    <div class="page-header">
        <div class="page-header-image" style="background-image:url(../Views/bg4.jpg)"></div>
        <div class="container">
            <div class="col-md-4 content-center">
                <div class="card card-login card-plain">
                    <form class="form" action="./regSure.php" enctype="multipart/form-data" method="POST">
                    <div>
                        <h2>注册</h2>
                    </div>
                        <div class="content">
                            <div class="input-group form-group-no-border input-lg">
                                <span class="input-group-addon">
                                    <i class="now-ui-icons users_circle-08"></i>
                                </span>
                                <input name="username" id="username" type="text" class="form-control"  placeholder="用户名">
                            </div>
                            <br>
                            <div class="input-group form-group-no-border input-lg">
                                <span class="input-group-addon">
                                    <i class="now-ui-icons text_caps-small"></i>
                                </span>
                                <input name="password" id="password" type="password" placeholder="请输入密码" class="form-control" />
                            </div>
                            <br>
                            <div class="input-group form-group-no-border input-lg">
                                <span class="input-group-addon">
                                    <i class="now-ui-icons text_caps-small"></i>
                                </span>
                                <input name="repassword" id="repassword" type="password" placeholder="请再次输入密码" class="form-control" />
                            </div>
                            <br>
                            <div class="input-group form-group-no-border input-lg">
                                <span class="input-group-addon">
                                    <i class="now-ui-icons gestures_tap-01"></i>
                                </span>
                                <input name="nickname" id="nickname" type="text" placeholder="请输入用户昵称" class="form-control" />
                            </div>
                            <br>
                            <div class="input-group form-group-no-border input-lg">
                                <span class="input-group-addon">
                                    <i class="now-ui-icons gestures_tap-01"></i>
                                </span>
                                <input  name="headimg" id="headimg" type="file"  class="form-control" />
                            </div>
                            <br>
                            <input type="submit" class="btn btn-primary btn-round btn-lg ">   
                            <br>已经有账号点此<a href="login.php">登陆</a>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</body>
  <!-- Core JS Files  
<script src="assets/js/core/jquery.3.2.1.min.js" type="text/javascript"></script>
<script src="assets/js/core/popper.min.js" type="text/javascript"></script>
<script src="assets/js/core/bootstrap.min.js" type="text/javascript"></script>
 Plugin for Switches, full documentation here: http://www.jque.re/plugins/version3/bootstrap.switch/
<script src="assets/js/plugins/bootstrap-switch.js"></script>
  Plugin for the Sliders, full documentation here: http://refreshless.com/nouislider/ -->
<script src="assets/js/plugins/nouislider.min.js" type="text/javascript"></script>
<!--  Plugin for the DatePicker, full documentation here: https://github.com/uxsolutions/bootstrap-datepicker -->
<script src="assets/js/plugins/bootstrap-datepicker.js" type="text/javascript"></script>
<!-- Share Library etc -->
<script src="assets/js/plugins/jquery.sharrre.js" type="text/javascript"></script>
<!-- Control Center for Now Ui Kit: parallax effects, scripts for the example pages etc -->
<script src="assets/js/now-ui-kit.js?v=1.1.0" type="text/javascript"></script> -->

</html>