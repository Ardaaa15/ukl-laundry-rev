<?php 

    if($_POST){
        $email=$_POST['email'];
        $password=$_POST['password'];

        if(empty($email)){
            echo "<script>alert('email tidak boleh kosong');location.href='login.php';</script>";
        } elseif(empty($password)){
            echo "<script>alert('Password tidak boleh kosong');location.href='login.php';</script>";
        } else {
            include "config.php";
            
            $qry_login=mysqli_query($conn,"select * from users where email = '".$_POST['email']."' and password = '".md5($_POST['password'])."'");

            if(mysqli_num_rows($qry_login)>0){

                $dt_login=mysqli_fetch_array($qry_login);
                session_start();
                
                $_SESSION['id_users']=$dt_login['id_users'];
                $_SESSION['email']=$dt_login['email'];
                $_SESSION['username']=$dt_login['username'];
                $_SESSION['role']=$dt_login['role'];
                $_SESSION['status_login']=true;
                
                if ($_SESSION['role'] === "admin") {
                    header("location: home_admin.php");
                } else {
                    header("location: home_kasir.php");
                }
            } else {
                echo "<script>alert('email dan Password tidak benar');location.href='../main/sign-in.html';</script>";
            }
        }
    }
?>