function checkId() {
	var hilih = $("#hilih").val();

	if(hilih == "") {
		$(".errorMsg").html('<span class="zmdi zmdi-close-circle" style="margin-right: 5px;color:black;"></span>Tidak Boleh Kosong');
		$(".errorMsg").show();
	} else {
		$.ajax({
			url: 'apihilih.php',
			type: 'POST',
			data: 'hilih='+hilih,
			beforeSend: function() {
$(".errorMsg").html('<span class="zmdi zmdi-spinner zmdi-hc-spin" style="margin-right: 5px;color:black;"></span> Memverifikasi USER ID');
				$(".errorMsg").show();
			},
			success: function(response) {
				if(response == "") {
					$(".errorMsg").show();
				} else {
					$("#result").html(response);
					$("input#getUId").val(hilih);
					$("input#getNickId").val(response);
					$(".welcome").hide();
				}
			}
		});
	}
}