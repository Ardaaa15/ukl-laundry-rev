<!DOCTYPE html>
<html>
<head>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous">
    <title></title>
</head>
<body>
<nav class="navbar navbar-dark bg-dark">
                    <div class="container-fluid">
                    <a class="navbar-brand">Ubah Data Pelanggan Laundry</a>

            </div>
            </nav>
    <?php 
    include "config.php";
    $qry_get_member=mysqli_query($conn,"select * from member where id_member = ". $_GET['id']);
    $dt_member=mysqli_fetch_array($qry_get_member);
    ?>
    <form action="proses_ubah_member.php" method="post">
        <input type="hidden" name="id_member" value= "<?=$dt_member['id_member']?>">
        Nama :
        <input type="text" name="nama" value= "<?=$dt_member['nama']?>" class="form-control">
        Alamat : 
        <textarea name="alamat" class="form-control" rows="4"><?=$dt_member['alamat']?></textarea>
        Gender : 
        <?php 
        $arr_gender=array('L'=>'L','P'=>'P');
        ?>
        <select name="gender" class="form-control">
            <option></option>
            <?php foreach ($arr_gender as $key_gender => $val_gender):
                if($key_gender==$dt_member['gender']){
                    $selek="selected";
                } else {
                    $selek="";
                }
             ?>
            <option value="<?=$key_gender?>" <?=$selek?>><?=$val_gender?></option>
            <?php endforeach ?>
        </select>
        No Telepon : 
        <input type="text" name="tlp" value= "<?=$dt_member['tlp']?>" class="form-control">

    <input type="submit" name="simpan" value="Ubah Member" class="btn btn-primary">
    </form>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-gtEjrD/SeCtmISkJkNUaaKMoLD0//ElJ19smozuHV6z3Iehds+3Ulb9Bn9Plx0x4" crossorigin="anonymous"></script>
</body>
</html>
