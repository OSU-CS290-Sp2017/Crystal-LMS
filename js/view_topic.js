function GetQueryString(name) {
    var reg = new RegExp("(^|&)" + name + "=([^&]*)(&|$)");
    var r = window.location.search.substr(1).match(reg);
    if (r != null)
        return unescape(r[2]);
    return "";
}
$("").ready(function(){
	var topic_id=GetQueryString('tid');
	$.ajax({
		type:"get",
		url:"view_topic.php",
		data:{tid:topic_id},
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
function delete_topic(obj){
	var tid=$(obj).data("tid");
	layer.confirm('<span style="color:#000000">Confirm to delete topic?</span>',function(index){
		appid=$(obj).data('appid');
		//alert(appid);
		var aid=GetQueryString('aid');
	   $.ajex({
	   type:"post"
	   url:"delete_topic.php";
	   data:{tid:tid},
	   async:true,
	   success:function(data){
	   	layer.msg('<span style="color:#000000">Delete Success!</span>',{icon: 1,time:1000});
	   	window.location.href="topic_list.html";
	    }
	   });
	});
}
