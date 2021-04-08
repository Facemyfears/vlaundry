<section class="content">
      <div class="row">
            <div class="box-header">
              <h3 class="box-title">Data Transaksi Laundry</h3>
            </div>
            <!-- /.box-header -->
            <div class="box-body">
			<a href="?page=laundry&aksi=tambah"  class="btn btn-info" style="margin-bottom: 10px">Tambah</a>
              <table id="example1" class="table table-bordered table-striped">
                <thead>
                <tr>
                  <th>No</th>
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
				//query ke database SELECT tabel mahasiswa urut berdasarkan id yang paling besar
				$sql = mysqli_query($koneksi, "SELECT * FROM tb_laundry, tb_pelanggan, tb_user where 
                tb_laundry.id_pelanggan=tb_pelanggan.kode_pelanggan and tb_laundry.kode_user=tb_user.id") or die(mysqli_error($koneksi));
				
				//jika query diatas menghasilkan nilai > 0 maka menjalankan script di bawah if...
				if(mysqli_num_rows($sql) > 0)
				{
					//membuat variabel $no untuk menyimpan nomor urut
					$no = 1;
					
					//melakukan perulangan while dengan dari query $sql
					while($data = mysqli_fetch_assoc($sql))
					{
						//menampilkan data perulangan
						echo '
						<tr>
							<td>'.$no.'</td>
							<td>'.$data['nama'].'</td>
							<td>'.$data['tanggal_terima'].'</td>
                            <td>'.$data['tanggal_selesai'].'</td>
							<td>'.$data['nominal'].'</td>
                            <td>'.$data['catatan'].'</td>
                            <td>'.$data['status'].'</td>
                            <td>'.$data['nama_user'].'</td>
							<td>
							<a href="?page=laundry&aksi=edit&id='.$data['kode_pelanggan'].'" class="btn btn-primary">Edit</a>
							
							
							
							</td>
						</tr>
						';
						$no++;
					}
				}
				?>
                </tbody>
                </table>
                </div>
                </div>

				<script>
				function delete_note_alert()
{
    return confirm("Are you sure you want to delete this data?");
}
				</script>






<?php

$id = $_GET['id'];

$sql = $koneksi->query("SELECT * from tb_laundry where id_laundry='id'");
$data = $sql->fetch_assoc();

$tanggal = $data['tanggal_terima'];
$nominal= $data['nominal'];
$catatan = $data['catatan'];

$kode_user = $data['kode_user'];

$sql2 = $koneksi->query("INSERT into tb_transaksi (kode_user, tgl_transaksi, pemasukan, catatan, keterangan)values('$kode_user', '$tanggal',  '$nominal', '$catatan', 'pemasukan')");

$sql2 = $koneksi->query("UPDATE tb_laundry set status='Lunas' where id_laundry = '$id'");

if ($sql2) {
    ?>
    <script type="text/javascript">
    alert ("Dta berhasil disimpan");
    window.location.href="?page=laundry";
    </script>
    <?php 
   }


?>


<section class="content">
      <div class="row">
            <div class="box-header">
              <h3 class="box-title">Data Transaksi Laundry</h3>
            </div>
            <!-- /.box-header -->
            <div class="box-body">
			<a href="?page=laundry&aksi=tambah"  class="btn btn-info" style="margin-bottom: 10px">Tambah</a>
              <table id="example1" class="table table-bordered table-striped">
                <thead>
                <tr>
                  <th>No</th>
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
				$sql = $koneksi->query("SELECT * FROM tb_laundry, tb_pelanggan, tb_user where 
                tb_laundry.id_pelanggan=tb_pelanggan.kode_pelanggan and tb_laundry.kode_user=tb_user.id");

				while ($data = $sql->fetch_assoc()) {
					# code...
				
				
				?>

				<tr>
				<td> <?php echo $no++;?></td>
				<td> <?php echo $data['nama']?></td>
				<td><?php echo $data['tanggal_terima']?></td>
				<td><?php echo $data['tanggal_selesai']?></td>
				<td><?php echo $data['nominal']?></td>
				<td><?php echo $data['catatan']?></td>
				<td><?php echo $data['status']?></td>
				<td><?php echo $data['nama_user']?></td>
				<td>
				<a href="?page=laundry&aksi=edit&id=<?php echo $data['id_laundry']?>" class="btn btn-success"><i class="fa fa-edit"></i> Edit</a>

				<?php
				
                 if ($data['status']=="Belum lunas") {

				?>

                <a href="?page=laundry&aksi=lunas&id=<?php echo $data['id_laundry']?>" class="btn btn-primary"><i class="fa fa-money"></i> Lunaskan</a>
					 
				<?php } ?> 

				


				</td>
				</tr>
				<?php }?>
                </tbody>
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








<section class="content">
      <div class="row">
            <div class="box-header">
              <h3 class="box-title">Data Transaksi Laundry</h3>
            </div>
            <!-- /.box-header -->
            <div class="box-body">
			<a href="?page=laundry&aksi=tambah"  class="btn btn-info" style="margin-bottom: 10px">Tambah</a>
              <table id="example1" class="table table-bordered table-striped">
                <thead>
                <tr>
                  <th>No</th>
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

				$sql = $koneksi->query("SELECT * from tb_laundry, tb_pelanggan, tb_user where tb_laundry.id_pelanggan=tb_pelanggan.kode_pelanggan and tb_laundry.kode_user=tb_user.id");

				while ($data = $sql->fetch_assoc()) {
					
				
				?>

				<tr>
				<td><?php echo $no++;?></td>
				<td><?php echo $data['nama'] ?></td>
				<td><?php echo $data['tanggal_terima'] ?></td>
				<td><?php echo $data['tanggal_selesai'] ?></td>
				<td><?php echo $data['nominal'] ?></td>
				<td><?php echo $data['status'] ?></td>
				<td><?php echo $data['nama_user'] ?></td>

				<td>
				<a href="?page=laundry&aksi=ubah&id=<?php echo $data['kode_pelanggan'];?>" class="btn- btn-primary">Edit</a>
				</td>
				</tr>
                <?php }?>
                </tbody>
                </table>
                </div>
                </div>

				<script>
				function delete_note_alert()
{
    return confirm("Are you sure you want to delete this data?");
}
				</script>