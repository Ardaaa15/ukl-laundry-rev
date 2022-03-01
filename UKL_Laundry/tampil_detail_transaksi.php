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
        include "header.php"
        ?>
    <nav class="navbar navbar-dark bg-dark">
                    <div class="container-fluid">
                    <a class="navbar-brand">Tampil detail_transaksi</a>

            </div>
            </nav>
        <table class="table table-hover table-striped">
            <thead>
                <tr>
                    <th>NO</th><th>ID_TRANSAKSI<th>ID_PAKET</th>
                    <th>QTY</th><th>HARGA</th><th>SUBTOTAL</th><th>AKSI</th>
                </tr>
            </thead>
            <tbody>
                <?php
                include "config.php";
                $qry_detail_transaksi=mysqli_query($conn,"select detail_transaksi.*,paket.harga from detail_transaksi join paket on paket.id_paket=detail_transaksi.id_paket");
                              
                $no=0;
                while($data_detail_transaksi=mysqli_fetch_array($qry_detail_transaksi)){
                $no++;
                ?>
                <tr>
                    
                    <td><?=$no?></td>
                    <td><?=$data_detail_transaksi['id_transaksi']?></td>
                    <td><?=$data_detail_transaksi['id_paket']?></td>
                    <td><?=$data_detail_transaksi['qty']?></td>
                    <td><?=$data_detail_transaksi['harga']?></td>
                    <?php
                        $subtotal=$data_detail_transaksi['harga'] * $data_detail_transaksi['qty'];
                    ?>
                    <td><?=$subtotal?></td>
                    
                    <td><a href="ubah_detail_transaksi.php?id=<?=$data_detail_transaksi['id_detail_transaksi']?>"
                    class="btn btn-success">Ubah</a> | <a
                    href="hapus_detail_transaksi.php?id=<?=$data_detail_transaksi['id_detail_transaksi']?>"
                    onclick="return confirm('Apakah Anda yakin menghapus data ini?')" 
                    class="btn btn-danger">Hapus</a></td>
                </tr>
                <?php
                }
                ?>
            </tbody>
        </table>
        <a href="Tambah_detail_transaksi.php"
                    class="btn btn-success">Tambah Detail Transaksi</a>
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