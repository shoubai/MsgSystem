<!DOCTYPE html>
<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
    <meta content='width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0, shrink-to-fit=no' name='viewport' />
    <!--     Fonts and icons     -->
    <link href="https://fonts.googleapis.com/css?family=Montserrat:400,700,200" rel="stylesheet" />
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/latest/css/font-awesome.min.css" />
    <!-- CSS Files -->
    <link href="../Model/front/css/bootstrap.min.css" rel="stylesheet" />
    <link href="../Model/front/css/now-ui-kit.css?v=1.1.0" rel="stylesheet" />
    <!-- CSS Just for demo purpose, don't include it in your project -->
    <link href="../Model/front/css/demo.css" rel="stylesheet" />
    <!-- Canonical SEO -->
    <link rel="canonical" href="" />
    <!--  Social tags      -->
    <meta name="keywords" content="">
    <meta name="description" content="">
    <title>登录界面</title>
    
</head>

<body class="login-page sidebar-collapse">
    <div class="page-header">
        <div class="page-header-image" style="background-image: url(../Model/front/img/bg4.jpg);"></div>
        <div class="container">
            <div class="col-md-4 content-center">
                <div class="card card-login card-plain">
                    <form class="form" method="POST" action="../Controller/logSure.php" enctype="multipart/form-data">
                    <div>
                        <h2>留言管理系统</h2>
                    </div>
                        <div class="content">
                            <div class="input-group form-group-no-border input-lg">
                                <span class="input-group-addon">
                                    <i class="now-ui-icons users_circle-08"></i>
                                </span>
                                <input name="username" id="username" type="text" class="form-control" placeholder="用户名">
                            </div>
                            <br>
                            <div class="input-group form-group-no-border input-lg">
                                <span class="input-group-addon">
                                    <i class="now-ui-icons text_caps-small"></i>
                                </span>
                                <input name="password" id="password" type="password" placeholder="密码" class="form-control" /> 
                            </div>
                            <br>
                                <input type="submit" class="btn btn-primary btn-round btn-lg ">
                                <a href="./register.php" class="btn btn-primary btn-round btn-lg ">注册</a>
                        </div>
                    </form>
                    
                </div>
            </div>
        </div>
    </div>
</body>

<!-- <script src="assets/js/plugins/bootstrap-switch.js"></script>

<script src="assets/js/plugins/nouislider.min.js" type="text/javascript"></script>

<script src="assets/js/plugins/bootstrap-datepicker.js" type="text/javascript"></script>

<script src="assets/js/plugins/jquery.sharrre.js" type="text/javascript"></script>

<script src="assets/js/now-ui-kit.js?v=1.1.0" type="text/javascript"></script> -->

</html>