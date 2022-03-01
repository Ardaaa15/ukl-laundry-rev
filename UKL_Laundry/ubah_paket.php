<!DOCTYPE html>
<html>
<head>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous">
    <title></title>
</head>
<body>
<nav class="navbar navbar-dark bg-dark">
                    <div class="container-fluid">
                    <a class="navbar-brand">Ubah Data Paket Laundry</a>

            </div>
            </nav>
    <?php 
    include "config.php";
    $qry_get_paket=mysqli_query($conn,"select * from paket where id_paket = ". $_GET['id']);
    $dt_paket=mysqli_fetch_array($qry_get_paket);
    ?>
    <form action="proses_ubah_paket.php" method="post">
        <input type="hidden" name="id_paket" value= "<?=$dt_paket['id_paket']?>">
        Jenis :
            <select name="jenis" class="form-control">
                <option></option>
                <option value = "kiloan">Kiloan</option>
                <option value = "selimut">selimut</option>
                <option value = "bed_cover">bed_cover</option>
                <option value = "kaos">Kaos</option>
            </select><br>
        Harga : 
        <textarea name="harga" class="form-control" rows="4"><?=$dt_paket['harga']?></textarea>

    <input type="submit" name="simpan" value="Ubah paket" class="btn btn-primary">
    </form>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-gtEjrD/SeCtmISkJkNUaaKMoLD0//ElJ19smozuHV6z3Iehds+3Ulb9Bn9Plx0x4" crossorigin="anonymous"></script>
</body>
</html>