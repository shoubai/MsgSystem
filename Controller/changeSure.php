<?php
require_once('./config.php');
require_once('./14_file_sure.php');
?>
<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>修改个人信息判断逻辑</title>
</head>

<body>
    <?php
        $username = $_SESSION['username'];
        $password = $_POST['password'];
        $repassword = $_POST['repassword'];
        $nickname = $_POST['nickname'];
        $headimg = $_FILES['headimg'];

        $classname = new uploadfile();
        $mind = $classname -> upload($headimg);
        $url = $mind['url'];

        if($password != $repassword) {
            exit('<script>alert("两次密码输入不一致"); history.back(); </script>');
        }

        $sql = "delete from userlist where username = ".'$username'."";

        $sql = "insert into
        userlist(username, password, nickname, headimg, regtime, regip) 
        values('".$username."', '".md5($password)."', '".$nickname."','".$url."', '".time()."','".$_SERVER['REMOTE_ADDR']."')";
        $query = $db -> query($sql);
        if($query) {
            exit('<script>alert("更新成功"); window.location.href = "./guestbook.php"</script>');
        }else{
            exit('<script> alter("更新失败")； history.back();</script>');
        }
    ?>
</body>
</html>