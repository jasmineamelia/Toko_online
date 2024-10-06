<?php
if ($_POST) {
    $Nama_Petugas = $_POST['Nama_Petugas'];
    $username = $_POST['username'];
    $password = $_POST['password'];
    $level = $_POST['level'];

    if (empty($Nama_Petugas)) {
        echo "<script>alert('nama petugas tidak boleh kosong');location.href='tambah_petugas.php';</script>";
    } elseif (empty($username)) {
        echo "<script>alert('Username tidak boleh kosong');location.href='tambah_petugas.php';</script>";
    } elseif (empty($password)) {
        echo "<script>alert('password tidak boleh kosong');location.href='tambah_petugas.php';</script>";
    } else {
        include "koneksi.php";
        $insert = mysqli_query($conn, "INSERT INTO petugas (Nama_Petugas , username , password , level) value ('" . $Nama_Petugas . "','" . $username . "','" . md5($password) . "','" . $level . "')") or die(mysqli_error($conn));
        if ($insert) {
            echo "<script>alert('Sukses menambahkan Pegawai');location.href='login_petugas.php';</script>";
        } else {
            echo "<script>alert('Gagal menambahkan Pegawai');location.href='login_petugas.php';</script>";
        }
    }
}

?>