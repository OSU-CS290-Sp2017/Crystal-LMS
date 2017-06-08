function ajex_login(){
	$.ajax({
		type:"post",
		url:"login.php",
		async:true,
		data:$("login_form").serialize(),
		success:function(req){
			var json=eval(req);
			if($json[0].status==1){
				window.location.href="dashboard.html";
			}
			else{
				window.location.href='index.html';
			}
		}
	});
}
