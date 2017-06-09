<?php
include './lib/session_mem_classmode.php';
include './lib/mysql_contral.php';
$db=new db_contral();
$db->connect_db();
$sess=new session_memcache();
if($_SESSION['isadmin']){
	$db->del_data('reply', array('rid'), array('='), array($_GET['rid']), array());
}else{
	$db->del_data('reply', array('rid','uid'), array('=','='), array($_GET['rid'],$_SESSION['uid']), array('AND'));
}
?>