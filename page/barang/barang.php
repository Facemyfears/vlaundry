<section class="content">
      <div class="row">
            <div class="box-header">
              <h3 class="box-title">Data Barang</h3>
            </div>
            <!-- /.box-header -->
            <div class="box-body">
			<a href="?page=barang&aksi=tambah" class="btn btn-success" style="margin-bottom: 10px"><ion-icon name="person-add"></ion-icon> Tambah</a>
              <table id="example1" class="table table-bordered table-striped">
                <thead>
                <tr>
                  <th>No</th>
                  <th>Kode Barang</th>
                  <th>Tanggal Masuk</th>
				  <th>Nominal</th>
                  <th>Catatan</th>
                  <th>Stok Barang</th>
				  <th>Aksi</th>
                </tr>
                </thead>
                <tbody>
                <?php
				//query ke database SELECT tabel mahasiswa urut berdasarkan id yang paling besar
				$sql = mysqli_query($koneksi, "SELECT * FROM tb_barang") or die(mysqli_error($koneksi));
				
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
							<td>'.$data['id_barang'].'</td>
							<td>'.$data['tgl_transaksi'].'</td>
							<td>'.$data['nominal'].'</td>
							<td>'.$data['catatan'].'</td>
                            <td>'.$data['stok_barang'].'</td>
							<td>
							<a href="?page=barang&aksi=edit&id='.$data['id_barang'].'" class="btn btn-primary"><ion-icon name="create"></ion-icon> Edit</a>
							<a href="?page=barang&aksi=delete&id='.$data['id_barang'].'" class="btn btn-danger" onclick="return confirm(\'Yakin ingin menghapus data ini?\')"><ion-icon name="trash"></ion-icon> Delete</a>
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