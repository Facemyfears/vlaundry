<section class="content">
      <div class="row">
            <div class="box-header">
              <h3 class="box-title">Data Transaksi Laundry</h3>
            </div>
            <!-- /.box-header -->
            <div class="box-body">
            <?php if ($_SESSION['admin']){?>
			      <a href="?page=laundry&aksi=tambah"  class="btn btn-success" style="margin-bottom: 10px"><ion-icon name="bag-add"></ion-icon> Tambah</a>
			      <?php }?>

			      <?php if ($_SESSION['kasir']){?>
			      <a href="?page=laundry&aksi=tambah"  class="btn btn-default" style="margin-bottom: 10px"><ion-icon name="bag-add-outline"></ion-icon> Tambah</a>
			      <?php }?>

              <table id="example1" class="table table-bordered table-striped">
                <thead>
                <tr>
                  <th>No</th>
                  <th>ID Outlet</th>
                  <th>Pelanggan</th>
                  <th>Tanggal Terima</th>
                  <th>Tanggal Selesai</th>
                  <th>Jumlah</th>
				  <th>Catatan</th>
                  <th>Status</th>
                  <th>Kasir</th>

				  <th>Aksi</th>
                </tr>
                </thead>
                <tbody>

                <?php
				
				$no = 1;
				$sql = $koneksi->query("SELECT * FROM tb_laundry");

				while ($data = $sql->fetch_assoc()) {
					# code...
				
				
				?>

				<tr>
				<td> <?php echo $no++;?></td>
        <td> <?php echo $data['id_outlet']?></td>
				<td> <?php echo $data['id_pelanggan']?></td>
				<td><?php echo $data['tanggal_terima']?></td>
				<td><?php echo $data['tanggal_selesai']?></td>
				<td><?php echo $data['nominal']?></td>
				<td><?php echo $data['catatan']?></td>
				<td><?php echo $data['status']?></td>
				<td><?php echo $data['kode_user']?></td>
				<td>
        
				

				<?php
				
                 if ($data['status']=="Belum lunas") {

				?>

                <a href="?page=laundry&aksi=lunas&id=<?php echo $data['id_laundry']?>" class="btn btn-primary"><i class="fa fa-money"></i> Lunaskan</a>
					 
				<?php } ?> 

				<a target="blank" href="page/laundry/cetak.php?id=<?php echo $data['id_laundry']?>" class="btn btn-default"><ion-icon name="print-outline"></ion-icon> Cetak</a>


				</td>
				</tr>
				<?php }?>
                </tbody>
                </table>
                </div>
                </div>
				</section>
