<?php
if($_POST){
    $id_member=$_POST['id_member'];
    $nama=$_POST['nama'];
    $alamat=$_POST['alamat'];
    $gender=$_POST['gender'];
    $tlp=$_POST['tlp'];

    if(empty($nama)){
        echo "<script>alert('nama member tidak boleh kosong');location.href='tambah_member.php';</script>";
    }elseif(empty($alamat)){
        echo "<script>alert('alamat member tidak boleh kosong');location.href='tambah_member.php';</script>";
    } elseif(empty($gender)){
        echo "<script>alert('gender member tidak boleh kosong');location.href='tambah_member.php';</script>";
    } elseif(empty($tlp)){
        echo "<script>alert('tlp member tidak boleh kosong');location.href='tambah_member.php';</script>";
    }  else {
        include "config.php";
        if(empty($nama)){
            $update=mysqli_query($conn,"update member set nama='".$nama."',alamat='".$alamat."', gender='".$gender."', tlp='".$tlp."' where id_member = '".$id_member."' ") or die(mysqli_error($conn));
            if($update){
                echo "<script>alert('Sukses update member');location.href='tampil_member.php';</script>";
            } else {
                echo "<script>alert('Gagal update member');location.href='ubah_member.php?id_member=".$id_member."';</script>";
            }
        } else {
            $update=mysqli_query($conn,"update member set nama='".$nama."',alamat='".$alamat."', gender='".$gender."', tlp='".$tlp."' where id_member = '".$id_member."'") or die(mysqli_error($conn));
            if($update){
                echo "<script>alert('Sukses update member');location.href='tampil_member.php';</script>";
            } else {
                echo "<script>alert('Gagal update member');location.href='ubah_member.php?id".$id_member."';</script>";
            }
        }
        
    } 
}
?>
