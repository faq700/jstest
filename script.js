window.onload = function() {
	$('.bot').val('right').click( function () {
		var i=0;
		var src=[];
		var sr=[];
		var srcc;
		$(".botimg").each(function(){
			src[i]=$(this).attr("src");
			i++;
		});
		sr=src[src.length-1].slice();
		srcc=sr.split('/');
		sr=srcc[srcc.length-1].slice();
		$.ajax({
			url: "mvc.php",
			type: "POST",
			data: {move: 'right', last: sr},
			success: function(data){
				var res=JSON.parse(data);
				//alert(res);
				$("#1").attr("src", "./images/"+res[0]);
				$("#2").attr("src", "./images/"+res[1]);
				$("#3").attr("src", "./images/"+res[2]);
			},

		});
	});
}
/*
$(document).ready(function(){
	$.ajax({
		url: "server.php",
		type: "POST",
		dataType: "text",
		data: {a:'1', b:'2'},
		success: function(data){
			alert(data);
		}
	});
});
*/
