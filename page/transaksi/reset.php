<?php

    $sql=$koneksi->query( "TRUNCATE TABLE tb_transaksi" );
    
    if($sql) {
        
        ?>
             <script type="text/javascript">
             alert ("Data berhasil direset");
             window.location.href="?page=transaksi";
             </script>
             <?php

    }
?>