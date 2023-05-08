<?php
// Check if the form has been submitted
if (isset($_POST['submitcar'])) {

include 'connect.php';
    // // Connect to the database
    // $host = "localhost";
    // $username = "root";
    // $password = "";
    // $database = "carpooldtbs";

    // $conn = mysqli_connect($host, $username, $password, $database);

    // // Check if the connection was successful
    // if (!$conn) {
    //     die("Connection failed: " . mysqli_connect_error());
    // }


    $cmaker = $_POST['carmaker'];
    $cmodel = $_POST['carmodel'];
    $ctype = $_POST['cartype'];
    $plateno = $_POST['plateno'];




    // Insert the user's information into the database
    $sql = "INSERT INTO cartbl (car_maker, car_model, car_type, car_plateno, car_confirmation) VALUES ('$cmaker', '$cmodel', '$ctype', '$plateno', ' ')";

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