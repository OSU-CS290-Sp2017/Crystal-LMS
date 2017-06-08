<?php
include './lib/mysql_contral.php';
include './lib/session_mem_classmode.php';
include './class_other.php';
$sess=new session_memcache();
$db=new db_contral();
$db->connect_db();
if(isset($_SESSION['uid'])){
	$r=$db->db_query_n1('files', 'fid', 0,'!=',0);
	echo json_encode($r);
}
?>