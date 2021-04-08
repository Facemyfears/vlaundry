<?php

$kode = $_GET['id'];
$sql = $koneksi->query("select * from tb_pelanggan where kode_pelanggan='$kode'");
$data = $sql->fetch_assoc();



?>

<div class="row">
        <!-- left column -->
        <div class="col-md-6">
          <!-- general form elements -->
          <?php if ($_SESSION['admin']){?>
          <div class="box box-success">
          <?php }?>

          <?php if ($_SESSION['kasir']){?>
          <div class="box box-default">
          <?php }?>

          
            <div class="box-header with-border">
              <h3 class="box-title">Edit Data Pelanggan</h3>
            </div>
            <!-- /.box-header -->
            <!-- form start -->
            <form method="POST">
              <div class="box-body">
                <div class="form-group">
                  <label for="exampleInputEmail1">Kode Pelanggan</label>
                  <input type="text" class="form-control" value="<?php echo $data['kode_pelanggan'] ?>" readonly name="kode">
                </div>
                <div class="form-group">
                  <label for="exampleInputPassword1">Nama</label>
                  <input type="text" class="form-control" value="<?php echo $data['nama'] ?>" name="nama">
                </div>

                <div class="form-group">
                  <label for="exampleInputPassword1">No Telpon</label>
                  <input type="text" class="form-control" value="<?php echo $data['telepon'] ?>" name="telpon">
                </div>
                
                <div class="form-group">
                  <label>Alamat</label>
                  <textarea class="form-control" rows="3" name="alamat"><?php echo $data['alamat'];?></textarea>
                </div>

              <div class="box-footer">
              <?php if ($_SESSION['admin']){?>
                <button type="submit" name="simpan" class="btn btn-success">Update</button>
                <?php }?>

                <?php if ($_SESSION['kasir']){?>
                <button type="submit" name="simpan" class="btn btn-default">Update</button>
                <?php }?>
              </div>
            </form>
          </div>




          <?php
          
          if (isset($_POST['simpan'])) {

            $nama = $_POST['nama'];
            $telpon = $_POST['telpon'];
            $alamat = $_POST['alamat'];

            $sql = $koneksi->query(" UPDATE tb_pelanggan set nama='$nama', telepon='$telpon', alamat='$alamat' where
            kode_pelanggan= '$kode'");
            
            if ($sql) {
             ?>
             <script type="text/javascript">
             alert ("Data berhasil diubah");
             window.location.href="?page=pelanggan";
             </script>
             <?php 
            }
          }
          
          ?>