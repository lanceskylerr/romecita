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
			/* background-color: #f8f9fa; */
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
		<a class="navbar-brand" href="passenger.php">Carpool Web</a>
		<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav"
			aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
			<span class="navbar-toggler-icon"></span>
		</button>
		<div class="collapse navbar-collapse" id="navbarNav">
			<ul class="navbar-nav ml-auto">
				<li class="nav-item active">
					<a class="nav-link" href="admin.php">Home</a>
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
		<h1 class="text-center mb-4" style = "color: white">Registered Cars</h1>
		<table class="table table-bordered">
			<thead>
				<tr>
					<th>ID</th>
					<th>Maker</th>
					<th>Model</th>
					<th>Type</th>
					<th>Plate no</th>
				</tr>
			</thead>
			<tbody>
			<?php
			$servername = "localhost";
			$username = "root";
			$password = "";
			$dbname = "carpooldtbs";

			// Create connection
			$conn = new mysqli($servername, $username, $password, $dbname);

			// Check connection
			if ($conn->connect_error) {
				die("Connection failed: " . $conn->connect_error);
			}

			// Retrieve data
			$sql = "SELECT * FROM cartbl";
			$result = $conn->query($sql);

			$conn->close();

			if ($result->num_rows > 0) {
				// output data of each row
				while ($row = $result->fetch_assoc()) {
					echo "<tr><td>" . $row["car_id"] . "</td><td>" . $row["car_maker"] . "</td><td>" . $row["car_model"] . "</td><td>" . $row["car_type"] . "</td><td>" . $row["car_plateno"] . "</td></tr>";
				}
			} else {
				echo "0 results";
			}
			?>
		</table>
		<div class="btns">
		<div class="col-md-4">
			<a href="driver.php" class="btn btn-lg btn-success btn-block">Back</a>

		</div>
</body>

</html>