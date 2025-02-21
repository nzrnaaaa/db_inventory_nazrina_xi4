
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
    <h1 >Data Barang Baru</h1>
    <?php
    $id_barang=$_GET['id_barang'];
    include '../../config/koneksi.php';
    $query=mysqli_query($conn, "SELECT * FROM barang WHERE id_barang='$id_barang'");
    $result=mysqli_fetch_array($query);
    ?>
    <form action="proses_edit.php?id_barang=<?php echo $result['id_barang']?>" method="POST" >
 <div class="mb-3">
    <label for="exampleInputPassword1" class="from-label">Nama Barang</label>
    <input type="text" class="form-control" value="<?php echo $result['nama_barang']?>" name="nama_barang" id="exampleInputEmail" aria-describedby="emailHelp">
 </div>
 <div class="mb-3">
    <label for="exampleInputPassword1" class="from-label">ID jenis</label>
    <input type="number" class="form-control" value="<?php echo $result['id_jenis']?>" name="id_jenis" id="exampleInputEmail" aria-describedby="emailHelp">
 </div>
 <div class="mb-3">
    <label for="exampleInputPassword1" class="from-label">harga</label>
    <input type="number" class="form-control" value="<?php echo $result['harga']?>" name="harga" id="exampleInputEmail" aria-describedby="emailHelp">
 </div>
 <div class="mb-3">
    <label for="exampleInputPassword1" class="from-label">stok</label>
    <input type="text" class="form-control" value="<?php echo $result['stok']?>" name="stok" id="exampleInputEmail" aria-describedby="emailHelp">
 </div>
 <div>
<button type="submit" class="btn btn-primary">Submit</button>
 
     </form>
     </div>
</body>
</html>