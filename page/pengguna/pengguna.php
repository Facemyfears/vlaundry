<section class="content">
      <div class="row">
            <div class="box-header">
              <h3 class="box-title">Data Pengguna</h3>
            </div>
            <!-- /.box-header -->
            <div class="box-body">
			<a href="?page=pengguna&aksi=tambah" class="btn btn-success" style="margin-bottom: 10px"><ion-icon name="person-add"></ion-icon> Tambah</a>
              <table id="example1" class="table table-bordered table-striped">
                <thead>
                <tr>
                  <th>No</th>
                  <th>Username</th>
				  <th>ID Outlet</th>
                  <th>Nama User</th>
                  <th>Password</th>
                  <th>level</th>
                  <th>Foto</th>
				  <th>Aksi</th>
                </tr>
                </thead>
                <tbody>
                <?php
				//query ke database SELECT tabel mahasiswa urut berdasarkan id yang paling besar
				$sql = mysqli_query($koneksi, "SELECT * FROM user") or die(mysqli_error($koneksi));
				
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
							<td>'.$data['username'].'</td>
							<td>'.$data['id_outlet'].'</td>
							<td>'.$data['nama_user'].'</td>
							<td>'.$data['password'].'</td>
							<td>'.$data['level'].'</td>
                            <td><img src="img/'.$data['foto'].'" width="67" height="67"></td>
							<td>
							<a href="?page=pengguna&aksi=edit&id='.$data['id'].'" class="btn btn-primary"><ion-icon name="create"></ion-icon> Edit</a>
							<a href="?page=pengguna&aksi=delete&id='.$data['id'].'" class="btn btn-danger" onclick="return confirm(\'Yakin ingin menghapus data ini?\')"><ion-icon name="trash"></ion-icon> Delete</a>
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