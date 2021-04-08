<?php

$id = $_GET['id'];

$sql = $koneksi->query("SELECT * from tb_laundry where id_laundry='$id'");
$data = $sql->fetch_assoc();

$tanggal = $data['tanggal_terima'];
$nominal= $data['nominal'];
$catatan = $data['catatan'];

$kode_user = $data['kode_user'];

$sql2 = $koneksi->query("INSERT into tb_transaksi(kode_user, tgl_transaksi, pemasukan, catatan, keterangan)values('$kode_user', '$tanggal',  '$nominal', '
$catatan', 'pemasukan')");

$sql2 = $koneksi->query("UPDATE tb_laundry set status='Lunas' where id_laundry= '$id'");

if ($sql2) {
    ?>
    <script type="text/javascript">
    alert ("Data berhasil disimpan");
    window.location.href="?page=laundry";
    </script>
    <?php 
   }


?>