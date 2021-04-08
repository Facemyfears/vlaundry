<?php
	$id = $_GET['id'];
    $sql=$koneksi->query(" DELETE from tb_outlet where id='$id'");
    
    if($sql) {
        
        ?>
             <script type="text/javascript">
             alert ("Data berhasil dihapus");
             window.location.href="?page=outlet";
             </script>
             <?php

    }
?>