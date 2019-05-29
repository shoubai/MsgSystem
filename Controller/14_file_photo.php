<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>无标题文档</title>
</head>
<form  method="post" enctype="multipart/form-data" name="form1" id="form1">
	<label for="fileFiled">File:</label>
	<input type="file" name="img" >
	<input type="submit" name="submit" id="submit" value="提交">
</form>
	<?php
	@$img = $_FILES['img'];
	if($img){
		require_once('14_file_sure.php');
		$file = new uploadfile();
		$info = $file->upload($img);
		print_r($info);
	}
	exit;
//	$ext = substr($img['name'],strrpos($img['name'],'.'));
//	$newfilename = date("YmdHis") . rand(1000,9999) . $ext;
//	move_uploaded_file($img['tmp_name'],$newfilename);
	?>
<body>
</body>
</html>