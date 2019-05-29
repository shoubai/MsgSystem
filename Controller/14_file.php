<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>无标题文档</title>
</head>

<body>
	<?php
	$filename = "test.txt";
	$count = 1;
	if(file_exists($filename)){
		$file = fopen('$filename','r');
		$count = fgets($file);
		$fclose($file);
	};
	
	//如果fopen()中的文件不存在，会自动创建一个文件
	$file = fopen($filename,'w+') or die("Unable to open file!"); 
	//fwrite()与fputs()函数作用一样 写入
	//fwrite($file, 'aa');
	//fputs($file, 'bbb' );
	//$info = fgets($file);
	//$count = fgets($file);
	$count++;
	fputs($file, $count);
	fclose($file);
	echo $count;
	?>
</body>
</html>