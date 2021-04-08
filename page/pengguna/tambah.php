<?php

$id= $_GET['id'];
$sql = $koneksi->query("select * from user where id='$id'");
$data = $sql->fetch_assoc();



?>

<div class="row">
        <!-- left column -->
        <div class="col-md-6">
          <!-- general form elements -->
          <div class="box box-success">
            <div class="box-header with-border">
              <h3 class="box-title">Tambah Data Pengguna</h3>
            </div>
            <!-- /.box-header -->
            <!-- form start -->
            <form method="POST" enctype="multipart/form-data">
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
                  <label for="exampleInputEmail1">Username</label>
                  <input type="text" class="form-control" name="username">
                </div>
                <div class="form-group">
                  <label for="exampleInputPassword1">Nama</label>
                  <input type="text" class="form-control" name="nama">
                </div>

                <div class="form-group">
                  <label for="exampleInputPassword1">level</label>
                  <input type="text" class="form-control" name="level">
                </div>

                <div class="form-group">
                  <label for="exampleInputPassword1">Password</label>
                  <input type="password" class="form-control" name="password">
                </div>

                <div class="form-group">
                  <label>Foto</label>
                  <input type="file" name="foto">
                </div>


              <div class="box-footer">
                <button type="submit" name="simpan" class="btn btn-success">Simpan</button>
              </div>
            </form>
          </div>




          <?php
          
          if (isset($_POST['simpan'])) {

            $outlet = $_POST['outlet'];
            $username = $_POST['username'];
            $level = $_POST['level'];
            $nama = $_POST['nama'];
            $password = md5($_POST['password']);

            $foto = $_FILES['foto']['name'];
            $lokasi = $_FILES['foto']['tmp_name'];

            $upload = move_uploaded_file($lokasi, "img/".$foto);

            if ($upload) {
               
            }

            

            $sql = $koneksi->query("insert into user (id_outlet, username, nama_user, password, level, foto)values('$outlet', '$username', '$nama', '$password', '$level', '$foto')");
            
            if ($sql) {
             ?>
             <script type="text/javascript">
             alert ("Data berhasil disimpan");
             window.location.href="?page=pengguna";
             </script>
             <?php 
            }
          }
          
          ?>