<?php
#1. membuat koneksi database dengan PHP
include("koneksi.php");

#2. mengambil semua value dari form dan dimasukan ke masing-masing variabel
$nidn= $_POST['NIDN'];
$nama = $_POST['nama'];
$rumpun = $_POST['rumpun'];
$tempat = $_POST['tempat'];
$tanggal = $_POST['tanggal'];
$email = $_POST['email'];


#3. menuliskan query simpan
$simpan = "INSERT INTO  form dosen (NIDN, nama, rumpun, tempat, tanggal, emaiL)
VALUES ('$nidn','$nama','$rumpun','$tempat','$tanggal','$email')";

#4. menjalankan query
mysqli_query($koneksi, $simpan);


?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="css/bootstrap.css">
</head>
<body>
<nav class="navbar navbar-expand-lg bg-body-tertiary">
  <div class="container-fluid">
    <a class="navbar-brand" href="#">Navbar</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav me-auto mb-2 mb-lg-0">
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="#">Home</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#">Link</a>
        </li>
        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
            Dropdown
          </a>
          <ul class="dropdown-menu">
            <li><a class="dropdown-item" href="#">Action</a></li>
            <li><a class="dropdown-item" href="#">Another action</a></li>
            <li><hr class="dropdown-divider"></li>
            <li><a class="dropdown-item" href="#">Something else here</a></li>
          </ul>
        </li>
        <li class="nav-item">
          <a class="nav-link disabled" aria-disabled="true">Disabled</a>
        </li>
      </ul>
      <form class="d-flex" role="search">
        <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
        <button class="btn btn-outline-success" type="submit">Search</button>
      </form>
    </div>
  </div>
</nav>

<div class="container">
    <div class="row mt-5">
        <div class="col-6 m-auto">
        <div class="card">
  <div class="card-header">
    <h4> Form Dosen </h4>
  </div>
  <div class="card-body">
  <table class="table">
  <tbody>
    <tr>
      <td scope="row">NIDN</td>
      <th>: <?=$nidn?> </th> 
</tr>
<tr>
    <td scope="row">Nama Lengkap</td>
    <th>: <?=$nama?> </th>  
</tr>
<tr>
    <td scope="row">Rumpun</td>
    <th>: <?=$rumpun?> </th>
</tr>
<tr>
    <td scope="row">Tempat Lahir</td>
    <th>: <?=$tempat?> </th>
</tr>
<tr>
    <td scope="row">Tanggal Lahir</td>
    <th>: <?=$tanggaL?> </th>
</tr>
<tr>
    <td scope="row">Email</td>
    <th>: <?=$email?> </th>
</tr>
    </th>
</tr>
  <tbody>

</table>
<a href="Quiz1.php" class="btn btn-warning btn-sm">Kembali</a>
  </div>
</div>
</div>


   <script src="js/bootstrap.js"></script> 
   <script src="js/bootstrap.bundle.js"></script>
</body>
</html>