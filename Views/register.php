<!DOCTYPE html>
<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
    <title>用户注册</title>
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
</head>

<body class="login-page sidebar-collapse">
    <!-- Navbar -->
    
    <!-- End Navbar -->
    <div class="page-header">
        <div class="page-header-image" style="background-image:url(../Model/front/img/bg4.jpg)"></div>
        <div class="container">
            <div class="col-md-4 content-center">
                <div class="card card-login card-plain">
                    <form class="form" action="../Controller/regSure.php" enctype="multipart/form-data" method="POST">
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
                                <input  name="headimg" id="headimg" type="file" class="form-control" />
                            </div>
                            <br>
                            <input type="submit" class="btn btn-primary btn-round btn-lg ">   
                            <br>已经有账号点此<a href="./login.php">登陆</a>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</body>
</html>