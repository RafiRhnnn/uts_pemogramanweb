<?php
require '../koneksi.php';
require 'pesan.php';
?>

<!DOCTYPE html>
<html lang="en">

<head>
  <!-- Required meta tags -->
  <meta charset="utf-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1" />

  <!-- Bootstrap CSS -->
  <link
    href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css"
    rel="stylesheet"
    integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC"
    crossorigin="anonymous" />

  <link rel="stylesheet" href="../style/dashboard.css" />
  <title>M RAFI RAIHAN</title>
</head>



<body id="home">
  <!-- navbar start-->
  <nav class="navbar navbar-expand-lg navbar-dark shadow-sm fixed-top">
    <div class="container">
      <h1 class="text-light fs-5 text fw-normal">Selamat Datang <?php echo htmlspecialchars($username); ?>!</h1>
      <button
        class="navbar-toggler"
        type="button"
        data-bs-toggle="collapse"
        data-bs-target="#navbarNav"
        aria-controls="navbarNav"
        aria-expanded="false"
        aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarNav">
        <ul class="navbar-nav ms-auto">
          <li class="nav-item">
            <a class="nav-link active" aria-current="page" href="#home">Home</a>
          </li>
          <li class="nav-item">
            <a class="nav-link active" href="#about">About</a>
          </li>
          <li class="nav-item">
            <a class="nav-link active" href="#galery">Galerry</a>
          </li>
          <li class="nav-item">
            <a class="nav-link active" href="#contact">Contact</a>
          </li>
          <li class="nav-item d-flex justify-content-center">
            <a href="../loginregis/login.php" class="nav-link active mb-2">
              <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-box-arrow-right" viewBox="0 0 16 16">
                <path fill-rule="evenodd" d="M10 12.5a.5.5 0 0 1-.5.5h-8a.5.5 0 0 1-.5-.5v-9a.5.5 0 0 1 .5-.5h8a.5.5 0 0 1 .5.5v2a.5.5 0 0 0 1 0v-2A1.5 1.5 0 0 0 9.5 2h-8A1.5 1.5 0 0 0 0 3.5v9A1.5 1.5 0 0 0 1.5 14h8a1.5 1.5 0 0 0 1.5-1.5v-2a.5.5 0 0 0-1 0z" />
                <path fill-rule="evenodd" d="M15.854 8.354a.5.5 0 0 0 0-.708l-3-3a.5.5 0 0 0-.708.708L14.293 7.5H5.5a.5.5 0 0 0 0 1h8.793l-2.147 2.146a.5.5 0 0 0 .708.708z" />
              </svg>
            </a>
          </li>
        </ul>
      </div>
    </div>
  </nav>
  <!-- navbar end -->

  <!-- jumbotron -->
  <section class="jumbotron text-center">
    <img
      src="../image/RafiRaihan.jpeg"
      alt="RafiRaihan"
      width="200"
      class="imagesaya rounded-circle img-thumbnail" />
    <h1 class="display-4">M RAFI RAIHAN</h1>
    <p class="lead">Mahasiswa Universitas Teknologi Bandung</p>
  </section>
  <!-- akhir jumbotron -->

  <!-- about -->
  <section id="about">
    <div class="container">
      <div class="row text-center mb-3">
        <div class="about col">
          <h2>About Me</h2>
        </div>
      </div>
      <div class="row justify-content-center fs-5 text-center">
        <div class="col-md-4">
          <p>
            Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quo itaque veniam aliquam saepe nulla, voluptatum sint possimus. Ut temporibus pariatur repellendus sed! Ab culpa ullam vitae magni? Tempore, accusamus corrupti.
          </p>
        </div>
        <div class="col-md-4">
          <p>
            Lorem ipsum dolor sit amet consectetur, adipisicing elit.
            Laudantium rerum ad sit cumque, ipsam labore nobis quisquam saepe
            ullam error, beatae ratione aliquid quas sequi?
          </p>
        </div>
      </div>
    </div>
  </section>
  <!-- about selesai -->

  <!-- galery -->
  <section id="galery">
    <div class="container">
      <div class="row text-center mb-3">
        <div class="col">
          <h2>My Galery</h2>
        </div>
      </div>
      <div class="row justify-content-center">
        <div class="col-md-4 mb-3">
          <div class="card">
            <img
              src="../image/ms1.JPG"
              class="card-img-top" />
            <div class="card-body">
              <p class="card-text">
                Some quick example text to build on the card title and make up
                the bulk of the card's content.
              </p>
            </div>
          </div>
        </div>
        <div class="col-md-4 mb-3">
          <div class="card">
            <img
              src="../image/ms2.JPG"
              class="card-img-top" />
            <div class="card-body">
              <p class="card-text">
                Some quick example text to build on the card title and make up
                the bulk of the card's content.
              </p>
            </div>
          </div>
        </div>
        <div class="col-md-4 mb-3">
          <div class="card">
            <img src="../image/ms3.JPG" class="card-img-top"/>
            <div class="card-body">
              <p class="card-text">
                Some quick example text to build on the card title and make up
                the bulk of the card's content.
              </p>
            </div>
          </div>
        </div>
      </div>
      <div class="row justify-content-center">
        <div class="col-md-4 mb-3">
          <div class="card">
            <img
              src="../image/ms4.JPG"
              class="card-img-top" />
            <div class="card-body">
              <p class="card-text">
                Some quick example text to build on the card title and make up
                the bulk of the card's content.
              </p>
            </div>
          </div>
        </div>
        <div class="col-md-4 mb-3">
          <div class="card">
            <img
              src="../image/ms5.JPG"
              class="card-img-top" />
            <div class="card-body">
              <p class="card-text">
                Some quick example text to build on the card title and make up
                the bulk of the card's content.
              </p>
            </div>
          </div>
        </div>
        <div class="col-md-4 mb-3">
          <div class="card">
            <img src="../image/ms6.JPG" class="card-img-top" />
            <div class="card-body">
              <p class="card-text">
                Some quick example text to build on the card title and make up
                the bulk of the card's content.
              </p>
            </div>
          </div>
        </div>
      </div>
      <div class="row justify-content-center">
        <div class="col-md-4 mb-3">
          <div class="card">
            <img
              src="../image/ms7.JPG"
              class="card-img-top" />
            <div class="card-body">
              <p class="card-text">
                Some quick example text to build on the card title and make up
                the bulk of the card's content.
              </p>
            </div>
          </div>
        </div>
        <div class="col-md-4 mb-3">
          <div class="card">
            <img
              src="../image/ms8.JPG"
              class="card-img-top" />
            <div class="card-body">
              <p class="card-text">
                Some quick example text to build on the card title and make up
                the bulk of the card's content.
              </p>
            </div>
          </div>
        </div>
        <div class="col-md-4 mb-3">
          <div class="card">
            <img src="../image/saya.jpg" class="card-img-top" />
            <div class="card-body">
              <p class="card-text">
                Some quick example text to build on the card title and make up
                the bulk of the card's content.
              </p>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
  <!-- galery selesai -->

  <!-- kontak mulai -->
  <section id="contact">
    <div class="container">
      <div class="row text-center mb-3">
        <div class="col">
          <h2>Contact Me</h2>
        </div>
      </div>
      <div class="row justify-content-center">
        <div class="kontak col-md-7">
          <form method="POST">
            <div class="mb-3">
              <label for="name" class="form-label">Nama Lengkap</label>
              <input type="text" class="form-control" id="name" value="<?php echo htmlspecialchars($username); ?>" readonly />
            </div>
            <div class="mb-3">
              <label for="exampleInputEmail1" class="form-label">Email</label>
              <input type="email" class="form-control" id="email" value="<?php echo htmlspecialchars($email); ?>" readonly />
            </div>
            <div class="mb-3">
              <label for="pesan" class="form-label">Pesan</label>
              <textarea class="form-control" id="pesan" name="pesan" rows="3" required></textarea>
            </div>
            <button type="submit" class="btn">Kirim</button>
            <?php if ($message):?>
            <?php endif; ?>
          </form>
        </div>
      </div>
    </div>
  </section>

  <!-- kontak selesai -->

  <!-- footer mulai -->
  <footer class="text-white text-center pb-3">
    <p>
      &copy;Copyright by
      <a
        href="https://github.com/RafiRhnnn"
        class="cpr fw-bold">22552011233_Muhammad Rafi Raihan_TIF 22 CID</a>
    </p>
  </footer>
  <!-- footer selesai -->
  <script
    src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM"
    crossorigin="anonymous">
  </script>
</body>

</html>