<?php

  $page = $_GET['page'];
  $aksi = $_GET['aksi'];

 if ($page == "pelanggan") {
       if ($aksi == "") {
           include "page/pelanggan/pelanggan.php";
       }

       if ($aksi == "tambah") {
        include "page/pelanggan/tambah.php";
    }
    if ($aksi == "edit") {
        include "page/pelanggan/edit.php";
    }

    if ($aksi == "delete") {
        include "page/pelanggan/delete.php";
    }

    }



    if ($page == "pengguna") {
        if ($aksi == "") {
            include "page/pengguna/pengguna.php";
        }
 
        if ($aksi == "tambah") {
         include "page/pengguna/tambah.php";
     }
     if ($aksi == "edit") {
         include "page/pengguna/edit.php";
     }
 
     if ($aksi == "delete") {
         include "page/pengguna/delete.php";
     }
 
     }


     if ($page == "laundry") {
        if ($aksi == "") {
            include "page/laundry/laundry.php";
        }
 
        if ($aksi == "tambah") {
         include "page/laundry/tambah.php";
     }
     if ($aksi == "edit") {
         include "page/laundry/edit.php";
     }
 
     if ($aksi == "delete") {
         include "page/laundry/delete.php";
     }

     if ($aksi == "lunas") {
        include "page/laundry/lunas.php";
    }

    if ($aksi == "reset") {
        include "page/laundry/reset.php";
    }
    
 
     }


     if ($page == "transaksi") {
        if ($aksi == "") {
            include "page/transaksi/transaksi.php";
        }
 
        if ($aksi == "tambah") {
         include "page/transaksi/tambah.php";
     }

     if ($aksi == "reset") {
        include "page/transaksi/reset.php";
    }
 
     }


     if ($page == "outlet") {
        if ($aksi == "") {
            include "page/outlet/outlet.php";
        }
 
        if ($aksi == "tambah") {
         include "page/outlet/tambah.php";
     }
     if ($aksi == "edit") {
         include "page/outlet/edit.php";
     }
 
     
     if ($aksi == "delete") {
        include "page/outlet/delete.php";
    }


    
    
 
     }


     if ($page == "barang") {
        if ($aksi == "") {
            include "page/barang/barang.php";
        }
 
        if ($aksi == "tambah") {
         include "page/transaksi/tambah.php";
     }
     if ($aksi == "edit") {
         include "page/barang/edit.php";
     }
 
     if ($aksi == "delete") {
        include "page/barang/delete.php";
    }


    
 
     }

     

     


    if ($page == "") {
        include "home.php";
    }
 

?>





