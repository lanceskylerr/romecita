<?php
$servername = "localhost";
$username = "root";
$password = "";
$database = "carpooldtbs";

// Create connection
$conn = new mysqli($servername, $username, $password, $database);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    if (isset($_POST['approve'])) {
        $transactionId = $_POST['transaction_id'];
        handleAction('approve', $transactionId, $conn);
    } elseif (isset($_POST['reject'])) {
        $transactionId = $_POST['transaction_id'];
        handleAction('reject', $transactionId, $conn);
    }
}

// Function to handle approve and reject actions
function handleAction($action, $transactionId, $conn)
{
    // Retrieve transaction details
    $sql = "SELECT * FROM transactiontbl WHERE transaction_id = '$transactionId'";
    $result = $conn->query($sql);

    if ($result->num_rows == 1) {
        $transaction = $result->fetch_assoc();

        // Check if the transaction is pending
        if ($transaction['transaction_status'] == 'Pending') {
            // Update user balance and transaction status based on the action
            if ($action == 'approve') {
                $userId = $transaction['user_id'];
                $ticketAmount = $transaction['ticket'];

                // Update user balance
                $updateUserSql = "UPDATE userstbl SET user_balance = user_balance + $ticketAmount WHERE user_id = '$userId'";
                $conn->query($updateUserSql);

                // Update transaction status
                $updateTransactionSql = "UPDATE transactiontbl SET transaction_status = 'Transferred', admin_confirmation = 'Approved' WHERE transaction_id = '$transactionId'";
                $conn->query($updateTransactionSql);
            } elseif ($action == 'reject') {
                // Update transaction status
                $updateTransactionSql = "UPDATE transactiontbl SET transaction_status = 'Failed', admin_confirmation = 'Rejected' WHERE transaction_id = '$transactionId'";
                $conn->query($updateTransactionSql);
            }
        }
    }
}
?>

<!DOCTYPE html>
<html>

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>User Registration List</title>
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <!-- Custom CSS -->
    <style>
        body {
            background-image: linear-gradient(74.6deg, rgba(175, 235, 156, 1) 19.7%, rgba(116, 170, 75, 1) 92%);
        }

        th {
            background-color: #28a745;
            color: #fff;
            font-weight: bold;
        }

        .btns {
            display: inline-block;
            width: 500px;
        }
    </style>
</head>

<body>
    <nav class="navbar navbar-expand-lg navbar-light bg-white">
        <a class="navbar-brand" href="passenger.php">Carpool Web Admin Panel</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav"
            aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav ml-auto">
                <li class="nav-item active">
                    <a class="nav-link" href="admin.php?user=<?php echo $user_id; ?>">Home</a>
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
    <div class="container mt-5">
        <h1 class="text-center mb-4" style="color: white">Payment Requests</h1>
        <table class="table table-bordered">
            <thead>
                <tr>
                    <th>User ID</th>
                    <th>Transaction Type</th>
                    <th>GCash No</th>
                    <th>Cash In Amount</th>
                    <th>Conversion Fee</th>
                    <th>Ticket</th>
                    <th>Status</th>
                    <th>Action</th>
                </tr>
            </thead>
            <tbody>
                <?php
                // Retrieve data
                $sql = "SELECT * FROM transactiontbl WHERE transaction_status = 'Pending'";
                $result = $conn->query($sql);

                if ($result->num_rows > 0) {
                    // output data of each row
                    while ($row = $result->fetch_assoc()) {
                        echo "<tr><td>" . $row["user_id"] . "</td><td>" . $row["transaction_type"] . "</td><td>" . $row["gcash_no"] . "</td><td>" . $row["cico_amount"] . "</td><td>" . $row["convert_fee"] . "</td><td>" . $row["ticket"] . "</td><td>" . $row["transaction_status"] . "</td>";
                        echo "<td>";
                        echo "<form action='' method='POST'>";
                        echo "<input type='hidden' name='transaction_id' value='" . $row["transaction_id"] . "'>";
                        echo "<button class='btn btn-success' name='approve'>Approve</button>";
                        echo "<button class='btn btn-danger' name='reject'>Reject</button>";
                        echo "</form>";
                        echo "</td></tr>";
                    }
                } else {
                    echo "<tr><td colspan='10'>No results</td></tr>";
                }
                ?>
            </tbody>
        </table>
        <div class="btns">
            <div class="col-md-4">
                <a href="admin.php" class="btn btn-lg btn-success btn-block">Back</a>
            </div>
        </div>
    </div>
</body>

</html>
