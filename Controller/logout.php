<?php
require_once('./config.php');
$_SESSION['uid'] = '';
$_SESSION['nickname'] = '';
header('location:login.php');
?>