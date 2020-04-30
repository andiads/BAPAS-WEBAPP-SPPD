<?php 
//(ANDI DWI SAPUTRO) - IG: @afaroee TW: @faroee  
include("../config/func.php"); 
$fullname = $_SESSION['fullname'];
$nip = $_SESSION['username_target'];
$golongan = $_SESSION['golongan'];
$jabatan = $_SESSION['jabatan'];
//$tanggal = getCurrentDate();
?>
<style type="text/css">
	.error {
		font-size: 12px;
		border: 2px solid #f00;
	}
</style>
<div class="d-sm-flex align-items-center justify-content-between mb-4">
	<h1 class="h3 mb-0 text-gray-800">Entry SPPD</h1>
</div>
<div class="role" id="create-sppd">
	<div class="card shadow mb-2">
		<div class="card-header py-3">
			<h6 class="m-0 font-weight-bold text-primary">Buat Surat Perintah Perjalanan Dinas Baru</h6>
		</div>
		<div class="card-body mb-2">
	
			<form class="form" method="POST" id="input-sppd" action="./js/ajax_sppd.php">

				<div class="row">
					<div class="col-md-6">
						<div class="form-group">
							<label>Nama: </label>
							<input type="text" class="form-control form-control-user" name="fullname" id="fullname" value='<?php echo $fullname ?>' required>
						</div>
						<div class="form-group">
							<label>NIP: </label>
							<input type="text" class="form-control form-control-user" name="nip" id="nip" value='<?php echo $nip ?>' required>
						</div>
					</div>
					<div class="col-md-6">
						<div class="form-group">
							<label>Pangkat/Golongan: </label>
							<input type="text" class="form-control form-control-user" name="golongan" id="golongan" value='<?php echo $golongan ?>' required>
						</div>
						<div class="form-group">
							<label>Jabatan: </label>
							<input type="text" class="form-control form-control-user" name="jabatan" id="jabatan" value='<?php echo $jabatan ?>' required>
						</div>
					</div>
				</div>

				<hr/>

				<div class="row">
					<div class="form-group col-md-4">
						<label>Tempat Tujuan</label>
						<input type="text" class="form-control form-control-user" name="tujuan" id="tujuan" required>
					</div>
					<div class="form-group col-md-4">
						<label>Nama Klien</label>
						<input type="text" class="form-control form-control-user" name="nama-klien" id="nama-klien">
					</div>
				</div>

				<div class="form-group">
					<label>Maksud Perjalanan Dinas</label>
					<textarea class="form-control" name="maksud" id="maksud" rows="3" required></textarea>
				</div>
				<div class="form-group">
					<button class="btn btn-success btn-user btn-block" id="btn-save-sppd" type="submit">Save</button>
				</div>
				<div class="error-message-validation" role="alert" id="errorMessageValidation"></div>
			</form>


			<div class="loading" id="loading" role="status"></div>
			<div class="container-fluid" id="result-sppd-input"></div>

		</div>
	</div>
</div>



<!-- Alert Modal-->
  <div class="modal fade" id="alertModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalLabel">Error!</h5>
          <button class="close" type="button" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">×</span>
          </button>
        </div>
        <div class="modal-body">Ada kesalahan, harap masukkan semua data pada kolom form yang tersedia!</div>
        <div class="modal-footer">
          <button class="btn btn-secondary" type="button" data-dismiss="modal">Close</button>
        </div>
      </div>
    </div>
  </div>



<script type="text/javascript">
$(function() {
	
	//$("#errorMessageValidation").hide();

	$("#input-sppd").validate({
		//focusCleanup: true,

		
		messages: {
			tujuan: {
				required: "Harap isi tempat tujuan perjalanan dinas Anda!",
			},
			maksud: {
				required: "Harap isi maksud dari perjalanan dinas Anda!",
			},
			errorLabelContainer: $("ul", $('div#errorMessageValidation')),
			wrapper: 'li',
			errorContainer: $('div#errorMessageValidation'),
			errorPlacement: function(error, placement) {
				var errorDiv 	= $("#errorMessageValidation");
				
				errorDiv.addClass("alert alert-danger");
				error.appendTo("#errorMessageValidation");
				//errorDiv.show(100);
			
			},
			success: function(error) {
				error.remove();
			},
		},
		submitHandler: function(form) {
			event.preventDefault();
			$.ajax({
				url			: form.action,
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
	
</script>