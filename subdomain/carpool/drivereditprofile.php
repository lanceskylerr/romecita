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
    </style>
    <style>
        body {
            background-color: #f5f5f5;
        }

        .container {
            margin-top: 50px;
        }
    </style>
</head>

<body>
    <!-- Navigation bar -->
    <nav class="navbar navbar-expand-lg navbar-light bg-white">
        <a class="navbar-brand" href="driver.php">Carpool Web Driver Panel</a>
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

    <!-- Edit Profile -->
    <div class="container mt-5">
        <h2>User Profile</h2>
        <table class="table mt-3">
            <tbody>
                <?php
                session_start();
                $id = $_SESSION['user_id'];
                include 'connect.php';
                $sql = "SELECT user_firstname, user_midname, user_lastname, user_contactnum, user_email, user_password FROM userstbl WHERE user_id = '$id'";
                $query = $conn->query($sql);
                $row = $query->fetch_assoc();
                echo "<tr>";
                echo "<th>Full Name</th>";
                echo "<td>" . $row['user_firstname'] . " " . $row['user_midname'] . " " . $row['user_lastname'] . "</td>";
                echo "</tr>";
                echo "<tr>";
                echo "<th>Contact Number</th>";
                echo "<td>" . $row['user_contactnum'] . "</td>";
                echo "</tr>";
                echo "<tr>";
                echo "<th>Email</th>";
                echo "<td>" . $row['user_email'] . "</td>";
                echo "</tr>";
                echo "<tr>";
                echo "<th>Password</th>";
                echo "<td>" . $row['user_password'] . "</td>";
                echo "</tr>";
                ?>
            </tbody>
        </table>
        <a href='driver.php' class="btn btn-primary">Back</a>
        <a href="driveredit_profile.php" class="btn btn-primary">Edit Profile</a>
    </div>

    <!-- Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.3/dist/umd/popper.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/js/bootstrap.min.js"></script>
</body>

</html>