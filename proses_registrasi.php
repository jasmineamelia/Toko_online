<?php
if($_POST){
    $nama=$_POST['nama'];
    $alamat=$_POST['alamat'];
    $telpon=$_POST['telpon'];
    $username=$_POST['username'];
    $password= $_POST['password'];
    
    if(empty($username)){
        echo "<script>alert('username tidak boleh kosong');location.href='registrasi.php';</script>";
    } elseif(empty($password)){
        echo "<script>alert('password tidak boleh kosong');location.href='registrasi.php';</script>";
    } else {
        include "koneksi.php";
        $insert=mysqli_query($conn,"INSERT INTO `pelanggan` ( `nama`, `alamat`, `telpon`, `username`, `password`) VALUES ('".$nama."','".$alamat."','".$telpon."','".$username."','".md5($password)."')") or die(mysqli_error($conn));
        if($insert){
            echo "<script>alert('Sukses menambahkan Pelanggan');location.href='login.php';</script>";
        } else {
            echo "<script>alert('Gagal menambahkan Pelanggan');location.href='login.php.php';</script>";
        }
    }
}
?>