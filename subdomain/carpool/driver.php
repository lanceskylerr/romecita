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

        .lead {
            color: white;
        }

        .title {
            color: white;

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
                    <a class="nav-link" href="driver.php">Home</a>
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

    <!-- Welcome message and buttons -->
    <div class="container mt-5">
        <h1 class="title">Welcome to Carpool Web, Driver!</h1>
        <p class="lead">Select an Option</p>
        <div class="row mt-5">
            <div class="col-md-2">
                <a href="regcardriver.php" class="btn btn-lg btn-success btn-block">Register Car</a>
            </div>
            <div class="col-md-3">
                <a href="registeredcardriver.php" class="btn btn-lg btn-success btn-block">Registered Car</a>
            </div>
            <div class="col-mt-4">
                <a href="#" class="btn btn-lg btn-success btn-block">Registration Car Status</a>
            </div>
            <div class="col-md-4">
                <a href="#" class="btn btn-lg btn-success btn-block">Edit Profile</a>
            </div>
        </div>
    </div>

    <!-- Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.3/dist/umd/popper
  .min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/js/bootstrap
  .min.js"></script>
</body>

</html>