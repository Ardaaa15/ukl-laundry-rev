<?php 
    if($_GET){
        include "config.php";
        $qry_hapus_users=mysqli_query($conn,"DELETE FROM `users` WHERE id_users='".$_GET['id']."'");
        if($qry_hapus_users){
            echo "<script>alert('Sukses hapus users');location.href='tampil_users.php';</script>";
        } else {
            echo "<script>alert('Gagal hapus users');location.href='tampil_users.php';</script>";
        }
    }
?>