<?php

$sql = $koneksi->query("select kode_pelanggan from tb_pelanggan order by kode_pelanggan desc");
$data = $sql->fetch_assoc();
$kode_pelanggan = $data['kode_pelanggan'];
$urut = substr($kode_pelanggan, 4, 4);
$tambah = (int) $urut+1;

if (strlen($tambah) == 1 ) {
    $format="PLG-" . "000".$tambah;
}elseif (strlen($tambah) == 2 ){
    $format="PLG-" . "00".$tambah;
}elseif (strlen($tambah) == 3 ){
    $format="PLG-" . "0".$tambah;
}else {
    $format="PLG-".$tambah;
}

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
              <h3 class="box-title">Tambah Data Pelanggan</h3>
            </div>
            <!-- /.box-header -->
            <!-- form start -->
            <form method="POST">
              <div class="box-body">
                <div class="form-group">
                  <label for="exampleInputEmail1">Kode Pelanggan</label>
                  <input type="text" class="form-control" value="<?php echo $format ?>"  name="kode">
                </div>
                <div class="form-group">
                  <label for="exampleInputPassword1">Nama</label>
                  <input type="text" class="form-control" name="nama">
                </div>

                <div class="form-group">
                  <label for="exampleInputPassword1">No Telpon</label>
                  <input type="text" class="form-control" name="telpon">
                </div>
                
                <div class="form-group">
                  <label>Alamat</label>
                  <textarea class="form-control" rows="3" name="alamat"></textarea>
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

            $kode = $_POST['kode'];
            $nama = $_POST['nama'];
            $telpon = $_POST['telpon'];
            $alamat = $_POST['alamat'];

            $sql = $koneksi->query("insert into tb_pelanggan (kode_pelanggan, nama, telepon, alamat)values('$kode', '$nama', '$telpon', '$alamat')");
            
            if ($sql) {
             ?>
             <script type="text/javascript">
             alert ("Data berhasil disimpan");
             window.location.href="?page=pelanggan";
             </script>
             <?php 
            }
          }
          
          ?>