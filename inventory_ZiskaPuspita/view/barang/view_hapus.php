DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css">
    <link rel="view_hapus.php"href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/css/all.min.css">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
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
          <a class="nav-link active" aria-current="page" href="../barang/index.php">barang</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="../jenis/index.php">jenis</a>
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
    <form action="proses_tambah.php" method="post">
        <div class="container">
            <h1>Data barang</h1>
            <?php 
            include '../../config/koneksi.php';
            $id_barang = $GET['id_barang'];
            $query =mysqli_query($conn,"SELECT * FROM barang WHERE id_barang='$id_barang'");
            $result =mysqli_fetch_array(result: $query);
              ?>
            <form action="proses_tambah.php" mehod="post">
                <div class="mb-3">
                    <label for="exampleInputEmail" class="form-label">ID barang</label>
                    <input type="text" class="fprm-control" name="id_barang" 
                    value="<?php echo $result['id_barang']?>" id="exampleInputEmail"
                    aria-describedby="emailHelp">
                </div>
                <div class="mb-3">
                <label for="exampleInputEmail" class="form-label">nama</label>
                    <input type="text" class="fprm-control" name="nama" 
                    value="<?php echo $result['nama']?>" id="exampleInputEmail">
                    
                </div>
                <div class="-3">
                <label for="exampleInputEmail" class="form-label">harga</label>
                    <input type="text" class="fprm-control" name="harga" 
                    value="<?php echo $result['id_jenis']?>" id="exampleInputEmail">
                    
                </div>
                <div class="-3">
                <label for="exampleInputEmail" class="form-label">ID jenis</label>
                    <input type="text" class="fprm-control" name="id_jenis"
                     value="<?php echo $result['harga']?>" id="exampleInputEmail">
                    
                </div>
                <button type="sumbit" class="btn btn-primary"></button>
            </form>
        </div>
    </form>
</body>
</html>