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
                    <a class="navbar-brand">Tampil transaksi</a>

            </div>
            </nav>
        <table class="table table-hover table-striped">
            <thead>
                <tr>
                    <th>NO</th><th>ID Member<th>ID User</th>
                    <th>Tanggal Transaksi</th><th>Batas Waktu</th><th>Tanggal Bayar</th>
                    <th>Status</th><th>Pembayaran</th><th>AKSI</th>
                </tr>
            </thead>
            <tbody>
                <?php
                include "config.php";
                $qry_transaksi=mysqli_query($conn,"select * from transaksi");
                $no=0;
                while($data_transaksi=mysqli_fetch_array($qry_transaksi)){
                $no++;?>
                <tr>
                    <td><?=$no?></td>
                    <td><?=$data_transaksi['id_member']?></td>
                    <td><?=$data_transaksi['id_users']?></td>
                    <td><?=$data_transaksi['tgl']?></td>
                    <td><?=$data_transaksi['batas_waktu']?></td>
                    <td><?=$data_transaksi['tgl_bayar']?></td>
                    <td><?=$data_transaksi['status']?></td>
                    <td><?=$data_transaksi['dibayar']?></td>
                    <td>
                        <a href="tampil_detail_transaksi.php?id_transaksi=<?php echo $data_transaksi['id_transaksi']?>"class="btn btn-success">Detail</a>|
                    <a href="ubah_transaksi.php?id=<?=$data_transaksi['id_transaksi']?>"class="btn btn-success">Ubah</a> | 
                    <a href="hapus_transaksi.php?id=<?=$data_transaksi['id_transaksi']?>"onclick="return confirm('Apakah Anda yakin menghapus data ini?')" class="btn btn-danger">Hapus</a> 
                    </td>
                </tr>
                <?php
                }
                ?>
            </tbody>
        </table>
        <br>
        <a href="Tambah_transaksi.php"
                    class="btn btn-success">Tambah Transaksi</a>
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