<?php 
    if($_GET){
        include "config.php";
        $qry_hapus_member=mysqli_query($conn,"DELETE FROM `member` WHERE id_member='".$_GET['id']."'");
        if($qry_hapus_member){
            echo "<script>alert('Sukses hapus member');location.href='tampil_member.php';</script>";
        } else {
            echo "<script>alert('Gagal hapus member');location.href='tampil_member.php';</script>";
        }
    }
?>

