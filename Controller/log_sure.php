<?php
require_once('./config.php');

?>
<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>判断逻辑</title>
</head>

<body>
	<?php
	$username = $_POST['username'];
	$password = $_POST['password'];
	if(!$username)
	{
		exit('<script> alert("用户名密码不能为空"); history.back();</script>');
	}
	 $sql = "select * from userlist where username = '".$username."'";
	 $userinfo = $db -> getRow($sql);
	 if($userinfo){
	 	if(md5($password)!= $userinfo['password']){
	 		exit('<script> alert("用户名密码错误 请检查是否正确"); history.back();</script>');
	 	}
	 	else{
	 		$_SESSION['uid'] = $userinfo['uid'];
	 		$_SESSION['nickname'] = $userinfo['nickname'];
	 		exit('<script>alert("Access Successful"); window.location.href = "guestbook.php"</script>');
	 	}
	 }else{
	 	exit('<script> alert("用户未注册"); history.back();</script>');
	 }
	?>
</body>
</html>