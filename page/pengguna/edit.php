<?php

$id = $_GET['id'];
$sql = $koneksi->query("select * from user where id='$id'");
$data = $sql->fetch_assoc();



?>

<div class="row">
        <!-- left column -->
        <div class="col-md-6">
          <!-- general form elements -->
          <div class="box box-success">
            <div class="box-header with-border">
              <h3 class="box-title">Ubah Data Pengguna</h3>
            </div>
            <!-- /.box-header -->
            <!-- form start -->
            <form method="POST" enctype="multipart/form-data">
              <div class="box-body">
                <div class="form-group">
                  <label for="exampleInputEmail1">Username</label>
                  <input type="text" class="form-control" name="username" value="<?php echo $data['username'] ?>">
                </div>
                <div class="form-group">
                  <label for="exampleInputPassword1">Nama</label>
                  <input type="text" class="form-control" name="nama" value="<?php echo $data['nama_user'] ?>"> 
                </div>

                
                <div class="form-group">
                  <label>Foto</label>
                  <label><img src="img/<?php echo $data['foto']?>" width="100" height="100"></label>
                </div>

                <div class="form-group">
                  <label>Ganti Foto</label>
                  <input type="file" name="foto">
                </div>


              <div class="box-footer">
                <button type="submit" name="simpan" class="btn btn-success">Simpan</button>
              </div>
            </form>
          </div>




          <?php
          
          if (isset($_POST['simpan'])) {

            $username = $_POST['username'];
            $nama = $_POST['nama'];
            $password = $_POST['password'];

            $foto = $_FILES['foto']['name'];
            $lokasi = $_FILES['foto']['tmp_name'];

            

            if (!empty($lokasi)) {
                move_uploaded_file($lokasi, "img/".$foto);
                $sql = $koneksi->query(" UPDATE user set username='$username', nama_user='$nama', username='$username', foto='$foto' where id= '$id'");
                
            if ($sql) {
             ?>
             <script type="text/javascript">
             alert ("Dta berhasil disimpan");
             window.location.href="?page=pengguna";
             </script>
             <?php 
            }
            }else {
                $sql = $koneksi->query(" UPDATE user set username='$username', nama_user='$nama', username='$username' where id= '$id'");
                
            if ($sql) {
             ?>
             <script type="text/javascript">
             alert ("Data berhasil disimpan");
             window.location.href="?page=pengguna";
             </script>
             <?php 
            }
            }

            

            
            
            
          }
          
          ?>