<?php
require '../koneksi.php';
session_start(); // Mulai session

// Ambil data dari session
$username = isset($_SESSION['username']) ? $_SESSION['username'] : '';
$email = isset($_SESSION['email']) ? $_SESSION['email'] : '';
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
      crossorigin="anonymous"
    />

    <link rel="stylesheet" href="../style/styledasboard.css" />
    <title>M RAFI RAIHAN</title>
  </head>

  

  <body id="home">
    <!-- navbar start-->
    <nav class="navbar navbar-expand-lg navbar-dark shadow-sm fixed-top">
      <div class="container">
        <a class="navbar-brand" href="https://www.instagram.com/rafirhnnn/"
          >RAFI RAIHAN</a
        >
        <button
          class="navbar-toggler"
          type="button"
          data-bs-toggle="collapse"
          data-bs-target="#navbarNav"
          aria-controls="navbarNav"
          aria-expanded="false"
          aria-label="Toggle navigation"
        >
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNav">
          <ul class="navbar-nav ms-auto">
            <li class="nav-item">
              <a class="nav-link active" aria-current="page" href="#home"
                >Home</a
              >
            </li>
            <li class="nav-item">
              <a class="nav-link" href="#about">About</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="#project">Project</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="#contact">Contact</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="../loginregis/login.php">Logout</a>
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
        class="imagesaya rounded-circle img-thumbnail"
      />
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

    <!-- project -->
    <section id="project">
      <div class="container">
        <div class="row text-center mb-3">
          <div class="col">
            <h2>My Project</h2>
          </div>
        </div>
        <div class="row justify-content-center">
          <div class="col-md-4 mb-3">
            <div class="card">
              <img
                src="../image/project1.jpeg"
                class="card-img-top"
                alt="project1"
              />
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
                src="../image/project2.jpeg"
                class="card-img-top"
                alt="project1"
              />
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
              <img src="../image/project3.jpg" class="card-img-top" alt="project1" />
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
    <!-- project selesai -->

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
                <form>
                    <div class="mb-3">
                        <label for="name" class="form-label">Nama Lengkap</label>
                        <input
                            type="text"
                            class="form-control"
                            id="name"
                            value="<?php echo htmlspecialchars($username); ?>"  
                            readonly
                        />
                    </div>
                    <div class="mb-3">
                        <label for="exampleInputEmail1" class="form-label">Email</label>
                        <input
                            type="email"
                            class="form-control"
                            id="email"
                            value="<?php echo htmlspecialchars($email); ?>" 
                            readonly  
                        />
                    </div>
                    <div class="mb-3">
                        <label for="pesan" class="form-label">Pesan</label>
                        <textarea class="form-control" id="Pesan" rows="3"></textarea>
                    </div>
                    <button type="submit" class="btn">Kirim</button>
                </form>
            </div>
        </div>
    </div>
</section>


    <!-- kontak selesai -->

    <!-- footer mulai -->
    <footer class="text-white text-center pb-3">
      <p>
        Created by
        <a
          href="https://www.instagram.com/rafirhnnn/"
          class="text-white fw-bold"
          >RafiRaihan</a
        >
      </p>
    </footer>
    <!-- footer selesai -->
    <script
      src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
      integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM"
      crossorigin="anonymous"
    >
    </script>
  </body>
</html>