<?php
require_once('../Model/lib/config.php');

//获取用户最后一次请求聊天数据的时间
$sql = "select * from userlist where uid = ".$_SESSION['uid'];
$user = $db -> getRow($sql);
$lasttime = $user['getcharttime'];

//更新getcharttime
$sql  ="update userlist set getcharttime = ".time()." where uid=".$_SESSION['uid'];
$db->query($sql);

//查询留言列表
$sql = "select c.*,u.nickname from chart c left join userlist u on c.uid = u.uid where addtime >=".$lasttime;
$list = $db->getRows($sql);
$return['code'] = 1;
foreach($list as &$one){
    $one['addtime'] = date("Y-m-d H:i",$one['addtime']);
}
unset($one);
$return['list'] = $list;

//10s内没发言的用户定义为下线
$sql = "select * from userlist where getcharttime >".(time()-10);
$userlist = $db->getRows($sql);
$userlist1 = array();
foreach($userlist as &$v){
    $userlist1 = $v['nickname'];
}
$return['userlist'] = $userlist1;

echo json_encode($return);

?>