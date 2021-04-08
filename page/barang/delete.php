<?php
	$kode = $_GET['id'];
    $sql=$koneksi->query(" DELETE from tb_barang where id_barang='$kode'");
    
    if($sql) {
        
        ?>
             <script type="text/javascript">
             alert ("Data berhasil dihapus");
             window.location.href="?page=barang";
             </script>
             <?php

    }
?>