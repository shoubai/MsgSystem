<?php
require_once('./config.php');
if(!$_SESSION['uid']){
	exit('<script>alert("该用户已经存在"); history.back();</script>');
}

?>
<script src="jq.js"></script>
<script src="sendbtn.js"></script>
<!DOCTYPE html>
<head>
    <style>
        table{
            margin: 2% 0 0 19%;
        }
        textarea{
            width: 100%;
            height: 100%;
            resize:none;
			background-color:transparent;
			font-size: 18px;
        }
		body{
			background-image: url("../Views/bg11.jpg")
		}
    </style>
    <meta charset="UTF-8">
    <title>聊天室</title>
</head>
<body>
	<p style="float:right;height: 10px;">欢迎用户
		<?php echo $_SESSION['nickname'];?>
		<br>
		<a href="guestbook.php">退出聊天室</a>
		<a href="mine.php">个人中心</a>
		<a href="logout.php">退出</a>
	</p>
	<br>
	<br><br>
	<hr>

   <table width="900" height="582" border="1">
  <tbody>
    <tr>
      <td width="707" height="380" id="showmsg">&nbsp;</td>
      <td width="177" rowspan="3">&nbsp;</td>
    </tr>
    <tr>
      <td height="109" >
          <textarea name="content" cols="20" rows="3" id="content" ></textarea>
        </td>
    </tr>
    <tr>
      <td height="48" ><input type="button" value="发送" id="sendbtn" style="float:right"></td>
    </tr>
  </tbody>
</table>

</body>
</html>