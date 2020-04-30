<?php include'../config/func.php';?>

	<div class="card shadow">
		<div class="card-header py-3">
			<h6 class="m-0 font-weight-bold text-primary">Result:</h6>
		</div>
		<div class="card-body">
			Data berhasil disimpan!<hr/>
			<div class="row">
				<div class="col-lg-12">
					<button class="btn btn-primary btn-user btn-block btn-danger" id="printPDF" data-toggle="modal" data-target="#modalFrameSPPD">Cetak PDF</button>
				</div>
			</div>
			<hr>
			<div class="row">
				<div class="col-lg-12">
					<button class="btn btn-primary btn-user btn-block btn-alert" id="resetForm">Buat surat baru lainnya</button>
				</div> 
			</div>
		</div>
	</div>


	<!-- Modal Frame SPPD <load html suprin before print out -->
	<div class="modal fade" id="modalFrameSPPD" tabindex="-1" role="dialog" aria-labelledby="modalFrameSPPDTitle" aria-hidden="true">
		<div class="modal-dialog modal-lg" role="document">
			<div class="modal-content">
				<div class="modal-header">
					<h5 class="modal-title" id="modalFrameSPPDTitle">Preview Surat Perintah</h5>
					<button type="button" class="close" data-dismiss="modal" aria-label="Close">
          				<span aria-hidden="true">&times;</span>
        			</button>
				</div>
				<div class="modal-body">
					<iframe src="<?php echo $APP_PATH ?>/frontend/view_suprinPDF.php" width="100%" height="80%" frameborder="0" allowtransparency="true" id="iFramePDF"></iframe> 
				</div>
				<div class="modal-footer">
					<button type="button" class="btn btn-primary" data-dismiss="modal">Close</button>
					<a href="<?php echo $APP_PATH ?>/frontend/view_suprinPDF.php?op=download" class="btn btn-success" id="btnSavePDF" target="_blank">Save dan Print PDF</a>
				</div>
			</div>
		</div>
	</div>	
<script type="text/javascript">
	$(function() {
			
			$("#resetForm").click(function(e) {
				e.preventDefault();
				$("#input-sppd").trigger("reset");
				$("#result-sppd-input").html('');
				$("#errorMessageValidation").removeClass("alert alert-danger");
			})	

	});
</script>