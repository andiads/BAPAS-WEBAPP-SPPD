<?php 
  include'../backend/proc_inbox.php'; 
?>
<style type="text/css">

  td {
    font-size: 13.2px;
    font-weight: bold;
  }
</style>
<!-- Page Heading -->
 <div class="d-sm-flex align-items-center justify-content-between mb-4">
    <h1 class="h3 mb-0 text-gray-800">Inbox SPPD</h1>
</div>
  
    <!-- Data Table User -->
  <div class="card shadow mb-4">
      <div class="card-header py-3">
          <h6 class="m-0 font-weight-bold text-primary">Kelola surat yang masuk</h6>
      </div>
      <div class="card-body">

  <!-- Tabbed Pane List -->
  <ul class="nav nav-tabs" id="tabInbox" role="tablist">
    <li class="nav-item">
      <a class="nav-link active" id="listInbox-tab" data-toggle="tab" href="#listInbox-content" role="tab" aria-controls="listInbox-content" aria-selected="true">
        Inbox <span class="badge badge-danger"><?php echo getCountSPPD("0");?></span>
      </a>
    </li>
    <li class="nav-item">
      <a class="nav-link" id="listConfirmed-tab" data-toggle="tab" href="#listConfirmed-content" role="tab" aria-controls="listConfirmed-content" aria-selected="false">
        Terkonfirmasi <span class="badge badge-success"><?php echo getCountSPPD("1"); ?></span>
      </a>
    </li>
  </ul>
  <!-- end tab list -->
      
      <!-- Tabbed Pane Content -->
      <div class="tab-content" id="pegawaiTabContent">
        
        <div class="tab-pane fade show active" id="listInbox-content" role="tabpanel" aria-labelledby="listInbox-tab">
            
            <?php if (getCountSPPD("0")<1) { ?>
              
              <div class="blank-data">Data kosong</div>
            
            <?php } else { ?>
            
            <div class="table-responsive">
                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                  <thead>
                    <tr>
                      <th>Code</th>
                      <th>Tanggal Pembuatan</th>
                      <th>NIP</th>
                      <th>Nama Lengkap</th>
                      <th>Tujuan</th>
                      <th>Maksud</th>
                      <th>Nama Klien</th>
                      <th>Status</th>
                      <th>Action</th>
                    </tr>
                  </thead>
                  <tbody>
                    <?php showTableInbox("0"); ?>
                  </tbody>
                </table>
           </div>

           <?php } ?>
        
        </div>
        
         <div class="tab-pane fade show" id="listConfirmed-content" role="tabpanel" aria-labelledby="listConfirmed-tab">
            
            <?php if (getCountSPPD("1")<1) { ?>
              
              <div class="blank-data">Data kosong</div>
            
            <?php } else { ?>

            <div class="table-responsive">
                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                  <thead>
                    <tr>
                      <th>Code</th>
                      <th>Tanggal Pembuatan</th>
                      <th>NIP</th>
                      <th>Nama Lengkap</th>
                      <th>Tujuan</th>
                      <th>Maksud</th>
                      <th>Nama Klien</th>
                      <th>Status</th>
                      <th>Action</th>
                    </tr>
                  </thead>
                  <tbody>
                    <?php showTableInbox("1"); ?>
                  </tbody>
                </table>
           </div>

           <?php } ?>

        </div>

       </div>   
       <!-- end Tabbed Pane Content --> 

    </div>
  </div>

<!-- ajax inbox SPPD -->
<script type="text/javascript">
  function opEditSppd
</script> 
<!-- Page level plugins -->
 <script src="./js/datatables/jquery.dataTables.min.js"></script>
 <script src="./js/datatables/dataTables.bootstrap4.min.js"></script>
    
  <!-- Page level custom scripts -->
  <script src="./js/datatables-demo.js"></script>
