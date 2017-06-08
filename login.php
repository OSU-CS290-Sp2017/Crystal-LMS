<?php
include './lib/mysql_contral.php';
include './lib/session_mem_classmode.php';
$sess=new session_memcache();
if(isset($_POST['usr'])&&isset($_POST['pwd'])){
  $db=new db_contral();
  $db->connect_db();
  $r=$db->db_query_n1('acc','usr',$_POST['pwd']);
  if(count($r)){
   	$pwd=md5($_POST['pwd'].$r[0]['salt']);
   	$r=$db->db_query_normal('acc',array('usr','pwd'),array($_POST['usr'],$pwd),array('=','='),array('AND'));
   	if(count($r)){
   		$_SESSION['isadmin']=$r[0]['is_admin'];
		  $_SESSION['uid']=$r[0]['uid'];
   	}
  }
}
?>