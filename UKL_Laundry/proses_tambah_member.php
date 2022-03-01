<?php
if($_POST){
    $id_member=$_POST['id_member'];
    $nama = $_POST['nama'];
    $alamat = $_POST['alamat'];
    $gender = $_POST['gender'];
    $tlp = $_POST['tlp'];


    if(empty($nama)){
        echo "<script>alert('nama member tidak boleh kosong');location.href='tambah_member.php';</script>";
    }elseif(empty($alamat)){
        echo "<script>alert('alamat tidak boleh kosong'); location.href='tambah_member.php';</script>";
    }elseif(empty($gender)){
        echo "<script>alert('gender tidak boleh kosong'); location.href='tambah_member.php';</script>";
    }elseif(empty($tlp)){
        echo "<script>alert('nomor telepon tidak boleh kosong'); location.href='tambah_member.php';</script>";
    }else{
        include "config.php";
        $insert=mysqli_query($conn,"insert into member (nama, alamat, gender, tlp) 
        value ('".$nama."','".$alamat."','".$gender."','".$tlp."')") or
        die(mysqli_error($conn));
        
        if($insert){
            echo "<script>alert('Sukses menambahkan member');location.href='tampil_member.php';</script>";
        }else{
            echo "<script>alert('Gagal menambahkan member');location.href='tambah_member.php';</script>";
        }
    }
}
?>