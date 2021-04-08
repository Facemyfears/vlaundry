<?php

$kode = $_GET['id'];
$sql = $koneksi->query("select * from tb_barang where id_barang='$kode'");
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
              <h3 class="box-title">Edit Transaksi</h3>
            </div>
            <!-- /.box-header -->
            <!-- form start -->
            <form method="POST">
              <div class="box-body">

                <div class="form-group">
                  <label for="exampleInputPassword1">Stok Barang</label>
                  <input type="number" class="form-control" value="<?php echo $data['stok_barang'] ?>"  name="stok_barang">
                </div>

              <div class="box-footer">
              <?php if ($_SESSION['admin']){?>
                <button type="submit" name="simpan" class="btn btn-success">Simpan</button>
                <?php }?>

                <?php if ($_SESSION['kasir']){?>
                <button type="submit" name="simpan" class="btn btn-default">Simpan</button>
                <?php }?>
              </div>
            </form>
          </div>




          <?php
          
          if (isset($_POST['simpan'])) {
              
            
            $stok_barang = $_POST['stok_barang'];

            

            
              $sql = $koneksi->query("UPDATE tb_barang set stok_barang='$stok_barang' where
              id_barang= '$kode'");
            
            if ($sql) {
             ?>
             <script type="text/javascript">
             alert ("Data berhasil diupdate");
             window.location.href="?page=barang";
             </script>
             <?php 
            }
            


          }
          
          ?>


