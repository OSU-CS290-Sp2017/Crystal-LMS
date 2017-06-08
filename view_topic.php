<?php
include './lib/mysql_contral.php';
include './lib/session_mem_classmode.php';
$sess=new session_memcache();
if(isset($_GET['tid'])&&isset($_SESSION['uid'])){
	$db=new db_contral();
	$db->connect_db();
	$r=$db->db_query_n1('topic', 'tid', $_GET['tid']);
	$r2=$db->db_query_n1('reply', 'tid', $_GET['tid'],'=',0);
	$send=array();
	$send['topic']=$r[0];
	$send['reply']=$r2;
	foreach($send['reply'] as $k=>$v){
		if($send['reply'][$k]['uid']==$_SESSION['uid']){
			$send['reply'][$k]['isown']=1;
		}else{
		    $send['reply'][$k]['isown']=0;
		}
	}
	echo json_encode($send);
}
?>
