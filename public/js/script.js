function onOpenerClicked(button) {
	var doorNum = $(button).data("door-num");
	$.ajax({
		url:'http://192.168.86.251/api.php',
		data: {
			'door':doorNum
		},
		dataType: "json",
		success: function (data,textStatus) {
			console.log(textStatus)
		}

	})
}
