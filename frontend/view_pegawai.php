<!-- Page Heading -->
 <div class="d-sm-flex align-items-center justify-content-between mb-4">
    <h1 class="h3 mb-0 text-gray-800">Menu Pegawai</h1>
</div>
  
    <!-- Data Table User -->
  <div class="card shadow mb-4">
      <div class="card-header py-3">
          <h6 class="m-0 font-weight-bold text-primary">Olah Data Pegawai</h6>
      </div>
      <div class="card-body">

  <!-- Tabbed Pane List -->
  <ul class="nav nav-tabs" id="tabPegawai" role="tablist">
    <li class="nav-item">
      <a class="nav-link active" id="listPegawai-tab" data-toggle="tab" href="#listPegawai-content" role="tab" aria-controls="listPegawai-content" aria-selected="true">Daftar Pegawai</a>
    </li>
    <li class="nav-item">
      <a class="nav-link" id="addPegawai-tab" data-toggle="tab" href="#addPegawai-content" role="tab" aria-controls="addPegawai-content" aria-selected="false">Tambah Data Pegawai</a>
    </li>
  </ul>
  <!-- end tab list -->
      
      <!-- Tabbed Pane Content -->
      <div class="tab-content" id="pegawaiTabContent">
        
        <div class="tab-pane fade show active" id="listPegawai-content" role="tabpanel" aria-labelledby="listPegawai-tab">
            
            <div class="table-responsive">
                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                  <thead>
                    <tr>
                      <th>No.</th>
                      <th>Nama</th>
                      <th>NIP</th>
                      <th>Jabatan</th>
                      <th>Golongan</th>
                    </tr>
                  </thead>
                  <tbody>
                    <?php include("../backend/proc_pegawai.php"); ?>
                  </tbody>
                </table>
           </div>

        </div>
        
        <div class="tab-pane fade" id="addPegawai-content" role="tabpanel" aria-labelledby="addPegawai-tab">
          <form class="add-pegawai-form">
            <div class="form-group">
              <label for="inputNamaPegawai">Nama Lengkap:</label>
              <input type="text" class="form-control form-control-user" name="nama-pegawai" placeholder="nama lengkap pegawai">
            </div>
            <div class="form-group">
              <label for="inputNipPegawai">NIP:</label>
              <input type="text" class="form-control form-control-user" name="nip-pegawai" placeholder="NIP Anda">
            </div>
            <div class="form-group">
              <label for="inputJabatanPegawai">Jabatan:</label>
              <select class="form-control" id="select-jabatan">
                <!-- nanti di looping dari DB 
                ini temporary -->
                <option>Kepala BAPAS</option>
                <option>Pembimbing Kemasyarakatan</option>
                <option>Kasub BAG TU</option>
              </select>
            </div>
            <div class="form-group">
              <label for="inputJabatanTgl">Tgl. Menjabat</label>
              <input type="datepicker" class="form-control-user" name="tgl-jabatan" placeholder="">
            </div>
            <div class="form-group">no_hp</div>
            <div class="form-group">alamat</div>
            <div class="form-group">tgl_lahir</div>
            <div class="form-group">tempat lahir</div>
            <div class="form-group">kerja_tahun</div> 
           <div class="form-group">kerja bulan</div>
            <div class="form-group">pendidikan</div>
            <div class="form-group">pendidikan_lulus</div>
            <div class="form-group">pendidikan ijazah</div>
            <div class="form-group">catatan mutasi</div>
            <div class="form-group">keterangan</div>
          </form>
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
