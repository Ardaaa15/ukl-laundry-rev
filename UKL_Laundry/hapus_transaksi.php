<?php 
    if($_GET){
        include "config.php";
        $qry_hapus_transaksi=mysqli_query($conn,"DELETE FROM `transaksi` WHERE id_transaksi='".$_GET['id']."'");
        if($qry_hapus_transaksi){
            echo "<script>alert('Sukses hapus transaksi');location.href='tampil_transaksi.php';</script>";
        } else {
            echo "<script>alert('Gagal hapus transaksi');location.href='tampil_transaksi.php';</script>";
        }
    }
?>