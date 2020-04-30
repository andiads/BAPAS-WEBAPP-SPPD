<!-- Page Heading -->
<div class="d-sm-flex align-items-center justify-content-between mb-4">
	<h1 class="h3 mb-0 text-gray-800">Role User</h1>
</div>
<div class="row">
	<!-- Data Table Role -->
	<div class="col-lg-6">
		<div class="card shadow mb-2">
			<div class="card-header py-3">
				<h6 class="m-0 font-weight-bold text-primary">List User Role</h6>
			</div>
			<div class="card-body">
				
				<div class="table-responsive">
					<table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
						<thead>
							<tr>
								<th>Kode</th>
								<th>Keterangan</th>
								<th>Action</th>
							</tr>
						</thead>
						<tbody>
							<?php include("../backend/proc_Role.php"); ?>
						</tbody>
					</table>
				</div>
			</div>
		</div>
	</div>
	<!-- Data Table User -->
	<div class="col-lg-6">
		<div class="card shadow mb-2">
			<div class="card-header py-3">
				<h6 class="m-0 font-weight-bold text-primary">Olah Roles</h6>
			</div>
			<div class="card-body">
				<form role="form" name="frmRoles" id="frmRoles">
					<div class="form-group">
						<div class="col-md-1">
							<label>Kode:</label>
						</div>
						<div class="col-sm-4">
							<input type="text" class="form-control" name="kdRole" id="kdRole" maxlength="4" placeholder="Kode">
							<input type="hidden" name="rKdRole" id="rKdRole">
							<div class="text-center">0001-9999</div>
						</div>
					</div>
					<div class="form-group">
						<div class="col-sm-1">
							<label>Keterangan:</label>
						</div>
						<div class="col-sm-6">
							<input type="text" class="form-control form-control-user" name="ketRole" id="ketRole">
						</div>
						<div class="col-sm-6">
							<button type="submit" class="btn btn-primary">Save</button>
						</div>
					</div>
					<div class="form-group">
						<div id="pohon"></div>
					</div>
				</form>
			</div>
		</div>
	</div>
</div>
<!-- Page level plugins -->
<script src="./js/datatables/jquery.dataTables.min.js"></script>
<script src="./js/datatables/dataTables.bootstrap4.min.js"></script>

<!-- Page level custom scripts -->
<script src="./js/datatables-demo.js"></script>


<!-- FancyTree Load -->

<!-- FancyTree -->
<script src="./vendor/fancytree/jquery.fancytree-all-deps.min.js"></script>
<script src="./js/pohon-level.js"></script>