<?php
session_start();
require 'conn.php';

function sendemail_verify($fname, $midname, $lastname, $email, $Confirmed)
{
   
    // echo 'Message has been sent';
}
if (isset($_POST['send'])) {

    //GET THE DATA FROM THE FORM
    require 'connect.php';
    $fname = $_POST['firstname'];
    $midname = $_POST['middlename'];
    $lastname = $_POST['lastname'];
    $address = $_POST['address'];
    $contact = $_POST['contactnum'];
    $email = $_POST['email'];
    $password = $_POST['password'];
    $Confirmed = "Registered";

    //Email is Exist
    $email_exist = "SELECT user_email FROM userstbl WHERE user_email='$email' LIMIT 1";
    $email_exist_run = mysqli_query($connection, $email_exist);

    if (mysqli_num_rows($email_exist_run) > 0) {

        echo "Email already Exists!";
        header('Location:registration.php');
    } else {
        // Insert User /
        $query = "INSERT INTO userstbl (user_firstname, user_midname, user_lastname,user_contactnum,user_email,user_address,user_password,user_confirmation) VALUES ('$fname','$midname','$lastname','$address', '$contact','$email','$password', 'Registered')";
        $query_run = mysqli_query($connection, $query);

        if ($query_run) {
            sendemail_verify("$fname", "$lname", "$email", "$Confirmed");
            echo "<center><h1>Check your email for the verification link</h1> </center>";
        } else {
            echo "Registered Failed";
            header('Location:registration.php');
        }

    }

}
?>