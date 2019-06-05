<?php
require_once('../Model/lib/config.php');

$sql = "select *from chart";
$list = $db->getRows($sql);
$return['code'] = 1;
$return['list'] = $list;
echo json_encode($return);

?>