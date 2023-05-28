<?php
// Check if the form has been submitted
if (isset($_POST['submitcashout'])) {


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


    $cashoutgcashno = $_POST['cashout-gcashno'];
    $cashout = $_POST['cashout'];
    $refno = $_POST['cashout_refno'];




    // Insert the user's information into the database
    $sql = "INSERT INTO transactiontbl (transaction_type, gcash_no, cashout_amount, ref_no) VALUES ('Cash Out''$cashoutgcashno', '$cashout' '$refno)";

    // if (mysqli_query($conn, $sql)) {
    //     echo "Registration successful!";
    // } else {
    //     echo "Error: " . mysqli_error($conn);
    // }


    // Close the database connection
    mysqli_close($conn);
    header("Location: ./passenger.php");
}
?>