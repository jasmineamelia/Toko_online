<?php
if ($_POST) {
    $nama = $_POST['nama'];
    $alamat = $_POST['alamat'];
    $telpon = $_POST['telpon'];
    $username = $_POST['username'];
    $password = $_POST['password'];
    $ekstensi = array('png', 'jpg', 'jpeg', 'gif', 'JPG');
    $filename = $_FILES['foto']['name'];
    $ukuran = $_FILES['foto']['size'];
    $ext = pathinfo($filename, PATHINFO_EXTENSION);

    if (!in_array($ext, $ekstensi)) {
        header("location:cobain.php?alert=gagal_ekstensi");
    } else {
        if ($ukuran < 1044070) {
            $xx = $filename;
            move_uploaded_file($_FILES['foto']['tmp_name'], 'assets/foto/' . '' . $filename);
        }

        if (empty($nama)) {
            echo "<script>alert('nama pelanggan tidak boleh kosong');location.href='tambah_pelanggan.php';</script>";
        } elseif (empty($username)) {
            echo "<script>alert('Username tidak boleh kosong');location.href='tambah_pelanggan.php';</script>";
        } elseif (empty($password)) {
            echo "<script>alert('password tidak boleh kosong');location.href='tambah_pelanggan.php';</script>";
        } else {
            include "koneksi.php";
            $insert = mysqli_query($conn, "INSERT INTO pelanggan (nama , alamat, telpon, username , password , foto) value ('" . $nama . "','" . $alamat . "','" . $telpon . "','" . $username . "','" . md5($password) . "','" . $xx . "')") or die(mysqli_error($conn));
            if ($insert) {
                echo "<script>alert('Sukses menambahkan Pelanggan');location.href='login_pelanggan.php';</script>";
            } else {
            
            }
        }
    }
}
?>