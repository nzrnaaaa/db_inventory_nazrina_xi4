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
          <a class="nav-link active" aria-current="page" href="../barang">Barang</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="../jenis">jenis barang</a>
        </li>
        </li>
      </ul>
    </div>
  </div>
</nav>
    <div class="container"></div>
    <h1>Data Barang</h1>
   <a href="tambah.php" class="btn btn-info">Tambah data baru</a>
        <table class="table table-striped table-hover">
        <th>No.</th>
            <th>ID Barang </th>
            <th>ID Jenis</th>
            <th>Nama</th>
            <th>Harga</th>
            <th>Stok</th>
            <th>Aksi</th>
         </tr>
         <?php
             include '../../config/koneksi.php';
             $query = mysqli_query($conn, "SELECT * FROM barang");
             $no=1;
             if(mysqli_num_rows($query)){
                echo "";
                while($result=mysqli_fetch_assoc($query)){
                    ?>
                    <tr>
                        <td><?php echo $no ?></td>
                        <td><?php echo $result['id_barang'] ?></td>
                        <td><?php echo $result['id_jenis']?></td>
                        <td><?php echo $result['nama_barang']?></td>
                        <td><?php echo $result['harga']?></td>
                        <td><?php echo $result['stok']?></td>
                        <td>
                            <a href="edit.php?id_barang=<?php echo $result['id_barang']?>" class= "btn btn-warning"><i class="fa-solid fa-fen-to-square"></i>Edit </a>
                            <a href="hapus.php?id_barang=<?php echo $result['id_barang']?>"
                          onclick="return confirm('kamu yakin mau hapus barang ?')"
                          class="btn btn-danger"><i class="fa-solid fa-trash"></i>hapus </a>
                        </td>
                    </tr>
                    <?php
                    $no++;
                }
             } else{
                echo "Data Kosong";
             }
         ?>

       
</body>
</html>