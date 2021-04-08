<?php
include "../../include/koneksi.php";
$id = $_GET['id'];
$sql = $koneksi->query("SELECT * FROM tb_laundry where id_laundry='$id'");

$data = $sql->fetch_assoc();
?>

<script>

window.print();
window.onfocus=function() {window.close();}


</script>

<body onload="window.print()">
<table>
<tbody>
<tr>
<td>Family Laundry</td>
</tr>
<tr>
<td>Jl cibadutuy</td>
</tr>
<tr>
<td>Telpon 085827805610</td>
</tr>
</tbody>
</table>

<hr width="30%" align="left">

    <table>
         <tbody>
          

         <tr>
               <td>ID Outlet</td>
               <td>:</td>
               <td><?php echo $data['id_outlet'];?></td>
         </tr>
         
         <tr>
               <td>Kasir</td>
               <td>:</td>
               <td><?php echo $data['kode_user'];?></td>
         </tr>
         <tr>
               <td>Pelanggan</td>
               <td>:</td>
               <td><?php echo $data['id_pelanggan'];?></td>
         </tr>
         <tr>
               <td>Tanggal Terima</td>
               <td>:</td>
               <td><?php echo $data['tanggal_terima'];?></td>
         </tr>
         <tr>
               <td>Tanggal Selesai</td>
               <td>:</td>
               <td><?php echo $data['tanggal_selesai'];?></td>
         </tr>
         <tr>
               <td>jumlah Kiloan</td>
               <td>:</td>
               <td><?php echo $data['jumlah_kiloan'];?></td>
         </tr>
         <tr>
               <td>Total</td>
               <td>:</td>
               <td><?php echo $data['nominal'];?></td>
         </tr>
         <tr>
               <td>Status</td>
               <td>:</td>
               <td><?php echo $data['status'];?></td>
         </tr>
         <tr>
               <td>Catatan</td>
               <td>:</td>
               <td width="20"><?php echo $data['catatan'];?></td>
         </tr>
         </tbody>
         </table>

         <br></br>

         <table>
           <tbody>
             
           </tbody>
         </table>

    </body>