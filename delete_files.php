<?php
include './lib/session_mem_classmode.php';
include './lib/mysql_contral.php';
$db=new db_contral();
$db->connect_db();
$sess=new session_memcache();
if($_SESSION['isadmin']==1){
	$db->del_data('files', array('fid'), array('='), array($_GET['fid']), array());
}
?>