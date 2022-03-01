<!DOCTYPE html>

    <html>

    <head>

        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous">

        <title></title>

    </head>

    <body>
    <div class="container">
        <h3>Tambah Transaksi</h3>

        <form action="proses_tambah_transaksi.php" method="post">

            Nama Member :

            <select name="id_member" class="form-control">

                <option></option>

                <?php 

                include "config.php";

                $qry_member=mysqli_query($conn,"select * from member");

                while($data_member=mysqli_fetch_array($qry_member)){

                    echo '<option value="'.$data_member['id_member'].'">'.$data_member['nama'].'</option>';   

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

                    echo '<option value="'.$data_users['id_users'].'">'.$data_users['username'].'</option>';   

                }

                ?>

            </select>

            Tanggal Transaksi :

            <input type="date" name="tgl" value="" class="form-control"> 

            Batas Waktu :

            <input type="date" name="batas_waktu" value="" class="form-control">

            Tanggal Bayar :

            <input type="date" name="tgl_bayar" value="" class="form-control">

            Status :

            <select name="status" class="form-control">

                <option></option>

                <option value="baru">Baru</option>

                <option value="proses">Proses</option>

                <option value="selesai">Selesai</option>

                <option value="diambil">Diambil</option>

            </select>

            Status Pembayaran :

            <select name="dibayar" class="form-control">

                <option></option>

                <option value="dibayar">Dibayar</option>

                <option value="belum_dibayar">Belum Dibayar</option>

            </select>
            
            <input type="submit" name="simpan" value="Tambah Transaksi" class="btn btn-primary">

        </form>


        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-gtEjrD/SeCtmISkJkNUaaKMoLD0//ElJ19smozuHV6z3Iehds+3Ulb9Bn9Plx0x4" crossorigin="anonymous"></script>
    </div>
    </body>

    </html>