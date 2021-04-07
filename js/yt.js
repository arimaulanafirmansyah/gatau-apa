function checkId() {
	var yt = $("#yt").val();

	if(yt == "") {
		$(".errorMsg").html('<span class="zmdi zmdi-close-circle" style="margin-right: 5px;color:black;"></span> URL Tidak Boleh Kosong');
		$(".errorMsg").show();
	} else {
		$.ajax({
			url: 'apiyt.php',
			type: 'POST',
			data: 'yt='+yt,
			beforeSend: function() {
				$(".errorMsg").html('<span class="zmdi zmdi-spinner zmdi-hc-spin" style="margin-right: 5px;color:black;"></span> Memverifikasi URL');
				$(".errorMsg").show();
			},
			success: function(response) {
				if(response == "") {
					$(".errorMsg").html('<span class="zmdi zmdi-close-circle" style="margin-right: 5px;color:black;"></span> URL Tidak Ditemukan');
					$(".errorMsg").show();
				} else {
					$("#result").html(response);
					$("input#getUId").val(yt);
					$("input#getNickId").val(response);
					$(".welcome").hide();
				}
			}
		});
	}
}