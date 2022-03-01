<?php 

session_start();
    if($_SESSION['status_login']!==true){
        header('location: login.php');
    }
?>

<!DOCTYPE html>
<html>
<head>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous">
    <title></title>
</head>

<body>
  <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
    <div class="container-fluid">
      <?php
      if($_SESSION['role'] == 'admin'){
      ?>
      <a class="navbar-brand" href="tampil_users.php">List Users</a>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <?php } ?>
      <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav me-auto mb-2 mb-lg-0">
          <li>
            <a class="nav-link" aria-current="page" href="tampil_transaksi.php">Transaksi</a>
          </li>
         <li class="nav-item">
            <a class="nav-link" href="tampil_paket.php">Paket</a>
          </li>
       <?php
          //User
          if($_SESSION['role']=="admin"){
        ?>
          <!-- <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
              User
            </a>
            <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
              <li><a class="dropdown-item" href="register.php">Register</a></li>
              <li><hr class="dropdown-divider"></li>
              <li><a class="dropdown-item" href="tampil_user.php">Tampil</a></li>
            </ul>
          </li> -->
        
          <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle" href="" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
              Member
            </a>
            <ul class="dropdown-menu" aria-labelledby="navbarDropdown" >
              <li><a class="dropdown-item" href="tambah_member.php">Add Member</a></li>
              <li><hr class="dropdown-divider"></li>
              <li><a class="dropdown-item" href="tampil_member.php">Tampil</a></li>
            </ul>
          </li>
          <?php
          } 
          ?>
          
          <!--Logout-->
          <li class="nav-item">
            <a class="nav-link" href="logout.php">Logout</a>
          </li>

        </ul>
        
      </div>
    </div>
  </nav>
  <div class="container bg-light rounded" style="margin-top:10px">
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
</body>
        </html>