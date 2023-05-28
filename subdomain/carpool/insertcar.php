<?php
// Check if the form has been submitted
session_start();
$user_id = $_SESSION['user_id'];
if (isset($_POST['submitcar'])) {


    // Connect to the database
    $host = "localhost";
    $username = "root";
    $password = "";
    $database = "carpooldtbs";

    $conn = mysqli_connect($host, $username, $password, $database);

    // Check if the connection was successful
    if (!$conn) {
        die("Connection failed: " . mysqli_connect_error());
    }


    $cmaker = $_POST['carmaker'];
    $cmodel = $_POST['carmodel'];
    $ctype = $_POST['cartype'];
    $plateno = $_POST['plateno'];
    $orcr = $_POST['orcr'];
    $license = $_POST['driverslicense'];


    // Insert the user's information into the database
    $sql = "INSERT INTO cartbl (car_maker, car_model, car_type, car_plateno, car_orcr, car_license, car_confirmation, user_id) VALUES ('$cmaker', '$cmodel', '$ctype', '$plateno','$orcr', '$license', 'Pending', '$user_id')";

    $query = "UPDATE userstbl SET user_balance = '40' WHERE user_id = $user_id";
    
    if (mysqli_query($conn, $sql)) {
        echo "Registration successful!";
    } else {
        echo "Error: " . mysqli_error($conn);
    }


    // Close the database connection
    mysqli_close($conn);
    header("Location: ./passenger.php");
}
?>