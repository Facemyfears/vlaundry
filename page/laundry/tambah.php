<script type="text/javascript">
function sum() {
    var jumlah_kiloan = document.getElementById('jumlah_kiloan').value;
    var total = parseInt(jumlah_kiloan)*7000;

    if (!isNaN(total)) {
        document.getElementById('nominal').value = total;
    }
}
</script>

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
              <h3 class="box-title">Tambah Transaksi Laundry</h3>
            </div>
            <!-- /.box-header -->
            <!-- form start -->
            <form method="POST">
              <div class="box-body">

              <div class="form-group">
                <label>Outlet</label>
                <select class="form-control select2" style="width: 100%;" name="outlet" required="">
                  <option value="">-pilih Outlet-</option>
                  
                  
                  <?php
                  
                  $sql = $koneksi->query("select * from tb_outlet");

                  while ($data=$sql->fetch_assoc()) {
                      

                    echo "
                    
                    <option value='$data[id]'>$data[nama]</option>
                    
                    ";

                  }
                  
                  ?>


                </select>
              </div>

              <div class="form-group">
                <label>Pelanggan</label>
                <select class="form-control select2" style="width: 100%;" name="pelanggan" required="">
                  <option value="">-pilih pelanggan-</option>
                  
                  
                  <?php
                  
                  $sql = $koneksi->query("select * from tb_pelanggan");

                  while ($data=$sql->fetch_assoc()) {
                      

                    echo "
                    
                    <option value='$data[kode_pelanggan]'>$data[nama]</option>
                    
                    ";

                  }
                  
                  ?>


                </select>
              </div>
                
                <div class="form-group">
                  <label for="exampleInputPassword1">Tanggal Terima</label>
                  <input type="date" class="form-control" name="tgl_terima">
                </div>

                <div class="form-group">
                  <label for="exampleInputPassword1">Tanggal Selesai</label>
                  <input type="date" class="form-control" name="tgl_selesai">
                </div>

                <div class="form-group">
                  <label for="exampleInputPassword1">Jumlah Kiloan</label>
                  <input type="number" class="form-control" onkeyup="sum();" id="jumlah_kiloan" name="jml_kiloan" required="">
                </div>

                <div class="form-group">
                  <label for="exampleInputPassword1">Total Harga</label>
                  <input type="number" class="form-control" name="total" id="nominal" readonly="">
                </div>
                
                <div class="form-group">
                <label>Status</label>
                <select class="form-control select2" style="width: 100%;" name="status" required="">
                  <option value="">-pilih status-</option>
                  <option value="Lunas">Lunas</option>
                  <option value="Belum lunas">Belum lunas</option>
                  
                </select>
              </div>

                <div class="form-group">
                  <label>Catatan</label>
                  <textarea class="form-control" rows="3" name="catatan"></textarea>
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

            $outlet = $_POST['outlet'];
            $pelanggan = $_POST['pelanggan'];
            $tgl_terima = $_POST['tgl_terima'];
            $tgl_selesai = $_POST['tgl_selesai'];
            $jml_kiloan = $_POST['jml_kiloan'];
            $total = $_POST['total'];
            $status = $_POST['status'];
            $catatan = $_POST['catatan'];

            $sql = $koneksi->query("insert into tb_laundry (id_outlet, id_pelanggan,  kode_user, tanggal_terima, tanggal_selesai, jumlah_kiloan, nominal, status, catatan)
            values
            ('$outlet', '$pelanggan',  '$id_user', '$tgl_terima', '$tgl_selesai', '$jml_kiloan', '$total', '$status', '$catatan')");
            
            if ($sql) {
             ?>
             <script type="text/javascript">
             alert ("Data berhasil disimpan");
             window.location.href="?page=laundry";
             </script>
             <?php 
            }


            if ($status=="Lunas") {
              $sql = $koneksi->query("insert into tb_transaksi (kode_user, tgl_transaksi, pemasukan, catatan, keterangan)values('$id_user', '$tgl_terima',  '$total', '$catatan', '$pemasukan')");
            
            if ($sql) {
             ?>
             <script type="text/javascript">
             alert ("Data berhasil disimpan");
             window.location.href="?page=laundry";
             </script>
             <?php 
            }
            }


          }
          
          ?>