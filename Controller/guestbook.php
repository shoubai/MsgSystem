<?php
require_once('./config.php');
if(!$_SESSION['uid']){
	exit('<script>alert("该用户已经存在"); history.back();</script>');
}
?>
<!doctype html>
<html>
	<style>
		#btn{
			background-image: url("../Views/bg4.jpg");
			border: none;
			color:lightcyan;
			padding: 15px 32px;
			text-align: center;
			text-decoration: none;
			display: inline-block;
			font-size: 16px;
		}
		textarea{
			border:1;
			background-color:transparent;
			/*scrollbar-arrow-color:yellow;
			scrollbar-base-color:lightsalmon;
			overflow: hidden;*/
			color: #666464;
			height: auto;
			/* 去除倒三角 */
			resize:none;
			width:780px;
  		}
		#type{
			float: right;
		}
		
		#add{
			width: 708px; 
			min-height: 220px; 
			z-index: 0;
			margin: 10% 0 0 25%;
			/*调整字体大小*/
			font-size: 18px;
		}
		body{
			background-image: url("../Views/bg11.jpg")
		}
	</style>
<head>
<meta charset="utf-8">
<title>留言板块</title>
</head>

<body filter-color="orange">
	<style>
		td{
			text-align: left;
		}
	</style>
	<div style="height: 80px;">
		<p style="float:right">欢迎用户
		<?php echo $_SESSION['nickname'];?>
		<br>
		<a href="chart.php">进入聊天室</a>
		<a href="mine.php">个人中心</a>
		<a href="logout.php">退出</a>
	</p>
	</div>
	<hr>
	<div style="height:30px;">
	</div>
        <table border='1' align="center" width="780px" height="200px">
            <tr>
                <th>用户</th>
                <th>留言内容</th>
            </tr>
            <?php
                $sql = "select *,userlist.nickname,userlist.headimg
                from guestbook left join userlist on guestbook.uid =
                userlist.uid order by id desc";
                $list = $db->getRows($sql);
                foreach($list as $v){
                ?>
                    <tr>
                        <td>
							
							<img src="<?php echo $v['headimg']?> "height="50" width="50">
							<?php echo $v['nickname'];?>
						</td>
                        <td>
							<?php echo $v['comment']?>
							<br> 								  
							<div id="type">
								<?php echo date("Y-m-d H:i",$v['addtime']);?>
							</div>
							<?php
							if($v['uid']==$_SESSION['uid']){
					?>
							<br>
							<div id="type">
								<a href="guest_edit.php?id=<?php echo $v['id'];?>">编辑</a>&nbsp;
								<a href="guest_del.php?id=<?php echo $v['id'];?>">删除</a>	
							</div>
							
							<?php } ?>
                        </td>
                    </tr>
                <?php } ?>
		</table>
	<div style="height:400px;">
	<form action="./guest_sure.php" enctype="multipart/form-data" method="post">
		
			<textarea style="min-height: 220px;
			color:lightcyan;
			margin: 10% 0 0 23%;
			/*调整字体大小*/
			font-size: 18px;"  id="comment" name="comment"></textarea>
		
		<br>
		<br>
		<input style="margin: 0 0 0 46%;" type="submit" id="btn" value="留言提交">
	</form>
	</div>
</body>
</html>