<?php
session_start();
include 'connect.php';

if (isset($_POST['uname']) && isset($_POST['pw'])) {

    $email = $_POST['uname'];
    $password = $_POST['pw'];

    $sql = "SELECT * FROM userstbl WHERE user_email = '$email' AND user_password = '$password'";
    $result = mysqli_query($conn, $sql);

    if (mysqli_num_rows($result) == 1) {
        // Login success
        $row = mysqli_fetch_assoc($result);
        $_SESSION['user_id'] = $row['user_id'];
        $_SESSION['user_role'] = $row['user_role'];
        $_SESSION['user_firstname'] = $row['user_firstname'];
        $_SESSION['user_midname'] = $row['user_midname'];
        $_SESSION['user_lastname'] = $row['user_lastname'];
        $_SESSION['user_contactnum'] = $row['user_contactnum'];
        $_SESSION['user_address'] = $row['user_address'];
        $_SESSION['user_email'] = $row['user_email'];
        $_SESSION['user_password'] = $row['user_password'];


        if ($_SESSION['user_role'] == 'Passenger') {
            header("Location: passenger.php?user=".$row['user_id']);
            exit();
        } else if ($_SESSION['user_role'] == 'Driver') {
            header("Location: driver.php?user=".$row['user_id']);
            exit();
        } else if ($_SESSION['user_role'] == 'Admin') {
            header("Location: admin.php?user=".$row['user_id']);
            exit();
        }

        header("Location: index.php"); // Redirect to home page
    } else {
        // Login failed, show alert message
        echo "<script>alert('Invalid email or password.')</script>";
        echo "<script>window.location.href='login.php';</script>";
    }
}
?>