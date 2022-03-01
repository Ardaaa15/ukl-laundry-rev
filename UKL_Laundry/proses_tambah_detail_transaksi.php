<?php
if($_POST){
    $id_detail_transaksi=$_POST['id_detail_transaksi'];
    $id_transaksi = $_POST['id_transaksi'];
    $id_paket = $_POST['id_paket'];
    $qty = $_POST['qty'];

    if(empty($id_transaksi)){
        echo "<script>alert('id_transaksi tidak boleh kosong');location.href='tambah_detail_transaksi.php';</script>";
    }elseif(empty($id_paket)){
        echo "<script>alert('id_paket tidak boleh kosong'); location.href='tambah_detail_transaksi.php';</script>";
    }elseif(empty($qty)){
        echo "<script>alert('qty tidak boleh kosong'); location.href='tambah_detail_transaksi.php';</script>";
    }else{
        include "config.php";
        $insert=mysqli_query($conn,"insert into detail_transaksi (id_transaksi, id_paket, qty) 
        value ('".$id_transaksi."','".$id_paket."','".$qty."')") or
        die(mysqli_error($conn));
        
        if($insert){
            echo "<script>alert('Sukses menambahkan detail_transaksi');location.href='tampil_detail_transaksi.php';</script>";
        }else{
            echo "<script>alert('Gagal menambahkan detail_transaksi');location.href='tambah_detail_transaksi.php';</script>";
        }
    }
}
?>