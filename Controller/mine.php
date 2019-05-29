<?php
    require_once('./config.php');
//    echo $_SESSION['nickname'];
?>
<!-- 用户信息界面 -->
<!DOCTYPE html>
<head>
	<style>
		table{
			float: inherit;
		}
		td{
			text-align: center;
		}
		body{
			background-image: url("../Views/bg11.jpg")
		}
	</style>
    <meta charset="UTF-8">
    <title>修改个人信息</title>
</head>
<body>
	<div style="height: 70px;" >
	<p style="float:right">欢迎用户
		<?php echo $_SESSION['nickname'];?>
		<br>
		<a href="guestbook.php">进入留言板</a>
		<a href="chart.php">进入聊天室</a>
		<a href="mine.php">个人中心</a>
		<a href="logout.php">退出</a>
	</p>
	</div>
	<hr>
	<div style="height:20px"></div>
	<table border="1" align="center" width="780px" height="200px">
		<tr>
			<th colspan="3">用户信息</th>
		</tr>
		<tr>
			<th>用户账号</th>
			<th>用户名</th>
			<th>用户头像</th>
		</tr>
    <?php
        $nickname = $_SESSION['nickname'];
        $sql = "select * from userlist where nickname = '".$nickname."'";
        $info = $db -> getRows($sql);
//		print_r($info)
		
		foreach($info as $v){?>
			<tr>
				<td>
					<?php echo $v['username']?>
				</td>
				<td>
					<?php echo $v['nickname']?>
				</td>
				<td>
					<img src="<?php echo $v['headimg']?>"height="100px" width="100px"; >
				</td>
			</tr>
		<?php }?>
		</table>
</body>
</html>