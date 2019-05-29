<?php
//  链接界面
//  <?php 
session_start();
require_once('./12_MySQL.php');
define('DBHOST', '127.0.0.1');
define('DBUSER', 'root');
define('DBPASS', '');
define('DBNAME', 'phpcourse');
$db = new MySQL(DBHOST, DBUSER, DBPASS, DBNAME);