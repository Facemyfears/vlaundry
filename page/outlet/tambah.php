

<div class="row">
        <!-- left column -->
        <div class="col-md-6">
          <!-- general form elements -->
          <div class="box box-success">
            <div class="box-header with-border">
              <h3 class="box-title">Tambah Data Outlet</h3>
            </div>
            <!-- /.box-header -->
            <!-- form start -->
            <form method="POST" enctype="multipart/form-data">
              <div class="box-body">

              
              
                <div class="form-group">
                  <label>Nama</label>
                  <input type="text" class="form-control" name="nama">
                </div>
                <div class="form-group">
                  <label>Alamat</label>
                  <textarea class="form-control" rows="3" name="alamat"></textarea>
                </div>

                <div class="form-group">
                  <label>Telp</label>
                  <input type="text" class="form-control" name="telp">
                </div>

               

              <div class="box-footer">
                <button type="submit" name="simpan" class="btn btn-success">Simpan</button>
              </div>
            </form>
          </div>




          <?php
          
          if (isset($_POST['simpan'])) {

            $nama = $_POST['nama'];
            $alamat = $_POST['alamat'];
            $telp = $_POST['telp'];

            $sql = $koneksi->query("insert into tb_outlet (nama, alamat, tlp)values
            ('$nama', '$alamat', '$telp')");
            
            if ($sql) {
             ?>
             <script type="text/javascript">
             alert ("Data berhasil disimpan");
             window.location.href="?page=outlet";
             </script>
             <?php 
            }
          }
          
          ?>