function check_admin(){
	$.ajax({
		type:"get",
		url:"is_admin.php",
		async:false,
		success:function(data){
			var json=eval(data);
			
		}
	});
}
