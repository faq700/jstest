window.onload = function() {
	$.ajax({
		url: "mvc.php",
		dataType : "json",
		type: "POST",
		sucess: function (data, textStatus) {
			alert('d');
		}
	});

}

