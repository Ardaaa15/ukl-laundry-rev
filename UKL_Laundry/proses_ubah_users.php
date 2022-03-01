<?php
if($_POST){
    $id_users=$_POST['id_users'];
    $username=$_POST['username'];
    $email=$_POST['email'];
    $role=$_POST['role'];
    $password=$_POST['password'];

    if(empty($username)){
        echo "<script>alert('username users tidak boleh kosong');location.href='tambah_users.php';</script>";
    }elseif(empty($email)){
        echo "<script>alert('email users tidak boleh kosong');location.href='tambah_users.php';</script>";
    }elseif(empty($role)){
        echo "<script>alert('role users tidak boleh kosong');location.href='tambah_users.php';</script>";
    } elseif(empty($password)){
        echo "<script>alert('password users tidak boleh kosong');location.href='tambah_users.php';</script>";
    } else {
        include "config.php";
        if(empty($username)){
            $update=mysqli_query($conn,"UPDATE `users` SET `id_users`='".$id_users."',`username`='".$username."',`email`='".$email."',`password`='".$password."',`role`='".$role."' WHERE id_users = '".$id_users."' ") or die(mysqli_error($conn));
            if($update){
                echo "<script>alert('Sukses update users');location.href='tampil_users.php';</script>";
            } else {
                echo "<script>alert('Gagal update users');location.href='ubah_users.php?id_users=".$id_users."';</script>";
            }
        } else {
            $update=mysqli_query($conn,"UPDATE `users` SET `id_users`='".$id_users."',`username`='".$username."',`email`='".$email."',`password`='".$password."',`role`='".$role."' WHERE id_users = '".$id_users."' ") or die(mysqli_error($conn));
            //$update=mysqli_query($conn,"update users set ' id_users='".$id_users."',' username='".$username."',email='".$email."', role='".$role."' password='".$password."' where id_users = '".$id_users."'") or die(mysqli_error($conn));
            if($update){
                echo "<script>alert('Sukses update users');location.href='tampil_users.php';</script>";
            } else {
                echo "<script>alert('Gagal update users');location.href='ubah_users.php?id".$id_users."';</script>";
            }
        }
        
    } 
}
?>
