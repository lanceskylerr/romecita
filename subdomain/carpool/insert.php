<?php
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\SMTP;
use PHPMailer\PHPMailer\Exception;

require 'phpmailer/src/Exception.php';
require 'phpmailer/src/PHPMailer.php';
require 'phpmailer/src/SMTP.php';


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

  $email_exist = "SELECT user_email FROM userstbl WHERE user_email='$email' LIMIT 1";
  $email_exist_run = mysqli_query($conn, $email_exist);
  if (mysqli_num_rows($email_exist_run) > 0) {

    echo "Email already Exists!";
    echo "<a href='registration.php'><br>Proceed back to Registration</a> ";
} else {

  // Insert the user's information into the database
  $sql = "INSERT INTO userstbl (user_role, user_firstname, user_midname, user_lastname, user_contactnum, user_address, user_email, user_password) VALUES ('Passenger','$fname', '$mname', '$lname', '$cn', '$address', '$email', '$password')";

  $mail = new PHPMailer(true);
  // $mail->SMTPDebug = SMTP::DEBUG_OFF; 
  $mail->isSMTP();
  $mail->Host = 'smtp.gmail.com';
  $mail->SMTPAuth = true;

  $mail->Username = 'urobot22@gmail.com';
  $mail->Password = 'rxfxvbnrewknbgoc';
  $mail->SMTPSecure = "tls";
  $mail->Port = 587;
  //Recipients

  $mail->setFrom('urobot22@gmail.com', 'CarpoolApp');
  $mail->addAddress($email);
  $mail->isHTML(true);
  $mail->Subject = 'Email verification';

  $message = "<p><b style='font-size: 30px;'>Carpool App</b><hr><br>Greetings!, <b> $fname! </b>
              The last step for your verification is clicking this link below! Have a Great day! ♥
              <a href='http://localhost/romecita/subdomain/carpool/verify-email.php?email=$email'><br>Verifying Email Address</a>";
  $mail->Body = $message;
  $mail->send();


  if (mysqli_query($conn, $sql)) {
    echo "Registration successful! Please check your email for your verification <br>";
    echo "<a href='index.php'><br>Proceed to Login!</a> ";
  } else {
    echo "Error: " . mysqli_error($conn);
  } 
  // Close the database connection
  mysqli_close($conn);
  // header("Location: ./index.php");
}
}
?>