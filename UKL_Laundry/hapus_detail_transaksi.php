<?php 
    if($_GET){
        include "config.php";
        $qry_hapus_detail_transaksi=mysqli_query($conn,"DELETE FROM `detail_transaksi` WHERE id_detail_transaksi='".$_GET['id']."'");
        if($qry_hapus_detail_transaksi){
            echo "<script>alert('Sukses hapus detail_transaksi');location.href='tampil_detail_transaksi.php';</script>";
        } else {
            echo "<script>alert('Gagal hapus detail_transaksi');location.href='tampil_detail_transaksi.php';</script>";
        }
    }
?>

