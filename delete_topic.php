<?php
require './lib/mysql_contral.php';
require './lib/session_mem_classmode.php';
$db=new db_contral();
$db->connect_db();
$sess=new session_memcache();
if(isset($_SESSION['uid'])){
	if($_SESSION['isadmin']){
		$db->del_data('topic', array('tid'), array('='), array($_GET['tid']), array());
	}else{
		$db->del_data('topic', array('tid','uid'), array('=','='),array($_GET['tid'],$_SESSION['uid']), array('AND'));
	}
}
?>