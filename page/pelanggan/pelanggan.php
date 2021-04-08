<section class="content">
      <div class="row">
            <div class="box-header">
              <h3 class="box-title">Data Pelanggan</h3>
            </div>
            <!-- /.box-header -->
            <div class="box-body">
			<?php if ($_SESSION['admin']){?>
			<a href="?page=pelanggan&aksi=tambah"  class="btn btn-success" style="margin-bottom: 10px"><ion-icon name="person-add"></ion-icon> Tambah</a>
			<?php }?>

			<?php if ($_SESSION['kasir']){?>
			<a href="?page=pelanggan&aksi=tambah"  class="btn btn-default" style="margin-bottom: 10px"><ion-icon name="person-add-outline"></ion-icon> Tambah</a>
			<?php }?>
              <table id="example1" class="table table-bordered table-striped">
                <thead>
                <tr>
                  <th>No</th>
                  <th>Kode Pelanggan</th>
                  <th>Nama</th>
                  <th>Alamat</th>
                  <th>No Telepon</th>
				  <th>Aksi</th>
                </tr>
                </thead>
                <tbody>
                <?php
				//query ke database SELECT tabel mahasiswa urut berdasarkan id yang paling besar
				$sql = mysqli_query($koneksi, "SELECT * FROM tb_pelanggan") or die(mysqli_error($koneksi));
				
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
							<td>'.$data['kode_pelanggan'].'</td>
							<td>'.$data['nama'].'</td>
							<td>'.$data['alamat'].'</td>
							<td>'.$data['telepon'].'</td>
							<td>
							<a href="?page=pelanggan&aksi=edit&id='.$data['kode_pelanggan'].'" class="btn btn-primary"><ion-icon name="create"></ion-icon> Edit</a>
							<a href="?page=pelanggan&aksi=delete&id='.$data['kode_pelanggan'].'" class="btn btn-danger" onclick="return confirm(\'Yakin ingin menghapus data ini?\')"><ion-icon name="trash"></ion-icon> Delete</a>
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