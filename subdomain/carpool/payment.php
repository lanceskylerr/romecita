<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Carpool Web</title>
  <link rel="icon" type="image/x-icon" href="img_avatar2.png">



  <!-- Bootstrap CSS -->
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
  <style>
    body {
      background-image: linear-gradient(74.6deg, rgba(175, 235, 156, 1) 19.7%, rgba(116, 170, 75, 1) 92%);
    }

    /* <!-- Custom CSS --> */
    <style>body {
      background-color: #f5f5f5;
    }

    .container {
      margin-top: 50px;
    }

    .initialLogin {
      position: absolute;
      top: 45%;
      left: 45%;
    }
  </style>
</head>

<body>

  <!-- Navigation bar -->
  <nav class="navbar navbar-expand-lg navbar-light bg-white">
    <a class="navbar-brand" href="passenger.php">Carpool Web</a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav"
      aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarNav">
      <ul class="navbar-nav ml-auto">
        <li class="nav-item active">
          <a class="nav-link" href="passenger.php">Home</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#">About</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="index.php">Log Out</a>
        </li>
      </ul>
    </div>
  </nav>

  <div class="initialLogin">
    <!-- <td><a href="passenger.php" name="list" class="btn uppercase btn-outline-light">BACK</a></td> -->
    <td><a href="cashin.php" name="list" class="btn uppercase btn-outline-light">CASH IN</a></td>
    <!-- <td><a href="cashout.php" name="list" class="btn uppercase btn-outline-light">CASH OUT</a></td> -->
  </div>



  <!-- Bootstrap JS -->
  <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.3/dist/umd/popper
  .min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/js/bootstrap
  .min.js"></script>
</body>

</html>