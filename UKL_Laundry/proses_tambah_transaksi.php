<?php

if($_POST){

    $id_member=$_POST['id_member'];
    $tgl=$_POST['tgl'];
    $batas_waktu=$_POST['batas_waktu'];
    $tgl_bayar=$_POST['tgl_bayar'];
    $status=$_POST['status'];
    $dibayar=$_POST['dibayar'];
    $id_users=$_POST['id_users'];

    if(empty($id_member)){
        echo "<script>alert('id member tidak boleh kosong');location.href='tambah_transaksi.php';</script>";
    } elseif(empty($tgl)){
        echo "<script>alert('tanggal tidak boleh kosong');location.href='tambah_transaksi.php';</script>";
    } elseif(empty($batas_waktu)){
        echo "<script>alert('batas waktu tidak boleh kosong');location.href='tambah_transaksi.php';</script>";
    } elseif(empty($tgl_bayar)){
        echo "<script>alert('tanggal bayar tidak boleh kosong');location.href='tambah_transaksi.php';</script>";
    } elseif(empty($status)){
        echo "<script>alert('status tidak boleh kosong');location.href='tambah_transaksi.php';</script>";
    } elseif(empty($dibayar)){
        echo "<script>alert('status pembayaran tidak boleh kosong');location.href='tambah_transaksi.php';</script>";
    } elseif(empty($id_users)){
        echo "<script>alert('id users tidak boleh kosong');location.href='tambah_transaksi.php';</script>";
    } else {
        include "config.php";

        $insert=mysqli_query($conn,"insert into transaksi (id_member, tgl, batas_waktu, tgl_bayar, status, dibayar, id_users) 
        value ('".$id_member."','".$tgl."','".$batas_waktu."','".$tgl_bayar."','".$status."','".$dibayar."','".$id_users."')");

        if($insert){
            echo "<script>alert('Sukses menambahkan transaksi');location.href='tampil_transaksi.php';</script>";
        } else {
            echo "<script>alert('Gagal menambahkan transaksi');location.href='tambah_transaksi.php';</script>";
        }
    }
}

?>