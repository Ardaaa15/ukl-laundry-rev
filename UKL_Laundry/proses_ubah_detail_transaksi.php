<?php

if($_POST){
    $id_detail_transaksi=$_POST['id_detail_transaksi'];
    $id_transaksi=$_POST['id_transaksi'];
    $id_paket=$_POST['id_paket'];
    $qty=$_POST['qty'];

    if(empty($id_transaksi)){
        echo "<script>alert('id transaksi tidak boleh kosong');location.href='tambah_transaksi.php';</script>";
    } elseif(empty($id_paket)){
        echo "<script>alert('tanggal tidak boleh kosong');location.href='tambah_transaksi.php';</script>";
    } elseif(empty($qty)){
        echo "<script>alert('batas waktu tidak boleh kosong');location.href='tambah_transaksi.php';</script>";
    } else {
        include "config.php";
        $sql = "update detail_transaksi set id_transaksi='".$id_transaksi."', id_paket='".$id_paket."', qty='".$qty."' WHERE id_detail_transaksi='".$id_detail_transaksi."'";
        
        //echo $sql;
        $update=mysqli_query($conn, $sql) or die(mysqli_error($conn));
        if($update){
            echo "<script>alert('Sukses update detail_transaksi');location.href='tampil_detail_transaksi.php';</script>";
        } else {
            echo "<script>alert('Gagal update detail_transaksi');location.href='ubah_detail_transaksi.php?id_transaksi=".$id_transaksi."';</script>";
        }
    }
}

?>