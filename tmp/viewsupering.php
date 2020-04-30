		<!--
			<div class="row">
				<div class="col-md-4">
					<span>Nama Anda&nbsp;&nbsp;&nbsp;&nbsp;: </span>
					<span><b>&nbsp;<?php //echo $fullname ?></b></span><br/>
					<span>NIP&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;: </span>
					<span>&nbsp;<?php //echo $nip ?></span>
				</div>
				<div class="col-md-8">
					<span>Tanggal&nbsp;: </span>
					<span>&nbsp;<?php //getCurrentDate(); ?></span>
				</div>
			</div>
			<hr/>
			-->

				var saveBtn 	= $("btn-save-sppd");
	var txtNama 	= $("#create-sppd").find("input[name='fullname']").val();
	var txtNip  	= $("#create-sppd").find("input[name='nip']").val();
	var txtJabatan 	= $("#create-sppd").find("input[name='jabatan']").val();
	var txtGolongan = $("#create-sppd").find("input[name='golongan']").val();
	var txtTujuan 	= $("#create-sppd").find("input[name='tujuan']").val();
	var txtMaksud 	= $("#create-sppd").find("input[name='maksud']").val();
	var txtKlien 	= $("#create-sppd").find("input[name='nama-klien']").val();

	var saveBtn 	= $("btn-save-sppd");
	var txtNama 	= $("#fullname").val();
	var txtNip  	= $("#nip").val();
	var txtJabatan 	= $("#jabatan").val();
	var txtGolongan = $("#golongan").val();
	var txtTujuan 	= $("#tujuan").val();
	var txtMaksud 	= $("#maksud").val();
	var txtKlien 	= $("#nama-klien").val();


	if (txtTujuan != '' && txtMaksud != '') {
		$.ajax({
				url: './js/ajax_sppd.php',
				type: 'POST',
				data: $("#input-sppd").serialize(),
				dataType: 'json',
			}).done(function(data){
				$("#result-sppd-input").load("./frontend/view_ajaxLoadSPPD.php");
			});
		} else {
			$("#alertModal").modal('toggle');
			//alert("Harap isi kolom form yang masih kosong !!");
		}

		//



		most newest:::

		$("#input-sppd").on("submit", function(e){
		e.preventDefault();

		$("#input-sppd").validate({

		
		submitHandler: function(form) {
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
	
	});
	