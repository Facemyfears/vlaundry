<div class="box">
            <div class="box-header">
              <h3 class="box-title">Data Table With Full Features</h3>
            </div>
            <!-- /.box-header -->
            <div class="box-body">
              <table id="example1" class="table table-bordered table-striped">
                <thead>
                <tr>
                  <th>No</th>
                  <th>Kode Pelanggan</th>
                  <th>Nama</th>
                  <th>Alamat</th>
                  <th>No Telepon</th>
                </tr>
                </thead>
                <tbody>
                <?php
           $sql = mysqli_query($koneksi, "SELECT * FROM tb_pelanggan") or die(mysqli_error($koneksi));
				
           //jika query diatas menghasilkan nilai > 0 maka menjalankan script di bawah if...
           if(mysqli_num_rows($sql) > 0)
           {
               //membuat variabel $no untuk menyimpan nomor urut
               $no = 1;
           while ($data = $sql->mysqli_fetch_assoc($sql)) {
               
           }
      ?>
                <tr>
                <td><?php echo $no++;  ?></td>
                <td><?php echo $data['kode_pelanggan'];?></td>
                <td><?php echo $data['nama']?></td>
                <td><?php echo $data['alamat']?></td>
                <td><?php echo $data['telepon']?></td>
                </tr>
                <?php ?>
                </tbody>
                </table>
                </div>
                </div>