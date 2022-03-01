<?php 
    if($_GET){
        include "config.php";
        $qry_hapus_paket=mysqli_query($conn,"DELETE FROM `paket` WHERE id_paket='".$_GET['id']."'");
        if($qry_hapus_paket){
            echo "<script>alert('Sukses hapus paket');location.href='tampil_paket.php';</script>";
        } else {
            echo "<script>alert('Gagal hapus paket');location.href='tampil_paket.php';</script>";
        }
    }
?>