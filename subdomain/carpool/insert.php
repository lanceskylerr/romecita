<?php
// Check if the form has been submitted
if (isset($_POST['submit'])) {


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

  $fname = $_POST['firstname'];
  $mname = $_POST['middlename'];
  $lname = $_POST['lastname'];
  $email = $_POST['email'];
  $password = $_POST['password'];
  $cn = $_POST['phone'];
  $address = $_POST['address'];



  // Insert the user's information into the database
  $sql = "INSERT INTO userstbl (user_role, user_firstname, user_midname, user_lastname, user_contactnum, user_address, user_email, user_password) VALUES ('Passenger','$fname', '$mname', '$lname', '$cn', '$address', '$email', '$password')";

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