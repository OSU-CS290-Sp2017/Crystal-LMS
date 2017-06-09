<?php
include './lib/mysql_contral.php';
include './lib/session_mem_classmode.php';
$sess=new session_memcache();
$db=new db_contral();
		$db->connect_db();
if(isset($_SESSION['uid'])){
	if(isset($_POST['title'])&&isset($_POST['txt'])){

		$db->ins_data('reply', array('title','txt','uid'), array($_POST['title'],$_POST['txt'],$_SESSION['uid']));
	}else{
		
	}
}
?>