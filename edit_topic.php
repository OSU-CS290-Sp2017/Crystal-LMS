<?php
include './lib/mysql_contral.php';
include './lib/session_mem_classmode.php';
$sess=new session_memcache();$db=new db_contral();
$db->connect_db();
if(isset($_SESSION['uid'])&&isset($_POST['tid'])){
	if($_SESSION['isadmin']==1){
		$db->update_data_basic('topic', array('title','txt'), array($_POST['title'],$_POST['txt']), 'tid','=', $_POST['tid']);
	}else{
	    $db->update_data_normal('topic', array('title','txt'), array($_POST['title'],$_POST['txt']), array('uid','tid'), array('=','='), array($_SESSION['uid'],$_POST['tid']), array('AND'));
	}
}else{
	
}
?>