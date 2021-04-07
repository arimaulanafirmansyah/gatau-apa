function checkId() {
	var fb = $("#fb").val();

	if(fb == "") {
		$(".errorMsg").html('<span class="zmdi zmdi-close-circle" style="margin-rfbht: 5px;color:black;"></span> URL Tidak Boleh Kosong');
		$(".errorMsg").show();
	} else {
		$.ajax({
			url: 'apifb.php',
			type: 'POST',
			data: 'fb='+fb,
			beforeSend: function() {
				$(".errorMsg").html('<span class="zmdi zmdi-spinner zmdi-hc-spin" style="margin-rfbht: 5px;color:black;"></span> Memverifikasi URL');
				$(".errorMsg").show();
			},
			success: function(response) {
				if(response == "") {
					$(".errorMsg").html('<span class="zmdi zmdi-close-circle" style="margin-rfbht: 5px;color:black;"></span> URL Tidak Ditemukan');
					$(".errorMsg").show();
				} else {
					$("#result").html(response);
					$("input#getUId").val(fb);
					$("input#getNickId").val(response);
					$(".welcome").hide();
				}
			}
		});
	}
}