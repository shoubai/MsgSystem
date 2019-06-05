<?php
require_once('../Model/lib/config.php');
$content = $_POST['co'];
if(!$content){
    $return = array('code'=>0, 'msg'=>'请填写内容');
    echo json_encode($return);
    exit;
}

$sql = "insert into chart(uid, content, addtime) value(".$_SESSION['uid'].",'".$content."',".time().")";
$query = $db->query($sql);

if($query){
    $return = array('code'=>1, 'msg'=>'成功');
    echo json_encode($return);
}else{
    $return = array('code'=>0, 'msg'=>'失败');
    echo json_encode($return);
}