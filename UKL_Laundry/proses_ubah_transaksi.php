<?php

    if($_POST){
        $id_transaksi=$_POST['id_transaksi'];
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
            echo "<script>alert('tgl tidak boleh kosong');location.href='tambah_transaksi.php';</script>";
        } elseif(empty($batas_waktu)){
            echo "<script>alert('batas waktu tidak boleh kosong');location.href='tambah_transaksi.php';</script>";
        } elseif(empty($tgl_bayar)){
            echo "<script>alert('tgl bayar tidak boleh kosong');location.href='tambah_transaksi.php';</script>";
        } elseif(empty($status)){
            echo "<script>alert('status tidak boleh kosong');location.href='tambah_transaksi.php';</script>";
        } elseif(empty($dibayar)){
            echo "<script>alert('dibayar tidak boleh kosong');location.href='tambah_transaksi.php';</script>";
        } elseif(empty($id_users)){
            echo "<script>alert('id users tidak boleh kosong');location.href='tambah_transaksi.php';</script>";
        } else {

            include "config.php";
                $sql = "update transaksi set id_member='".$id_member."', tgl='".$tgl."', batas_waktu='".$batas_waktu."', tgl_bayar='".$tgl_bayar."' , status='".$status."' , dibayar='".$dibayar."' , id_users='".$id_users."' WHERE id_transaksi='".$id_transaksi."'";
                
                //echo $sql;
                $update=mysqli_query($conn, $sql) or die(mysqli_error($conn));
                if($update){
                    echo "<script>alert('Sukses update transaksi');location.href='tampil_transaksi.php';</script>";
                } else {
                    echo "<script>alert('Gagal update transaksi');location.href='ubah_transaksi.php?id_transaksi=".$id_transaksi."';</script>";
                }

            }

        }


    ?>