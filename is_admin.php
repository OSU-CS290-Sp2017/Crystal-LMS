<?php
include './lib/mysql_contral.php';
include './lib/session_mem_classmode.php';
if(isset($_SESSION['isadmin']==1)){
	$r['isadmin']=1;
	echo json_encode($r);
}
?>