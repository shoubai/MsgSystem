<?php require_once('./config.php');?>
<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>留言删除</title>
</head>

<body>
<?php
		$id = intval($_GET['id']);
		$sql = "delete from guestbook where id=".$id." and uid = ".$_SESSION['uid'];
        $info = $db->query($sql);
        if($info){
            exit('<script>alert("删除成功");window.location.href="guestbook.php";</script>');
        }
	?>
</body>
</html>