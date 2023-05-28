<?php
include 'connect.php'; // Include your database connection file

// Check if the form is submitted
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    // Get the form data
    session_start();
    $id = $_SESSION['user_id'];
    $contactnum = $_POST['contactnum'];
    $email = $_POST['email'];
    $password = $_POST['password'];

    // Update the user's information in the database
    $sql = "UPDATE userstbl SET user_contactnum = '$contactnum', user_email = '$email', user_password = '$password' WHERE user_id = '$id'";
    if ($conn->query($sql) === TRUE) {
        // Redirect to the profile page after successful update
        header("Location: editprofile.php");
        exit();
    } else {
        // Handle the error if the update fails
        echo "Error updating record: " . $conn->error;
    }
}

// Retrieve the user's current information
session_start();
$id = $_SESSION['user_id'];
$sql = "SELECT user_firstname, user_midname, user_lastname, user_contactnum, user_email, user_password FROM userstbl WHERE user_id = '$id'";
$query = $conn->query($sql);
$row = $query->fetch_assoc();
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit Profile</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css"
        integrity="sha384-OgVRvuATP1z7JjHLkuOU7Xw704+h835Lr+6QL9UvYjZE3Ipu6Tp75j7Bh/kR0JKI" crossorigin="anonymous">
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


    <div class="container mt-5">
        <h2>Edit Profile</h2>
        <form method="POST" action="">
            <div class="form-group">
                <label for="contactnum">Contact Number:</label>
                <input type="text" class="form-control" id="contactnum" name="contactnum"
                    value="<?php echo $row['user_contactnum']; ?>" required>
            </div>
            <div class="form-group">
                <label for="email">Email:</label>
                <input type="email" class="form-control" id="email" name="email"
                    value="<?php echo $row['user_email']; ?>" required>
            </div>
            <div class="form-group">
                <label for="password">Password:</label>
                <input type="password" class="form-control" id="password" name="password"
                    value="<?php echo $row['user_password']; ?>" required>
            </div>
            <a href='editprofile.php' class="btn btn-primary">Back</a>
            <button type="submit" class="btn btn-primary">Save Changes</button>
        </form>
    </div>

    <!-- Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.3/dist/umd/popper.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/js/bootstrap.min.js"></script>
</body>

</html>