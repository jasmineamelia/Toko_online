<?php 
include "header_petugas.php";
?>
<!DOCTYPE html>
<html>
<head>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous">
    
    <style>
    
        .card-title {
            font-family: 'Georgia', serif;
            color: #2c3e50;
        }
        .card-text {
            font-family: 'Arial', sans-serif;
            color: #34495e;
        }
        .btn-primary {
            background-color: #2c3e50;
            border-color: #2c3e50;
        }
        .btn-primary:hover {
            background-color: #1a252f;
            border-color: #1a252f;
        }
        .btn-danger {
            background-color: #e74c3c;
            border-color: #e74c3c;
        }
        .btn-danger:hover {
            background-color: #c0392b;
            border-color: #c0392b;
        }
        .btn-success {
            background-color: #27ae60;
            border-color: #27ae60;
        }
        .btn-success:hover {
            background-color: #1e8449;
            border-color: #1e8449;
        }
        .btn-back {
            background-color: #3498db;
            border-color: #3498db;
        }
        .btn-back:hover {
            background-color: #2980b9;
            border-color: #2980b9;
        }
        .text-left {                                                                                                                 
            margin-top: 20px;
        }
    </style>
</head>
<body>
    <div class="container">
        <h2 class="text-center my-4">Daftar Produk</h2>
        <div class="row">
            <?php 
            include "koneksi.php";
            $qry_produk=mysqli_query($conn,"select * from produk");
            while($dt_produk=mysqli_fetch_array($qry_produk)){
                ?>
                <div class="col-md-3">
                    <div class="card">
                      <img src="assets/foto/<?= $dt_produk['foto_produk']?>" class="card-img-top">
                      <div class="card-body">
                        <h5 class="card-title"><?=$dt_produk['nama_produk']?></h5>
                        <p class="card-text"><?=substr($dt_produk['deskripsi'], 0,20)?></p>
                        <p class="card-text"><?=substr($dt_produk['harga'], 0,20)?></p>
                       
                                <a href="ubah_produk.php?id_produk=<?= $dt_produk['id_produk'] ?>"
                                class="btn btn-success">Ubah</a>
                                <a href="hapus_produk.php?id_produk=<?= $dt_produk['id_produk'] ?>"
                                onclick="return confirm('Apakah anda yakin menghapus data ini?')"
                                class="btn btn-danger">Hapus</a>
                              </td>

                    </td>
                      </div>
                    </div>
                </div>
                <?php
            }
            ?>
        </div>
        <div class="text-left mt-4">
            <a href="tambah_batik.php" class="btn btn-back">Tambah Produk</a>
        </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-gtEjrD/SeCtmISkJkNUaaKMoLD0//ElJ19smozuHV6z3Iehds+3Ulb9Bn9Plx0x4" crossorigin="anonymous"></script>
</body>
</html>
<?php 

?>
