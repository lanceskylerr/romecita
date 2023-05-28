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

        .table thead tr {
            background-color: darkgreen;
            color: white;
        }

        .table-bordered {
            border: 1px solid black;
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


    <!-- Registered Cars Status -->
    <div class="container mt-5">
        <h2 class="title">Registered Cars Status</h2>
        <table class="table table-bordered mt-3">
            <thead>
                <tr>
                    <th>Car Maker</th>
                    <th>Car Model</th>
                    <th>Car Type</th>
                    <th>Car Plate No</th>
                    <th>Status</th>
                </tr>
            </thead>
            <tbody>
                <?php
                $carSql = "SELECT * FROM cartbl WHERE user_id = '$id' AND car_confirmation = 'Pending' OR car_confirmation='Rejected'";
                $carQuery = $conn->query($carSql);
                while ($carRow = $carQuery->fetch_assoc()) {
                    echo "<tr>";
                    echo "<td>" . $carRow['car_maker'] . "</td>";
                    echo "<td>" . $carRow['car_model'] . "</td>";
                    echo "<td>" . $carRow['car_type'] . "</td>";
                    echo "<td>" . $carRow['car_plateno'] . "</td>";
                    echo "<td>" . $carRow['car_confirmation'] . "</td>";
                    echo "</tr>";
                }
                ?>
            </tbody>
        </table>
    </div>
    <div class="container mt-5">
        <div class="row mt-5">
            <div class="col-md-3 mb-4">
                <a href="driver.php" class="btn btn-lg btn-success btn-block">Back</a>
            </div>
        </div>
    </div>

    <!-- Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.3/dist/umd/popper.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/js/bootstrap.min.js"></script>
</body>

</html>
