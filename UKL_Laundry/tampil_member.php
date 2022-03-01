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
                    <a class="navbar-brand">Tampil member</a>

            </div>
            </nav>
        <table class="table table-hover table-striped">
            <thead>
                <tr>
                    <th>NO</th><th>NAMA<th>Alamat</th>
                    <th>Gender</th><th>NO TELEPON</th><th>AKSI</th>
                </tr>
            </thead>
            <tbody>
                <?php
                include "config.php";
                $qry_member=mysqli_query($conn,"select * from member");
                $no=0;
                while($data_member=mysqli_fetch_array($qry_member)){
                $no++;?>
                <tr>
                    <td><?=$no?></td>
                    <td><?=$data_member['nama']?></td>
                    <td><?=$data_member['alamat']?></td>
                    <td><?=$data_member['gender']?></td>
                    <td><?=$data_member['tlp']?></td>
                    <td><a href="ubah_member.php?id=<?=$data_member['id_member']?>"
                    class="btn btn-success">Ubah</a> | <a
                    href="hapus_member.php?id=<?=$data_member['id_member']?>"
                    onclick="return confirm('Apakah Anda yakin menghapus data ini?')" 
                    class="btn btn-danger">Hapus</a></td>
                </tr>
                <?php
                }
                ?>
            </tbody>
        </table>
        <a href="Tambah_member.php"
                    class="btn btn-success">Tambah Member</a>
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