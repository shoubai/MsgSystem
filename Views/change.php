<?php
// 修改个人信息
require_once('./config.php')
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>个人信息修改界面</title>
</head>
<body>
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
<form action="./changeSure.php" enctype="multipart/form-data" method="post">
	<table width="800" border="1" align="center">
  	<tbody>
	<th colspan="2">
	  修改个人信息
	  </th>
    <tr>
      <td>用户密码</td>
      <td align="center"><input type="password" name="password" id="password"></td>
    </tr>
    <tr>
      <td>重复密码</td>
      <td align="center"><input type="password" name="repassword" id="repassword"></td>
    </tr>
	<tr>
      <td>用户昵称</td>
      <td align="center"><input type="text" name="nickname" id="nickname"></td>
    </tr>
    <tr>
	  <td>用户头像</td>
      <td align="center"><input type="file" name="headimg" id="headimg"></td>
	  </tr>
    <tr>
      <td></td>
      <td align="center"><input type="submit" value="提交" ></td>
    </tr>
  </tbody>
</table>
</form>
</body>
</html>