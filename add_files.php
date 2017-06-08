<?php
include './lib/session_mem_classmode.php';
include './lib/mysql_contral.php';
include './lib/class_other.php';
$sess=new session_memcache();
$o=new other_func();

if($_SESSION['isadmin']==1){
	if(is_uploaded_file($_FILES['file']['tmp_name'])){
		$name=$_POST['fname'];
		$extend=explode(".", $_FILES['file']['name']);
		$extend=$extend[count($extend)-1];
		$rn=$o->random(10, 1);
		$fname=$rn.$extend;
		$db=new db_contral();
		$db->connect_db();
		$db->ins_data('files', array('fname','rname','uid'), array($name,$fname,$_SESSION['uid']));
	}
}
?>