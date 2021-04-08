<?php

$sql = $koneksi->query("select id_barang from tb_barang order by id_barang desc");
$data = $sql->fetch_assoc();
$kode_pelanggan = $data['id_barang'];
$urut = substr($kode_pelanggan, 4, 4);
$tambah = (int) $urut+1;

if (strlen($tambah) == 1 ) {
    $format="BRG-" . "000".$tambah;
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
              <h3 class="box-title">Tambah Barang</h3>
            </div>
            <!-- /.box-header -->
            <!-- form start -->
            <form method="POST">
              <div class="box-body">

              <div class="form-group">
                  <label for="exampleInputEmail1">ID Barang</label>
                  <input type="text" class="form-control" value="<?php echo $format ?>"  name="id_barang">
                </div>

              <div class="form-group">
                  <label for="exampleInputPassword1">Tanggal Transaksi</label>
                  <input type="date" class="form-control" name="tgl_transaksi">
                </div>

                <div class="form-group">
                  <label for="exampleInputPassword1">Nominal</label>
                  <input type="number" class="form-control" name="nominal">
                </div>
                
                <div class="form-group">
                  <label>Catatan</label>
                  <textarea class="form-control" rows="3" name="catatan"></textarea>
                </div>

                <div class="form-group">
                  <label for="exampleInputPassword1">Jumlah</label>
                  <input type="number" class="form-control" name="stok_barang">
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
              
            $kode = $_POST['id_barang'];
            $tgl_transaksi = $_POST['tgl_transaksi'];
            $nominal = $_POST['nominal'];
            $catatan = $_POST['catatan'];

            
              $sql = $koneksi->query("insert into tb_transaksi (kode_user,
               tgl_transaksi, pengeluaran, catatan, keterangan)values('$id_user'
               , '$tgl_transaksi',  '$nominal', '$catatan', 'pengeluaran')");
            $stok_barang = $_POST['stok_barang'];

            

            
              $sql = $koneksi->query("insert into tb_barang (id_barang,
               tgl_transaksi, nominal, catatan, stok_barang)values('$kode'
               , '$tgl_transaksi',  '$nominal', '$catatan', '$stok_barang')");
            
            if ($sql) {
             ?>
             <script type="text/javascript">
             alert ("Data berhasil disimpan");
             window.location.href="?page=transaksi";
             </script>
             <?php 
            }
            


          }
          
          ?>


