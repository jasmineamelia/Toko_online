<?php
include "koneksi.php";

$id_produk = $_POST['id_produk'];
$nama_produk = $_POST['nama_produk'];
$deskripsi = $_POST['deskripsi']; // Perbaikan nama variabel
$harga = $_POST['harga'];

// Jika ada file foto yang diunggah
if ($_FILES['foto']['name']) {
    $foto = $_FILES['foto']['name'];
    $tmp_foto = $_FILES['foto']['tmp_name'];

    // Tentukan folder tempat menyimpan foto
    $folder = "assets/foto/";

    // Upload file foto ke folder yang ditentukan
    if (move_uploaded_file($tmp_foto, $folder . $foto)) {
        // Update dengan foto baru
        $update = mysqli_query($conn, "UPDATE produk SET 
            nama_produk = '$nama_produk', 
            deskripsi = '$deskripsi',
            harga = '$harga', 
            foto = '$foto' 
            WHERE id_produk = '$id_produk'");
    } else {
        echo "<script>alert('Gagal mengunggah foto');location.href='ubah_produk.php?id_produk=$id_produk';</script>";
        exit();
    }
} else {
    // Update tanpa mengubah foto
    $update = mysqli_query($conn, "UPDATE produk SET 
        nama_produk = '$nama_produk', 
        deskripsi = '$deskripsi', 
        harga = '$harga' 
        WHERE id_produk = '$id_produk'");
}

// Cek hasil query
if ($update) {
    echo "<script>alert('Berhasil mengubah data produk');location.href='produk.php';</script>";
} else {
    echo "<script>alert('Gagal mengubah data produk');location.href='ubah_produk.php?id_produk=$id_produk';</script>";
}
?>
