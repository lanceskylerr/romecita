<!DOCTYPE HTML>
<html>

<head>
  <title>Car Registration Form</title>
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

    <style>body {
      font-family: Arial, sans-serif;
      background-color: #f2f2f2;
    }

    form {
      width: 600px;
      margin: 0 auto;
      background-color: #fff;
      padding: 20px;
      border-radius: 5px;
      box-shadow: 0px 0px 10px #ccc;
      position: absolute;
      top: 50%;
      left: 50%;
      transform: translate(-50%, -50%);
    }

    table {
      width: 100%;
    }
    .title{
      position: absolute;
      top: 10%;
      left: 510px;
    }
    td {
      padding: 5px;
    }

    input[type="text"],
    input[type="email"],
    input[type="phone"],
    input[type="password"] {
      width: 100%;
      padding: 5px;
      margin-bottom: 10px;
      border-radius: 3px;
      border: 1px solid #ccc;
      box-sizing: border-box;
      font-size: 16px;
    }

    input[type="submit"] {
      background-color: #4CAF50;
      color: #fff;
      border: none;
      padding: 10px 20px;
      border-radius: 3px;
      cursor: pointer;
      font-size: 16px;
    }

    a.btn {
      display: inline-block;
      background-color: #fff;
      color: #4CAF50;
      border: 1px solid #4CAF50;
      padding: 10px 20px;
      border-radius: 3px;
      text-decoration: none;
      font-size: 16px;
      text-transform: uppercase;
      transition: all 0.3s ease;
    }

    a.btn:hover {
      background-color: #4CAF50;
      color: #fff;
      text-decoration: none;
    }

    .uppercase {
      text-transform: uppercase;
    }

    .btn-outline-light {
      background-color: transparent;
      color: #fff;
      transition: all 0.3s ease;
    }

    .btn-outline-light:hover {
      background-color: #fff;
      color: #4CAF50;
      text-decoration: none;
    }
  </style>
</head>

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
          <a class="nav-link" href="passenger.php?user=" <?php $user_id ?>>Home</a>
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
  <h1 class='title'>Register Car</h1>
  <form action="insertcar.php" method="POST">
    <table>
      <tr>
        <td>Car Maker:</td>
        <td><input type="text" name="carmaker" required></td>
      </tr>
      <tr>
        <td>Car Model :</td>
        <td><input type="text" name="carmodel" required></td>
      </tr>
      <tr>
        <td>Car Type :</td>
        <td><input type="text" name="cartype" required></td>
      </tr>
      <tr>
        <td>Plate no :</td>
        <td>
          <input type="text" name="plateno" required>
        </td>
      </tr>
      <tr>
        <td>ORCR:</td>
        <td><input type="file" accept= "/image*" name="orcr" required></td>
      </tr>
      <tr>
      <tr>
      <tr>

        <td><a onclick="history.back()" name="list" class="btn uppercase btn-outline-light">BACK</a></td>
        <td><input type="submit" value="Submit" name="submitcar"></td>