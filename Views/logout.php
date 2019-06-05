<?php
require_once('../Model/lib/config.php');
$_SESSION['uid'] = '';
$_SESSION['nickname'] = '';
header('location:login.php');
?>