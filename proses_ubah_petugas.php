<?php
if ($_POST) {
    $id_petugas = $_POST['id_petugas'];
    $Nama_Petugas= $_POST['Nama_Petugas'];
    $username = $_POST['username'];
    $level = $_POST['level'];
    if (empty($Nama_Petugas)) {
        echo "<script>alert('nama petugas tidak boleh kosong');location.href='tambah_pegawai.php';</script>";
    } elseif (empty($username)) {
        echo "<script>alert('username tidak boleh kosong');location.href='tambah_pegawai.php';</script>";
    } else {
        include "koneksi.php";
        if (empty($password)) {
            $update = mysqli_query($conn, "update petugas set 
            nama_Petugas='" . $Nama_Petugas . "',username='" . $username . "', level='" . $level. "' where id_petugas= '" . $id_petugas . "' ") or die(mysqli_error($conn));
            if ($update) {
                echo "<script>alert('Sukses update pegawai');location.href='tampil_pegawai.php';</script>";
            } else {
                echo "<script>alert('Gagal update pegawai');location.href='ubah_petugas.php?id_petugas=" . $id_petugas . "';</script>";
            }
        } else {
            $update = mysqli_query($conn, "update petugas set Nama_Petugas='" . $Nama_Petugas . "',username='" . $username . "', password='" . md5($password) . "', level='" . $level . "' where id_petugas = '" . $id_petugas . "'") or die(mysqli_error($conn));
            if ($update) {
                echo "<script>alert('Sukses update pegawai');location.href='tampil_pegawai.php';</script>";
            } else {
                echo "<script>alert('Gagal update pegawai');location.href='ubah_petugas.php?id_petugas=" . $id_petugas . "';</script>";
            }
        }

    }
}

?>
PETUGAS