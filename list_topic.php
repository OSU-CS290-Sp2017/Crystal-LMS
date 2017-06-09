<?php
include './lib/mysql_contral.php';
include './lib/session_mem_classmode.php';
include './lib/class_other.php';
$sess=new session_memcache();
$db=new db_contral();
$db->connect_db();
if(!isset($_SESSION['uid'])){
	exit;
}
if(isset($_GET['search'])){
	$stxt='%'.$_GET['search'].'%';
	$r=$db->db_query_normal('topic', array('title','txt'), array($stxt,$stxt), array('like','like'), array('OR'),0,0);
}else{
	$r=$db->db_query_n1('topic', 'tid', 0,'!=',0);
	json_encode($r);
}
?>