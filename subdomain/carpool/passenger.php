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
<?php
session_start();
$id = $_SESSION['user_id'];
include 'connect.php';
$sql = "SELECT * FROM userstbl WHERE user_id = '$id'";
$query = $conn->query($sql);
$row = $query->fetch_array();
?>

<body>

    <!-- Navigation bar -->
    <nav class="navbar navbar-expand-lg navbar-light bg-white">
        <a class="navbar-brand" href="#">Carpool Web</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav"
            aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav ml-auto">
                <li class="nav-item active">
                    <a class="nav-link" href="passenger.php?user=<?php echo $user_id ?>">Home</a>
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
        <?php echo "<h1 class='title'>Welcome to Carpool Web, " . $row['user_firstname'] . "!</h1>" ?>
        <p class="lead">Select an Option</p>
        <div class="row mt-5">
            <div class="col-md-3 mb-4">
                <a href="regcar.php" class="btn btn-lg btn-success btn-block">Register my car</a>
            </div>
            <div class="col-md-3 mb-4">
                <a href="regcarstatus.php" class="btn btn-lg btn-success btn-block">Registration Status</a>
            </div>
            <div class="col-md-3 mb-4">
                <a href="editprofile.php" class="btn btn-lg btn-success btn-block">User Profile</a>
            </div>
            <div class="col-md-3 mb-4">
                <a href="payment.php" class="btn btn-lg btn-success btn-block">Cash In</a>
            </div>
            <div class="col-md-3 mb-4">
                <a href="paymentstatus.php" class="btn btn-lg btn-success btn-block">Cash In Status</a>
            </div>
        </div>
    </div>

    <!-- Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.3/dist/umd/popper.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/js/bootstrap.min.js"></script>
</body>

</html>
