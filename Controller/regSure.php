<?php
require_once('./config.php');	
require_once('./14_file_sure.php');
?>
<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>用户注册判断逻辑</title>
</head>

<body>
	<?php
	$username = $_POST['username'];
	$password = $_POST['password'];
	$repassword = $_POST['repassword'];
	$nickname = $_POST['nickname'];
	$headimg = $_FILES['headimg'];

	$classname = new uploadfile();
	$con = $classname->upload($headimg);
	$url = $con['url'];

	if(!$username) {
		exit('<script>alert("请输入用户名"); history.back(); </script>');
	}
	if(!$password) {
		exit('<script>alert("请输入密码"); history.back(); </script>');
	}
	if(!$repassword) {
		exit('<script>alert("请再输入密码"); history.back(); </script>');
	}
	if(!$nickname) {
		exit('<script>alert("请输入昵称"); history.back(); </script>');
	}
	if($repassword != $password)
	{
		exit('<script>alert("两次密码输入不一致"); history.back(); </script>');
	}
	
	$sql = "select * from userlist where username = '".$username."'";
	$userinfo = $db -> getRow($sql);
	if($userinfo){
		exit('<script> alert("该用户已经存在"); history.back();</script>');
	}
	$sql = "insert into
	userlist(username, password, nickname, headimg, regtime, regip) 
	values('".$username."', '".md5($password)."', '".$nickname."','".$url."', '".time()."','".$_SERVER['REMOTE_ADDR']."')";
	$query = $db -> query($sql);
	if($query) {
		exit('<script>alert("注册成功 请登录"); window.location.href = "./login.php"</script>');
	}else{
		exit('<script> alter("注册失败")； history.back();</script>');
	}
	?>
</body>
</html>