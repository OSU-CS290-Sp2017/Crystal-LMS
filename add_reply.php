<?php
include './lib/mysql_contral.php';
include './lib/session_mem_classmode.php';
$sess=new session_memcache();
$db=new db_contral();
$db->connect_db();
$db->ins_data('reply', array('txt','uid','tid'), array($_POST['txt'],$_SESSION['uid'],$_POST['tid']);
?>