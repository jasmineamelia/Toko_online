<!DOCTYPE html>
<html>
<head>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous">
    <title>Tambah Pelanggan</title>
</head>
<body>
    <div class="container mt-5">
        <h3>Tambah Pelanggan</h3>
        <form action="proses_registrasi.php" method="post" enctype="multipart/form-data">
            <div class="form-group mb-3">
                <label for="username">Nama</label>
                <input type="text" class="form-control" id="nama" name="nama" placeholder="Masukkan nama" required>
            </div>
            <div class="form-group mb-3">
                <label for="nama_pelanggan">Alamat</label>
                <input type="text" class="form-control" id="alamat" name="alamat" placeholder="Masukkan alamat" required>
            </div>
            <div class="form-group mb-3">
                <label for="telpon">Telpon</label>
                <textarea class="form-control" id="telpon" name="telpon" rows="4" placeholder="Masukkan Nomor Telpon" required></textarea>
            </div>
            <div class="form-group mb-3">
                <label for="telp">username</label>
                <input type="text" class="form-control" id="username" name="username" placeholder="Masukkan username" required>
            </div>
            <div class="form-group mb-3">
                <label for="password">Password</label>
                <input type="password" class="form-control" id="password" name="password" placeholder="Masukkan Password" required>
            </div>
            <div class="form-group form-check mb-3">
                <input type="checkbox" class="form-check-input" id="checkAgreement">
                <label class="form-check-label" for="checkAgreement">Saya setuju dengan syarat dan ketentuan</label>
            </div>
            <button type="submit" class="btn btn-primary">Tambah Pelanggan</button>
        </form>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-gtEjrD/SeCtmISkJkNUaaKMoLD0//ElJ19smozuHV6z3Iehds+3Ulb9Bn9Plx0x4" crossorigin="anonymous"></script>
</body>
</html>