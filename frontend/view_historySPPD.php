<?php
include'../backend/proc_history.php';
?>
<!-- Page Heading -->
 <div class="d-sm-flex align-items-center justify-content-between mb-4">
    <h1 class="h3 mb-0 text-gray-800">History SPPD</h1>
</div>
  
    <!-- Data Table User -->
  <div class="card shadow mb-4">
      <div class="card-header py-3">
          <h6 class="m-0 font-weight-bold text-primary">History SPPD, milik <b><?php echo $_SESSION['fullname'];?></b></h6>
      </div>
      <div class="card-body">


      
      <!-- Tabbed Pane Content -->
      <div class="tab-content" id="pegawaiTabContent">
        
        <div class="tab-pane fade show active" id="listPegawai-content" role="tabpanel" aria-labelledby="listPegawai-tab">
            
            <div class="table-responsive">
                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                  <thead>
                    <tr>
                      <th>No.</th>
                      <th>Code</th>
                      <th>Tanggal Pembuatan</th>
                      <th>NIP</th>
                      <th>Nama Lengkap</th>
                      <th>Tujuan</th>
                      <th>Maksud</th>
                      <th>Nama Klien</th>
                      <th>Status</th>
                    </tr>
                  </thead>
                  <tbody>
                    <?php showTableHistory(); ?>
                  </tbody>
                </table>
           </div>

        </div>
        
       
       </div>   
       <!-- end Tabbed Pane Content --> 

    </div>
  </div>
<!-- Page level plugins -->
 <script src="./js/datatables/jquery.dataTables.min.js"></script>
 <script src="./js/datatables/dataTables.bootstrap4.min.js"></script>
    
  <!-- Page level custom scripts -->
  <script src="./js/datatables-demo.js"></script>
