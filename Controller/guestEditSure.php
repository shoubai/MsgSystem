<?php 
require_once('../Model/lib/config.php')
?>
<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>用户留言编辑判断</title>
</head>

<body>
	<?php
		$id = intval($_POST['id']);
		$comment = $_POST['comment'];
		if (!$comment){
            exit('<script>alert("请输入留言");history.back();</script>');
        }
        $sql = "update guestbook set comment= '".$comment."' where id=".$id." and uid = ".$_SESSION['uid'];
        $query = $db->query($sql);
        if($query){
            exit('<script>alert("编辑成功");window.location.href="../Views/guestBook.php";</script>');
        }else{
            exit('<script>alert("编辑失败");history.back();</script>');
        }
	?>
</body>
</html>