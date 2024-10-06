<?php
include "header_petugas.php";
?>
<!DOCTYPE html>
<html>

<head>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">

    <title>Tampil Siswa</title>
</head>

<body>
    <h3 align="center">Tampil Pegawai</h3>
    <table class="table table-hover table-striped">
        <thead>
            <tr>
                <th>NO</th>
                <th>NAMA PETUGAS</th>
                <th>USERNAME</th>
                <th>LEVEL</th>
                <th>AKSI</th>
            </tr>
        </thead>
        <tbody>
            <?php
            include "koneksi.php";
            $qry_petugas = mysqli_query($conn, "select * from petugas");
            $no = 0;
            while ($data_petugas = mysqli_fetch_array($qry_petugas)) {
                $no++; ?>
                <tr>
                    <td><?= $no ?></td>
                    <td><?= $data_petugas['Nama_Petugas'] ?></td>
                    <td><?= $data_petugas['username'] ?></td>
                    <td><?= $data_petugas['level'] ?></td>
                    <td>
                        <a href="ubah_petugas.php?id_petugas=<?= $data_petugas['id_petugas'] ?>" class="btn btn-success">Ubah</a> |
                        <a href="hapus_petugas.php?id_petugas=<?= $data_petugas['id_petugas'] ?>"
                            onclick="return confirm('Apakah anda yakin menghapus data ini?')"
                            class="btn btn-danger">Hapus</a>
                    </td>
                </tr>
                <?php
            }
            ?>
        </tbody>
    </table>
    <div class="text-left">
        <a href="tambah_petugas.php" class="btn btn-primary">Tambah Petugas</a>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz"
        crossorigin="anonymous"></script>
</body>

</html>