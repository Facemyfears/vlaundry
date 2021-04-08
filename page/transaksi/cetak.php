<?php
error_reporting(E_ALL ^ (E_NOTICE | E_WARNING));
include "../../include/koneksi.php";
?>
<script>

window.print();
window.onfocus=function() {window.close();}


</script>

<head>
<style>
th {
  padding: 2px;
  text-align: left;
}
</style>
</head>

<body onload="window.print()">
<div style="text-align : center">Laporan Transaksi Dan Pengeluaran</div><p><p>
  <table width="100%" border="1">
    
    <thead>
        <tr>
                  <th>No</th>

                  <th>Tanggal Transaksi</th>
                  <th>Keterangan</th>
                  <th>Catatan</th>
				  <th>ID Kasir</th>
                  <th>Pemasukan</th>
                  <th>Pengeluaran</th>
        </tr>
    </thead>
    <tbody>
    <?php
				
				$no = 1;
				$sql = $koneksi->query("SELECT * FROM tb_transaksi");

				while ($data = $sql->fetch_assoc()) {
					# code...
				
				
				?>
                <tr>
                <td><?php echo $no++;?></td>
				<td><?php echo $data['tgl_transaksi']?></td>
				<td><?php echo $data['keterangan']?></td>
				<td><?php echo $data['catatan']?></td>
				<td><?php echo $data['kode_user']?></td>
				<td><?php echo number_format($data['pemasukan'])?></td>
				<td><?php echo number_format($data['pengeluaran'])?></td>
                </tr>
                <?php 
                
                $masuk = $masuk+$data['pemasukan'];
                $keluar = $keluar+$data['pengeluaran'];
                $saldo = $masuk - $keluar;

                }
            
                ?>
    </tbody>

    <tr>
                   <th colspan="5" style="text-align : center">Total Pemasukan Dan Pengeluaran</th>
                   <td><?php echo number_format($masuk)?></td>
                   <td><?php echo number_format($keluar)?></td>
                </tr>

                <tr>
                   <th colspan="5" style="text-align : center">Saldo Akhir</th>
                   <td><?php echo number_format($saldo)?></td>
                </tr>
  </table>

</body>