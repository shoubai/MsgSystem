<?php
    require_once('./config.php');
    // if(!$_SESSION['username']){
    //     exit('<script>alert("当前用户未登录");window.location.href="login.php"</script>');
    // }
?>
<!doctype html>
<html>
<head>
	<style>
		.text{
			border:0;
			
			background-color:transparent;
			/*scrollbar-arrow-color:yellow;
			scrollbar-base-color:lightsalmon;
			overflow: hidden;*/
			color: #000000;
			height: auto;
			border-style:none;
			/* 去除倒三角 */
			resize:none;
			width:780px;
			min-height: 220px;
			z-index: 0;
			text-align: left;
			color:lightcyan;
			margin: 10% 0 0 23%;
			/*调整字体大小*/
			font-size: 18px;
  		}
		#text{
			float: left;
		}
		.btn{
			margin: 0 0 0 48%;	
			background-image: url("../Views/bg5.jpg");
			border: none;
			color:black;
			padding: 15px 32px;
			text-align: center;
			text-decoration: none;
			display: inline-block;
			font-size: 16px;
		}
		body{
			background-image: url("../Views/bg4.jpg");
			background-size: 100%;
		}
	</style>
<meta charset="utf-8">
<title>留言编辑</title>
</head>
	<?php
		$id = intval($_GET['id']);
		if(!$id){
			exit('<script>alert("参数错误"); history.back();</script>');
		}
		$sql = "select * from guestbook where id =".$id." and uid = " .$_SESSION['uid'];
		$info = $db -> getRow($sql);
		if(!$info){
			exit('<script>alert("参数错误"); history.back();</script>');
		}
	?>
<body >
		
	<form action="guest_edit_sure.php" method="post" enctype="multipart/form-data">  
			
				<input class="text" type="text" checked="checked" id="comment" name="comment"
					value="<?php echo $info['comment']?>">
			</div>
			<br>
			<input type="hidden" id="id" name="id" value=<?php echo $id ?>>   
			<br>        
			<input class="btn" type="submit" name="submit" id="submit" value="确定">
		</form>
</body>
</html>