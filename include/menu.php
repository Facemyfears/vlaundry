<style>
@import url('https://fonts.googleapis.com/css2?family=Montserrat+Subrayada&family=Rubik&display=swap');
.logo-1 {
  display: block;
  margin-left: 27px;
  
}

.sidebar {
  font-family: 'Rubik', sans-serif;
}
</style>

<aside class="main-sidebar">
    <!-- sidebar: style can be found in sidebar.less -->
    <section class="sidebar">
      <!-- Sidebar user panel -->
      <div class="user-panel">
        <a href="index.php"><img src="img/1421.png" alt="" width="130px"  height="140px" class="logo-1"></a>
      </div>
      <!-- /.search form -->
      <!-- sidebar menu: : style can be found in sidebar.less -->
      <ul class="sidebar-menu" data-widget="tree">
        <li class="header">MAIN NAVIGATION</li>
            
            <li><a href="index.php"><i class="fa fa-dashboard"></i> Dashboard</a></li>
            <?php if ($_SESSION['admin']){?>
            <li><a href="?page=pengguna"><ion-icon name="person-circle"></ion-icon> Pengguna</a></li>
            <?php }?>
            <?php if ($_SESSION['admin'] || $_SESSION['kasir']){?>
            <li><a href="?page=pelanggan"><i class="fa fa-users"></i> Pelanggan</a></li>
            <?php }?>

            <?php if ($_SESSION['admin'] || $_SESSION['kasir']){?>
            <li><a href="?page=laundry"><i class="fa fa-money"></i> Transaksi laundry</a></li>
            <?php }?>

            <?php if ($_SESSION['admin']){?>
            <li><a href="?page=outlet"><ion-icon name="storefront"></ion-icon>  Outlet</a></li>
            <?php }?>

            <?php if ($_SESSION['admin'] || $_SESSION['kasir']){?>
            <li><a href="?page=barang"><ion-icon name="reorder-four"></ion-icon> Barang </a></li>
            <?php }?>
            
            <li><a href="?page=transaksi"><i class="fa fa-book"></i> Laporan </a></li>
            
            
            

        
      </ul>
    </section>
  </aside>
  