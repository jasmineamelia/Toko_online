<!DOCTYPE html>
<html>

<head>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous">
    <title>Penambahan Batik</title>
    <style>
        body {
            background-image: url('https://www.example.com/library-background.jpg'); /* Ganti dengan URL gambar latar belakang perpustakaan */
            background-size: cover;
            background-repeat: no-repeat;
            background-attachment: fixed;
        }
        .form-container {
            background: rgba(255, 255, 255, 0.9);
            padding: 20px;
            border-radius: 15px;
            box-shadow: 0px 0px 15px 0px #000;
            margin-top: 20px;
        }
        .btn-primary {
            background-color: #2c3e50;
            border-color: #2c3e50;
        }
        .btn-primary:hover {
            background-color: #1a252f;
            border-color: #1a252f;
        }
    </style>
</head>

<body>
    <div class="container">
        <h3 class="text-center my-4">Tambah Batik</h3>
        <div class="form-container">
            <form action="proses_tambah_batik.php" method="post" enctype="multipart/form-data">
                <div class="mb-3">
                    <label for="namaBuku" class="form-label">Nama Batik:</label>
                    <input type="text" id="nama_produk" name="nama_produk" class="form-control">
                </div>
                <div class="mb-3">
                    <label for="deskripsi" class="form-label">deskripsi:</label>
                    <textarea id="deskripsi" name="deskripsi" rows="4" cols="50" class="form-control" required></textarea>
                </div>
                <div class="mb-3">
                    <label for="pengarang" class="form-label">Harga:</label>
                    <input type="text" id="harga" name="harga" class="form-control">
                </div>
                <div class="mb-3">
                    <label for="fotoBuku" class="form-label">Foto Batik:</label>
                    <input type="file" id="foto_produk" name="foto_produk" class="form-control">
                </div>
                <button type="submit" name="simpan" class="btn btn-primary">Tambah Produk</button>
            </form>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-gtEjrD/SeCtmISkJkNUaaKMoLD0//ElJ19smozuHV6z3Iehds+3Ulb9Bn9Plx0x4"
        crossorigin="anonymous"></script>
</body>

</html>