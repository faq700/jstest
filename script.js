window.onload = function() {
	$('.bot').val('right').click( function () {
		var i=0;
		var src=[];
		$(".botimg").each(function(){
			src[i]=$(this).attr("src");
			i++;
		});
		var sr=src[0].split(';');
		alert(src);
		alert(sr.split(';'));
		$.ajax({
			url: "mvc.php",
			type: "POST",
			data: {move: 'right'},
			success: function(data){
				alert(data);
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
