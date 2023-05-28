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
		<h1 class="text-center mb-4" style="color: white">Registered Cars</h1>
		<table class="table table-bordered">
			<thead>
				<tr>
					<th>ID</th>
					<th>User ID</th>
					<th>Maker</th>
					<th>Model</th>
					<th>Type</th>
					<th>Plate no</th>
					<th>ORCR</th>
					<th>Driver's License</th>
					<th>Status</th>
					<th>Action</th>
				</tr>
			</thead>
			<tbody>
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

				// Retrieve data
				$sql = "SELECT * FROM cartbl WHERE car_confirmation = 'Pending'";
				$result = $conn->query($sql);

				if ($result->num_rows > 0) {
					// output data of each row
					while ($row = $result->fetch_assoc()) {
						echo "<tr><td>" . $row["car_id"] . "</td><td>" . $row["user_id"] . "</td><td>" . $row["car_maker"] . "</td><td>" . $row["car_model"] . "</td><td>" . $row["car_type"] . "</td><td>" . $row["car_plateno"] . "</td><td>" . $row["car_orcr"] . "</td><td>" . $row["car_license"] . "</td><td>" . $row["car_confirmation"] . "</td>";
						echo "<td>";
						echo "<form action='' method='POST'>";
						echo "<input type='hidden' name='car_id' value='" . $row["car_id"] . "'>";
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
				<a href = "admin.php" class="btn btn-lg btn-success btn-block">Back</a>
			</div>
		</div>
	</div>
</body>

</html>

<?php
// Check if the form has been submitted
session_start();
$user_id = $_SESSION['user_id'];
if (isset($_POST['submitcar'])) {
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


	$cmaker = $_POST['carmaker'];
	$cmodel = $_POST['carmodel'];
	$ctype = $_POST['cartype'];
	$plateno = $_POST['plateno'];
	$orcr = $_POST['orcr'];
	$license = $_POST['driverslicense'];


	// Insert the user's information into the database
	$sql = "INSERT INTO cartbl (car_maker, car_model, car_type, car_plateno, car_orcr, car_license, car_confirmation, user_id) VALUES ('$cmaker', '$cmodel', '$ctype', '$plateno','$orcr', '$license', 'Pending', '$user_id')";

	if (mysqli_query($conn, $sql)) {
		echo "Registration successful!";
	} else {
		echo "Error: " . mysqli_error($conn);
	}
	
} else if (isset($_POST['approve'])) {
	$car_id = $_POST['car_id'];
	updateConfirmationStatus($car_id, 'Approved');
} else if (isset($_POST['reject'])) {
	$car_id = $_POST['car_id'];
	updateConfirmationStatus($car_id, 'Rejected');
}

// Function to update user_role based on car confirmation status
function updateConfirmationStatus($car_id, $status)
{
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

    // Retrieve the user_id of the user who submitted the car
    $getUserSql = "SELECT user_id FROM cartbl WHERE car_id = '$car_id'";
    $result = $conn->query($getUserSql);

    if ($result->num_rows > 0) {
        $row = $result->fetch_assoc();
        $user_id = $row['user_id'];

        // Update car_confirmation status
        $updateStatusSql = "UPDATE cartbl SET car_confirmation = '$status' WHERE car_id = '$car_id'";
        if ($conn->query($updateStatusSql) === TRUE) {
            // Update the user_role in the userstbl table
            $updateUserSql = "UPDATE userstbl SET user_role = 'Driver' WHERE user_id = '$user_id'";
            if ($conn->query($updateUserSql) === TRUE) {
                echo "User role updated successfully!";
            } else {
                echo "Error updating user role: " . $conn->error;
            }
            echo "Status updated successfully!";
        } else {
            echo "Error updating status: " . $conn->error;
        }
    } else {
        echo "Invalid car ID";
    }

    $conn->close();
}
?>