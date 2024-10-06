<!DOCTYPE html>
<html>
<head>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
    <title>Sign Up</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <style>
        body {
            background-image: url('https://img.brdcdn.com/img/1000/vn21denvolxxvor/ZA0M68QOQQc6IpJ6hIBnbXz.jpg');
            /* Ganti dengan URL gambar latar belakang perpustakaan */
            background-size: cover;
            background-repeat: no-repeat;
            background-attachment: fixed;
        }
        </style>
<body>
<!-- Section: Design Block -->
<section class="">
  <!-- Jumbotron -->
  <div class="px-4 py-5 px-md-5 text-center text-lg-start" style="background-color: hsl(0, 0%, 96%)">
    <div class="container">
      <div class="row gx-lg-5 align-items-center">
        <div class="col-lg-6 mb-5 mb-lg-0">
          <h1 class="my-5 display-3 fw-bold ls-tight">
          AYO BELI BATIK NUSANTARA <br />
            <span class="text-primary">LESTARIKAN BUSAYA INDONESIA </span>
          </h1>
          <p style="color: hsl(217, 10%, 50.8%)">
          Batik adalah cinta pada tradisi dan kebanggaan menjadi bagian dari Indonesia.
        Batik merupakan jalinan karya yang memeluk seluruh rasa cinta pada tanah air.

        </div>

        <div class="col-lg-6 mb-5 mb-lg-0">
          <div class="card">
            <div class="card-body py-5 px-md-5">
              <!-- Corrected Form Starts Here -->
              <form action="proses_login_pelanggan.php" method="post">
                <!-- Name input -->
               
                <!-- Username input -->
                <div class="form-outline mb-4">
                  <input type="text" name="username" class="form-control" required />
                  <label class="form-label" >Username</label>
                </div>

                <!-- Password input -->
                <div class="form-outline mb-4">
                  <input type="password" name="password" class="form-control" required />
                  <label class="form-label">Password</label>
                </div>

                <!-- Submit button -->
                <button type="submit" class="btn btn-primary btn-block mb-4">
                  Log in
                </button>
                  </button>
            
                <p class="text-center">Belum punya akun? <a href="tambah_pelanggan.php">Registrasi</a></p>
              </form>
              <!-- Form Ends Here -->
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
  <!-- Jumbotron -->
</section>
<!-- Section: Design Block -->

</body>
</html>