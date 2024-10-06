<!DOCTYPE html>
<html>

<head>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous">
    <title>UBAH Petugas</title>
</head>

<body>
    <?php
    include "koneksi.php";
    $qry_get_petugas = mysqli_query($conn, "select * from petugas where id_petugas = '" . $_GET['id_petugas'] . "'");
    $dt_petugas = mysqli_fetch_array($qry_get_petugas);
    ?>
    <h3>Tambah Petugas</h3>
    <form action="proses_ubah_petugas.php" method="post">
        <input type="hidden" name="id_siswa" value="<?= $dt_petugas['id_petugas'] ?>" />
        Nama Petugas :
        <input type="text" name="Nama_Petugas" value="<?= $dt_petugas['Nama_Petugas'] ?>" class="form-control">
        username :
        <input type="text" name="username" value="<?= $dt_petugas['Nama_Petugas'] ?>" class="form-control">
        Password :
        <input type="password" name="password" value="" class="form-control">
        <br>
                                        <div class="col-md-3 ps-5">

                                            <h6 class="mb-0">Pilih Level</h6>

                                        </div>
                                        <div class="col-md-9 pe-5">
                                            <select id="level" name="level" class="form-control">
                                                <option>Pilih Level Anda</option>
                                                <option value="Admin">Admin</option>
                                                <option value="Petugas">Petugas</option>
                                            </select>
                                        </div>
                                        <input type="submit" name="simpan" value="Ubah petugas" class="btn btn-primary">
    </form>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-gtEjrD/SeCtmISkJkNUaaKMoLD0//ElJ19smozuHV6z3Iehds+3Ulb9Bn9Plx0x4"
        crossorigin="anonymous"></script>
</body>

</html>