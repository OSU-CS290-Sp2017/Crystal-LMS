<?php
include './lib/mysql_contral.php';
include './lib/session_mem_classmode';
$sess=new session_memcache();
$db=new db_contral();
if(isset($_POST['rid'])){
	$db->connect_db();
	$db->update_data_normal('$tab', $item_arr, $data_arr, $o_item_arr, $typ_arr, $o_val_arr, $rel_arr);
}
?>