$("").ready(function(){
	$.ajax({
		type:"get",
		url:"list_topic.php",
		async:true,
		success:function(data){
			var json=eval(data);
			for(var i=0;i<json.length;i++){
				var app_html="";
				$("").append(app_html);
			}
		}
	});
});
