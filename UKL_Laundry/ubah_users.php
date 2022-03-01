<!DOCTYPE html>
<html>
<head>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous">
    <title></title>
</head>
<body>
<nav class="navbar navbar-dark bg-dark">
                    <div class="container-fluid">
                    <a class="navbar-brand">Ubah Data Users Laundry</a>

            </div>
            </nav>
    <?php 
    include "config.php";
    $qry_get_users=mysqli_query($conn,"select * from users where id_users = ". $_GET['id']);
    $dt_users=mysqli_fetch_array($qry_get_users);
    ?>
    <form action="proses_ubah_users.php" method="post">
        <input type="hidden" name="id_users" value= "<?=$dt_users['id_users']?>">
        Username :
        <input type="text" name="username" value= "<?=$dt_users['username']?>" class="form-control">
        email : 
        <textarea name="email" class="form-control" rows="4"><?=$dt_users['email']?></textarea>
        password : 
        <input type="password" name="password" value= "<?=$dt_users['password']?>" class="form-control">
        Role :
            <select name="role" class="form-control">
                <option></option>
                <option value = "admin"<?php if($dt_users['role'] == 'admin'){ echo 'selected'; } ?>>Admin</option>
                <option value = "kasir"<?php if($dt_users['role'] == 'kasir'){ echo 'selected'; } ?>>Kasir</option>
            </select><br>

    <input type="submit" name="simpan" value="Ubah users" class="btn btn-primary">
    </form>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-gtEjrD/SeCtmISkJkNUaaKMoLD0//ElJ19smozuHV6z3Iehds+3Ulb9Bn9Plx0x4" crossorigin="anonymous"></script>
</body>
</html>