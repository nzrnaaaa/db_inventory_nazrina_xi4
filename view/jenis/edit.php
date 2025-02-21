<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css">
    <title>Inventory</title>
</head>
<body>
<nav class="navbar navbar-expand-lg bg-body-tertiary">
  <div class="container-fluid">
    <a class="navbar-brand" href="#">Navbar</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarNav">
      <ul class="navbar-nav">
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="#">Home</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#">Features</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#">Pricing</a>
        </li>
        <li class="nav-item">
          <a class="nav-link disabled" aria-disabled="true">Disabled</a>
        </li>
      </ul>

    </div>
  </div>
</nav>
<div class="container">
    <h1 >Tambah Jenis Baru</h1>
    <?php
    $id_jenis=$_GET['id_jenis'];
    include '../../config/koneksi.php';
    $query=mysqli_query($conn, "SELECT * FROM jenis_barang WHERE id_jenis='$id_jenis'");
    $result=mysqli_fetch_array($query);
    ?>
    <form action="proses_edit.php?id_jenis=<?php echo $result['id_jenis']?>" method="POST" >
 <div class="mb-3">
     <label for="exampleInputEmail" class="form-label">Nama Jenis2</label>
     <input type="text" class="form-control" value="<?php echo $result['nama_jenis']?>" name="nama_jenis" id="exampleInput" aria-describedby="emailHelp">
     <div id="emailHelp" class ="form-text"></div>
 </div>
 <div>
<button type="submit" class="btn btn-primary">Submit</button>
 
     </form>
     </div>
</body>
</html>