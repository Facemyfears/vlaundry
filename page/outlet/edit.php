<?php

$id = $_GET['id'];
$sql = $koneksi->query("select * from tb_outlet where id='$id'");
$data = $sql->fetch_assoc();



?>

<div class="row">
        <!-- left column -->
        <div class="col-md-6">
          <!-- general form elements -->
          <div class="box box-success">
            <div class="box-header with-border">
              <h3 class="box-title">Edit Data Pelanggan</h3>
            </div>
            <!-- /.box-header -->
            <!-- form start -->
            <form method="POST">
              <div class="box-body">
                
                <div class="form-group">
                  <label for="exampleInputPassword1">Nama</label>
                  <input type="text" class="form-control" value="<?php echo $data['nama'] ?>" name="nama">
                </div>

                <div class="form-group">
                  <label for="exampleInputPassword1">No Telpon</label>
                  <input type="text" class="form-control" value="<?php echo $data['tlp'] ?>" name="telp">
                </div>
                
                <div class="form-group">
                  <label>Alamat</label>
                  <textarea class="form-control" rows="3" name="alamat"><?php echo $data['alamat'];?></textarea>
                </div>

              <div class="box-footer">
                <button type="submit" name="simpan" class="btn btn-success">Update</button>
              </div>
            </form>
          </div>




          <?php
          
          if (isset($_POST['simpan'])) {

            $nama = $_POST['nama'];
            $telp = $_POST['telp'];
            $alamat = $_POST['alamat'];

            $sql = $koneksi->query(" UPDATE tb_outlet set nama='$nama', tlp='$telp', alamat='$alamat' where
            id= '$id'");
            
            if ($sql) {
             ?>
             <script type="text/javascript">
             alert ("Data berhasil diubah");
             window.location.href="?page=outlet";
             </script>
             <?php 
            }
          }
          
          ?>