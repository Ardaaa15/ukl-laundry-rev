<html>
    <head>
        <link
    href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" 
    rel="stylesheet" integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" 
    crossorigin="anonymous">
    <title></title>
    </head>
    <body>

    <?php
        include "header.php";
    ?>
    <nav class="navbar navbar-dark bg-dark">
                    <div class="container-fluid">
                    <a class="navbar-brand">Tampil paket</a>

            </div>
            </nav>
        <table class="table table-hover table-striped">
            <thead>
                <tr>
                    <th>NO</th><th>JENIS<th>HARGA</th>
                    <?php
                    if($_SESSION['role']=='admin'){
                    ?>
                    <th>AKSI</th>
                    <?php } ?>
                </tr>
            </thead>
            <tbody>
                <?php
                include "config.php";
                $qry_paket=mysqli_query($conn,"select * from paket");
                $no=0;
                while($data_paket=mysqli_fetch_array($qry_paket)){
                $no++;?>
                <tr>
                    <td><?=$no?></td>
                    <td><?=$data_paket['jenis']?></td>
                    <td><?=$data_paket['harga']?></td>
                    <?php
                   
                    if($_SESSION['role'] == 'admin'){
                    ?>
                    <td><a href="ubah_paket.php?id=<?=$data_paket['id_paket']?>"
                    class="btn btn-success">Ubah</a> | <a
                    href="hapus_paket.php?id=<?=$data_paket['id_paket']?>"
                    onclick="return confirm('Apakah Anda yakin menghapus data ini?')" 
                    class="btn btn-danger">Hapus</a></td>
                    <?php } ?>
                </tr>
                <?php
                }
                ?>
            </tbody>
        </table>
        <?php
        if($_SESSION['role'] == 'admin'){
        ?>
        <a href="Tambah_paket.php"
                    class="btn btn-success">Tambah Paket</a>
                    <?php }?>
                <?php
                if($_SESSION['role']=='kasir'){
                ?>
                <a href="home_kasir.php" class="btn btn-success">kembali</a>
                <?php } 
                else{
                ?>
                <a href="home_admin.php" class="btn btn-success">kembali</a>
                <?php
                }
                ?>
        <script
        src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.bundle.min.js" 
        integrity="sha384-gtEjrD/SeCtmISkJkNUaaKMoLD0//ElJ19smozuHV6z3Iehds+3Ulb9Bn9Plx0x4" 
        crossorigin="anonymous"></script>
    </body>
</html>