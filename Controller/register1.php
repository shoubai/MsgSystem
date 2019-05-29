<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>注册界面</title>
</head>

<body>
<form action="./regSure.php" enctype="multipart/form-data" method="post">
	<table width="800" border="1" align="center">
  	<tbody>
	<th colspan="2">
	  用户注册
	  </th>
    <tr>
      <td>用户名</td>
      <td align="center"><input type="text" name="username" id="username"></td>
    </tr>
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
	  <td>用户上传头像</td>
      <td align="center"><input type="file" name="headimg" id="headimg"></td>
	  </tr>
    <tr>
      <td></td>
      <td align="center"><input type="submit" value="提交" >已经有账号点此<a href="login.php">登陆</a></td>
    </tr>
  </tbody>
</table>
</form>
</body>
</html>