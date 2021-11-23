<?php
// session_start();

// if(!isset($_SESSION["login"])) {
//     header("Location: login.php");
//     exit;
// }

// ?>


<!DOCTYPE html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />

    <!-- Bootstrap CSS -->
    <link
      href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/css/bootstrap.min.css"
      rel="stylesheet"
      integrity="sha384-KyZXEAg3QhqLMpG8r+8fhAXLRk2vvoC2f3B09zVXn8CA5QIVfZOJ3BCsw2P0p/We"
      crossorigin="anonymous"
    />
    <link
      rel="stylesheet"
      href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.5.0/font/bootstrap-icons.css"
    />
    <link rel="stylesheet" href="css/portfolio.css" />

    <link rel="icon" href="img/is.png" />
    <title>Portfolio</title>
  </head>
  <body>
    <div id="particles-js"></div>
    <nav
      class="navbar navbar-expand-lg navbar-dark"
      style="background-color: #ff5722"
    >
      <div class="container">
        <a class="navbar-brand" href="index">
          <img src="img/logo.png" alt="" width="70" class="my-0" />
        </a>
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
              <a
                class="nav-link active"
                aria-current="page"
                href="home"
                >Home
              </a>
            </li>
            <li class="nav-item">
              <a
                class="nav-link active"
                aria-current="contact"
                href="contact"
                >Contact
              </a>
            </li>
            <li class="nav-item">
              <a
                class="nav-link active"
                aria-current="page"
                href="logout"
                >Logout
              </a>
            </li>
          </ul>
        </div>
      </div>
    </nav>

    <div id="carousel" class="carousel slide carousel-fade" data-bs-ride="carousel">
        <div class="carousel-inner">
            <div class="carousel-item active">
            <img src="exhibition/img/slider/1.jpg" class="d-block w-100" alt="slider1" width="600" height="500">
            </div>
            <div class="carousel-item">
            <img src="exhibition/img/slider/2.jpg" class="d-block w-100" alt="slider2" width="600" height="500">
            </div>
            <div class="carousel-item">
            <img src="exhibition/img/slider/6.jpg" class="d-block w-100" alt="slider3" width="600" height="500">
            </div>
            <div class="carousel-item">
            <img src="activation/img/slider/2.jpg" class="d-block w-100" alt="slider4" width="600" height="500">
            </div>
            <div class="carousel-item">
            <img src="activation/img/slider/3.jpg" class="d-block w-100" alt="slider5" width="600" height="500">
            </div>
            <div class="carousel-item">
            <img src="streaming/img/card/4.jpg" class="d-block w-100" alt="slider6" width="600" height="500">
            </div>
            <div class="carousel-item">
            <img src="streaming/img/card/9.jpg" class="d-block w-100" alt="slider7" width="600" height="500">
            </div>
        </div>
        <button class="carousel-control-prev" type="button" data-bs-target="#carousel" data-bs-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Previous</span>
        </button>
        <button class="carousel-control-next" type="button" data-bs-target="#carousel" data-bs-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Next</span>
        </button>
    </div>
    

    <div class="container">
      <div class="row my-3">
        <h2 class="text-center mt-4 mb-4">Porfolio</h2>
        <div class="col-12 col-md-3 my-3">
          <div class="hovereffect">
            <img src="img/360experience.jpg" alt="360 experience" class="img-fluid" >
            <div class="overlay">
              <h2>360 Experience</h2>
              <a class="info" href="360file">More Detail</a>
            </div>
          </div>
        </div>
        <div class="col-12 col-md-3 my-3">
          <div class="hovereffect">
            <img src="img/streaming1.jpg" alt="Streaming" class="img-fluid" >
            <div class="overlay">
              <h2>Streaming</h2>
              <a class="info" href="streaming">More Detail</a>
            </div>
          </div>
        </div>
        <div class="col-12 col-md-3 my-3">
          <div class="hovereffect">
            <img src="img/activation.jpg" alt="Activation" class="img-fluid" >
            <div class="overlay">
              <h2>Activation</h2>
              <a class="info" href="activation">More Detail</a>
            </div>
          </div>
        </div>
        <div class="col-12 col-md-3 my-3">
          <div class="hovereffect">
            <img src="img/exhibition.jpg" alt="360 experience" class="img-fluid" >
            <div class="overlay">
              <h2>Exhibition</h2>
              <a class="info" href="exhibition">More Detail</a>
            </div>
          </div>
        </div>
      </div>
    </div>

    <footer>
      <p>© 2021 Ideasight, Inc<br>
    </footer>

            
    
    <script
      src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/js/bootstrap.bundle.min.js"
      integrity="sha384-U1DAWAznBHeqEIlVSCgzq+c9gqGAJn5c/t99JyeKa9xxaYpSvHU5awsuZVVFIhvj"
      crossorigin="anonymous"
    ></script>

<script type="text/javascript" src="particles.js"></script>
<!-- <script type="text/javascript" src="app.js"></script> -->
</body>
</html>