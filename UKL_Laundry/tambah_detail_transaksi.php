<!DOCTYPE html>

<html>

<head>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous">

    <title></title>

</head>

<body>
    <div class="container">
    <h3>Detail Transaksi</h3>

    <form action="proses_tambah_detail_transaksi.php" method="post">

    <input type="hidden" name="id_detai_transaksi" value="" class="form-control"><br>

        Id Transaksi :
        <select name="id_transaksi" class="form-control">
            <option></option>
            <?php 
            include "config.php";
            $qry_transaksi=mysqli_query($conn,"select * from transaksi");
            while($data_transaksi=mysqli_fetch_array($qry_transaksi)){
                echo '<option value="'.$data_transaksi['id_transaksi'].'">'.$data_transaksi['id_transaksi'].'</option>';   
            }
            ?>
        </select>

        Id Paket :
        <select name="id_paket" class="form-control">
            <option></option>
            <?php 
            include "config.php";
            $qry_paket=mysqli_query($conn,"select * from paket");
            while($data_paket=mysqli_fetch_array($qry_paket)){
                echo '<option value="'.$data_paket['id_paket'].'">'.$data_paket['jenis'].'</option>';   
            }
            ?>
        </select>

        Quantity :
        <input type="number" name="qty" value="" class="form-control">
        <input type="submit" name="simpan" value="Tambah Detail Transaksi" class="btn btn-primary">
    </form>
    <scipt src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-gtEjrD/SeCtmISkJkNUaaKMoLD0//ElJ19smozuHV6z3Iehds+3Ulb9Bn9Plx0x4" crossorigin="anonymous"></script>

</div>
</body>

</html>