<!DOCTYPE HTML>
<html>

<head>
  <title>Car Registration Form</title>
  <style>
    body {
      font-family: Arial, sans-serif;
      background-color: #f2f2f2;
    }

    form {
      width: 400px;
      margin: 0 auto;
      background-color: #fff;
      padding: 20px;
      border-radius: 5px;
      box-shadow: 0px 0px 10px #ccc;
    }

    table {
      width: 100%;
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
  <form action="insertcardriver.php" method="POST">
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

        <td><a href="passenger.php" name="list" class="btn uppercase btn-outline-light">BACK</a></td>
        <td><input type="submit" value="Submit" name="submitcardriver"></td>