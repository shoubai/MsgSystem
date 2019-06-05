<?php
require_once('../Model/lib/config.php');
?>
<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>判断逻辑</title>
</head>

<body>
	<?php
	$msg = $_POST['comment'];
	
	if(!$msg){
		exit('<script>alert("留言不能为空"); history.back();</script>');
	}
	
	$sql = "insert into 
	guestbook(uid, comment, addtime, ip) 
	values('".$_SESSION['uid']."','".$msg."', '".time()."','".$_SERVER['REMOTE_ADDR']."')";
	
	$query = $db -> query($sql);
	if($query) {
		exit('<script>alert("回复成功"); window.location.href = "../Views/guestBook.php";</script>');
	}else{
		exit('<script> alter("回复失败")； history.back();</script>');
	}
	?>
</body>
</html>