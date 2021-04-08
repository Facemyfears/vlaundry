<section class="content">
      <div class="row">
            <div class="box-header">
              <h3 class="box-title">Laporan Pemasukan dan Pengeluaran</h3>
            </div>
            <!-- /.box-header -->
            <div class="box-body">

            <?php if ($_SESSION['admin']){?>
			      <a href="?page=transaksi&aksi=tambah"  class="btn btn-success" style="margin-bottom: 10px"><ion-icon name="bag-add"></ion-icon> Tambah</a>
			      <?php }?>

			      <?php if ($_SESSION['kasir']){?>
			      <a href="?page=transaksi&aksi=tambah"  class="btn btn-default" style="margin-bottom: 10px"><ion-icon name="bag-add-outline"></ion-icon> Tambah</a>
			      <?php }?>

            <?php if ($_SESSION['admin']){?>
            <a target="blank" href="page/transaksi/cetak.php"  class="btn btn-success" style="margin-bottom: 10px"><ion-icon name="print-outline"></ion-icon> Cetak</a>
            <?php }?>

            <?php if ($_SESSION['kasir']){?>
            <a target="blank" href="page/transaksi/cetak.php"  class="btn btn-default" style="margin-bottom: 10px"><ion-icon name="print-outline"></ion-icon> Cetak</a>
            <?php }?>

            <?php if ($_SESSION['owner']){?>
            <a target="blank" href="page/transaksi/cetak.php"  class="btn btn-warning" style="margin-bottom: 10px"><ion-icon name="print-outline"></ion-icon> Cetak</a>
            <?php }?>
            

            
              <table id="example1" class="table table-bordered table-striped">
                <thead>
                <tr>
                  <th>No</th>
                  <th>Tanggal Transaksi</th>
                  <th>Keterangan</th>
                  <th>Catatan</th>
				          <th>Kasir</th>
                  <th>Pemasukan</th>
                  <th>Pengeluaran</th>
                  </tr>
                </thead>
                <tbody>

                <?php
				
				$no = 1;
				$sql = $koneksi->query("SELECT * FROM tb_transaksi");

				while ($data = $sql->fetch_assoc()) {
					
				# code...
				
				?>

				<tr>
				<td><?php echo $no++;?></td>
				<td><?php echo $data['tgl_transaksi']?></td>
				<td><?php echo $data['keterangan']?></td>
				<td><?php echo $data['catatan']?></td>
				<td><?php echo $data['kode_user']?></td>
				<td><?php echo number_format($data['pemasukan'])?></td>
				<td><?php echo number_format($data['pengeluaran'])?></td>
         </tr>

				<?php 
                
                $masuk = $masuk+$data['pemasukan'];
                $keluar = $keluar+$data['pengeluaran'];
                $saldo = $masuk - $keluar;

                }
            
                ?>
                </tbody>
                <tr>
                   <th colspan="5" style="text-align : center">Total Pemasukan Dan Pengeluaran</th>
                   <td><?php echo number_format($masuk)?></td>
                   <td><?php echo number_format($keluar)?></td>
                </tr>

                <tr>
                   <th colspan="5" style="text-align : center">Saldo Akhir</th>
                   <td><?php echo number_format($saldo)?></td>
                </tr>

                </table>
                </div>
                </div>
				</section>

				<script>
				function delete_note_alert()
{
    return confirm("Are you sure you want to delete this data?");
}
				</script>