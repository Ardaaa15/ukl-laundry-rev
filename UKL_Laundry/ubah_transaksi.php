<!DOCTYPE html>
<html>
<head>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous">
    <title></title>
</head>
<body>
<nav class="navbar navbar-dark bg-dark">
                    <div class="container-fluid">
                    <a class="navbar-brand">Ubah Data transaksi Laundry</a>

            </div>
            </nav>
    <?php 
    include "config.php";
    $qry_get_transaksi=mysqli_query($conn,"select * from transaksi where id_transaksi = ". $_GET['id']);
    $dt_transaksi=mysqli_fetch_array($qry_get_transaksi);
    ?>
    <form action="proses_ubah_transaksi.php" method="post">
        <input type="hidden" name="id_transaksi" value= "<?=$dt_transaksi['id_transaksi']?>">
        Nama Member :

        <select name="id_member" class="form-control">

        <option></option>

        <?php 

         include "config.php";

        $qry_member=mysqli_query($conn,"select * from member");
        
        while($data_member=mysqli_fetch_array($qry_member)){

            if($data_member['id_member'] == $dt_transaksi['id_member']){
                echo '<option value="'.$data_member['id_member'].'" selected>'.$data_member['nama'].'</option>';  
            } else {
                echo '<option value="'.$data_member['id_member'].'">'.$data_member['nama'].'</option>';  
            }
            

        }

    ?>

    </select>

        Nama Users :

        <select name="id_users" class="form-control">

        <option></option>

    <?php 

    include "config.php";

    $qry_users=mysqli_query($conn,"select * from users");

    while($data_users=mysqli_fetch_array($qry_users)){

        if($data_users['id_users'] == $dt_transaksi['id_users']){
            echo '<option value="'.$data_users['id_users'].'" selected>'.$data_users['username'].'</option>';  
        } else {
            echo '<option value="'.$data_users['id_users'].'">'.$data_users['username'].'</option>';  
        }  

    }

    ?>

    </select>

        Tanggal Transaksi :

        <input type="date" name="tgl" value="<?php echo $dt_transaksi['tgl']; ?>" class="form-control"> 

        Batas Waktu :

        <input type="date" name="batas_waktu" value="<?php echo $dt_transaksi['batas_waktu']; ?>" class="form-control">

        Tanggal Bayar :

        <input type="date" name="tgl_bayar" value="<?php echo $dt_transaksi['tgl_bayar']; ?>" class="form-control">

        Status :

    <select name="status" class="form-control">

        <option></option>

                <option value="baru" <?php if($dt_transaksi['status'] == 'baru'){ echo 'selected'; } ?>>Baru</option>

                <option value="proses" <?php if($dt_transaksi['status'] == 'proses'){ echo 'selected'; } ?>>Proses</option>

                <option value="selesai" <?php if($dt_transaksi['status'] == 'selesai'){ echo 'selected'; } ?>>Selesai</option>

                <option value="diambil" <?php if($dt_transaksi['status'] == 'diambil'){ echo 'selected'; } ?>>Diambil</option>

    </select>

        Status Pembayaran :

    <select name="dibayar" class="form-control">

            <option></option>

                <option value="dibayar" <?php if($dt_transaksi['dibayar'] == 'dibayar'){ echo 'selected'; } ?>>Dibayar</option>

                <option value="belum_dibayar" <?php if($dt_transaksi['dibayar'] == 'belum_dibayar'){ echo 'selected'; } ?>>Belum Dibayar</option>

    </select>

    <input type="submit" name="simpan" value="Ubah transaksi" class="btn btn-primary">
    </form>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-gtEjrD/SeCtmISkJkNUaaKMoLD0//ElJ19smozuHV6z3Iehds+3Ulb9Bn9Plx0x4" crossorigin="anonymous"></script>
</body>
</html>