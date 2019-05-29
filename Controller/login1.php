<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>登陆界面</title>
</head>

<body>
<form action="./log_sure.php" enctype="multipart/form-data" method="post">
	<table width="600" border="1" align="center">
		<th colspan="2">
			用户登陆
		</th>
		<tbody>
			<tr>
				<td>用户名</td>
				<td align="center"><input type="text" name="username" id="username"></td>
			</tr>
			<tr>
				<td>密码</td>
				<td align="center"><input type="password" name="password" id="password"></td>
			</tr>
			<tr>
				<td></td>
     			<td align="center"><input type="submit" value="登陆" ></td>
			</tr>
			<tr>
				<td colspan="2" align="center">没有账号<a href="./register.php">点击注册</a>
				   忘记密码<a href="./register.php">点击找回</a></td>
			</tr>
		</tbody>
	</table>
	</form>
</body>
</html>
