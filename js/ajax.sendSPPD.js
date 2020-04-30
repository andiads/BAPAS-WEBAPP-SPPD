$("#input-sppd").validate({
		submitHandler: function(form) {
			event.preventDefault();
			$.ajax({
				url			: './js/ajax_sppd.php',
				type 		: 'POST',
				data 		: $(form).serialize(),
				beforeSend	: function() {
					$("#loading").addClass("spinner-border text-primary");
				},
				success 	: function(data) {
					$("#loading").removeClass("spinner-border text-primary");
					$("#result-sppd-input").load("./frontend/view_ajaxLoadSPPD.php");
				}
			});
		}
	});