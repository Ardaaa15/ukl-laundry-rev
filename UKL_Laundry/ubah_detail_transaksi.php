<!DOCTYPE html>
<html>
<head>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous">
    <title></title>
</head>
<body>
<nav class="navbar navbar-dark bg-dark">
                    <div class="container-fluid">
                    <a class="navbar-brand">Ubah Data detail_transaksi Laundry</a>

            </div>
            </nav>
    <?php 
    include "config.php";
    $qry_get_detail_transaksi=mysqli_query($conn,"select * from detail_transaksi where id_detail_transaksi = ". $_GET['id']);
    $dt_detail_transaksi=mysqli_fetch_array($qry_get_detail_transaksi);
    ?>
    <form action="proses_ubah_detail_transaksi.php" method="post">
        <input type="hidden" name="id_detail_transaksi" value= "<?=$dt_detail_transaksi['id_detail_transaksi']?>">
        id_transaksi :

        <select name="id_transaksi" class="form-control">

        <option></option>

        <?php 

         include "config.php";

        $qry_transaksi=mysqli_query($conn,"select * from transaksi");
        
        while($data_transaksi=mysqli_fetch_array($qry_transaksi)){

            if($data_transaksi['id_transaksi'] == $dt_detail_transaksi['id_transaksi']){
                echo '<option value="'.$data_transaksi['id_transaksi'].'" selected>'.$data_transaksi['status'].'</option>';  
            } else {
                echo '<option value="'.$data_transaksi['id_transaksi'].'">'.$data_transaksi['status'].'</option>';  
            }
            

        }

    ?>

    </select>

        id_paket :

        <select name="id_paket" class="form-control">

        <option></option>

    <?php 

    include "config.php";

    $qry_paket=mysqli_query($conn,"select * from paket");

    while($data_paket=mysqli_fetch_array($qry_paket)){

        if($data_paket['id_paket'] == $dt_detail_transaksi['id_paket']){
            echo '<option value="'.$data_paket['id_paket'].'" selected>'.$data_paket['jenis'].'</option>';  
        } else {
            echo '<option value="'.$data_paket['id_paket'].'">'.$data_paket['jenis'].'</option>';  
        }  

    }

    ?>

    </select>

        QTY :

        <input type="integer" name="qty" value="<?php echo $dt_detail_transaksi['qty']; ?>" class="form-control"> 

    <input type="submit" name="simpan" value="Ubah detail_transaksi" class="btn btn-primary">
    </form>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-gtEjrD/SeCtmISkJkNUaaKMoLD0//ElJ19smozuHV6z3Iehds+3Ulb9Bn9Plx0x4" crossorigin="anonymous"></script>
</body>
</html>