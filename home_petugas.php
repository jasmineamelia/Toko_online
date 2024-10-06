<?php
include "header_petugas.php";
?>
<!DOCTYPE html>
<html>

<head>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <style>
        body {
            background-image: url('https://www.kantorkita.co.id/blog/wp-content/uploads/2022/10/Sudah-Waktunya-Beralih-Ke-Sistem-Perkantoran-Modern.jpg');
            background-size: cover;
            background-repeat: no-repeat;
            background-attachment: fixed;
        }

        .welcome-container {
           
            padding: 35px;
            border-radius: 15px;
            box-shadow: 0px 0px 15px 0px #000;
            margin-top: 50px;
        }

       

        
    </style>
</head>

<body>
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8 welcome-container text-center">
                <h2 class="welcome-title">SELAMAT DATANG‼️ <?= $_SESSION['Nama_Petugas'] ?> sebagai  <?= $_SESSION['level'] ?> di Website TOKO BATIK NUSANTARA </h1>
        </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz"
        crossorigin="anonymous"></script>
</body>

</html>
<?php
?>