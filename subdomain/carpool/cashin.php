<!DOCTYPE HTML>
<html>

<head>
    <title>Cash In</title>
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <style>
        body {
            background-image: linear-gradient(74.6deg, rgba(175, 235, 156, 1) 19.7%, rgba(116, 170, 75, 1) 92%);
        }

        .lead {
            color: white;
        }

       

        body {
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

        .title {
        
            color: white;
            position: absolute;
            top: 120px;
            left: 680px;
        }

        td {
            padding: 5px;
        }

        input[type="number"],
        input[type="number"] {
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

        .wallet-balance {
            position: absolute;
            top: 20px;
            right: 20px;
            font-size: 14px;
        }

        .form-buttons {
            display: flex;
            justify-content: space-between;
            align-items: center;
        }

        .form-buttons button {
            margin-right: 10px;
        }
    </style>
</head>
<?php

session_start();

if (!isset($_SESSION['user_role']) || ($_SESSION['user_role'] !== 'Passenger' && $_SESSION['user_role'] !== 'Driver')) {
    header('Location: index.php');
    exit();
}

$userID = $_SESSION['user_id'];

require_once 'connect.php';

$query = "SELECT * FROM userstbl WHERE user_id = $userID";
$result = mysqli_query($conn, $query);

if (mysqli_num_rows($result) > 0) {
    $row = mysqli_fetch_assoc($result);
    $uEmail = $row['user_email'];
    $uFname = $row['user_firstname'];
    $uMname = $row['user_midname'];
    $uLname = $row['user_lastname'];
    $uContact = $row['user_contactnum'];
    $uBalance = $row['user_balance'];
} else {
    die("Error: User not found.");
}
mysqli_close($conn);
?>

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
    <h1 class='title'>Cash In</h1>
    <form action="insertcashin.php" method="post">
        <div class="wallet-balance">
            <h5>Balance: <?php echo $uBalance; ?> Tickets</h5>
            
        </div>
        <br>
        
        <div>
            <ul>
                <br>
                    <label for="load">Load Type:</label>
                    <select name="load" id="load">
                        <option value="Cash In">Cash In</option>
                    </select>
                
                <li>
                    <label for="amount">Load Amount:</label>
                    <select name="amount" id="amount">
                        <option value="50">50 Pesos -> 40 Tickets</option>
                        <option value="100">100 Pesos -> 80 Tickets</option>
                        <option value="250">250 Pesos -> 200 Tickets</option>
                        <option value="500">500 Pesos -> 450 Tickets</option>
                    </select>
                </li>
                <li>
                    <label for="num">GCash Number:</label>
                    <input type="number" name="num" required><br><br>
                </li>
            </ul>
        </div>
        <div class="form-buttons">
        <td><a href="payment.php" name="list" class="btn uppercase btn-outline-light">BACK</a></td>
            <input type="submit" name="cashin" value="Load">
        </div>
    </form>
</body>

</html>
