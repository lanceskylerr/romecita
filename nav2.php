<!DOCTYPE html>
<html lang="en">

<head>
  <!-- Required meta tags -->
  <meta charset="utf-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
  <!-- Bootstrap CSS -->
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css"
    integrity="<KEY>" crossorigin="anonymous">

  <style>
    /* Custom styles */
    body {
      background: url('images/resort.jpg');
      background-size: cover;
      background-position: center;
    }

    .custom-navbar {
      background-color: #efeacd;
    }

    .custom-navbar .nav-link {
      color: #2f2926;
    }

    footer {
      background-color: #f8f9fa;
      padding: 10px 0;
    }

    footer p,
    footer small {
      color: #6c757d;
    }

    footer .list-group-item {
      background-color: transparent;
      border: none;
      padding-left: 0;
    }

    /* Custom carousel styles */
    .carousel {
      width: 100%;
      max-width: 400px; /* Adjust the width as needed */
      margin: 0 auto;
    }

    .carousel img {
      max-height: 200px; /* Adjust the height as needed */
    }
  </style>

  <title>Hello, world!</title>
</head>

<body>
  <nav class="navbar navbar-expand-lg navbar-dark custom-navbar">
    <a class="navbar-brand text-white font-weight-bold" href="#">RomeCita</a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavAltMarkup"
      aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
      <div class="navbar-nav ml-auto">
        <a class="nav-item nav-link active text-white" href="#">Home <span class="sr-only">(current)</span></a>
        <a class="nav-item nav-link text-white" href="#">Features</a>
        <a class="nav-item nav-link text-white" href="#">Pricing</a>
        <li role="separator" class="divider d-none d-md-block"></li>
      </div>
    </div>
  </nav>

  <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
    <ol class="carousel-indicators">
      <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
      <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
      <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
    </ol>
    <div class="carousel-inner">
      <div class="carousel-item active">
        <img src="images/image1.png" class="d-block w-100" alt="Image 1">
      </div>
      <div class="carousel-item">
        <img src="images/image2.png" class="d-block w-100" alt="Image 2">
      </div>
      <div class="carousel-item">
        <img src="images/image3.png" class="d-block w-100" alt="Image 3">
      </div>
    </div>
    <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
      <span class="carousel-control-prev-icon" aria-hidden="true"></span>
      <span class="sr-only">Previous</span>
    </a>
    <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
      <span class="carousel-control-next-icon" aria-hidden="true"></span>
      <span class="sr-only">Next</span>
    </a>
  </div>

  <footer class="page-footer fixed-bottom py-2">
    <div class="container">
      <div class="row align-items-center justify-content-between">
        <div class="col-md-4 col-12">
          <small class="d-block m-3">© 2020 - All rights reserved</small>
        </div>
        <div class="col-md-4 col-12">
          <blockquote class="blockquote border-left p-3 shadow">
            <p class="mb-0">"We'll provide your needs!"</p>
            <footer class="blockquote-footer">RomeCita <cite title="Source Title">Garden Resort</cite></footer>
          </blockquote>
        </div>
      </div>
    </div>
  </footer>

  <!-- Bootstrap JS -->
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"
    integrity="<KEY>" crossorigin="anonymous"></script>
</body>

</html>
