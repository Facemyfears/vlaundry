<?php

    $sql=$koneksi->query( "TRUNCATE TABLE tb_laundry" );
    
    if($sql) {
        
        ?>
             <script type="text/javascript">
             alert ("Data berhasil direset");
             window.location.href="?page=transaksi";
             </script>
             <?php

    }
?>