<?php
	$kode = $_GET['id'];
    $sql=$koneksi->query(" DELETE from tb_pelanggan where kode_pelanggan='$kode'");
    
    if($sql) {
        
        ?>
             <script type="text/javascript">
             alert ("Data berhasil dihapus");
             window.location.href="?page=pelanggan";
             </script>
             <?php

    }
?>