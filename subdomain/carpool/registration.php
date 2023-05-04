<!DOCTYPE html>
<html>
<head>
	<title>Registration Page</title>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
	<style>
	body {
		background: linear-gradient(to bottom right, #b3ffb3, #99e6ff);
	}
	.form-group {
		margin-bottom: 20px;
	}
	.btn {
		background-color: #00cc99;
		color: #fff;
	}
	.btn:hover {
		background-color: #008066;
		color: #fff;
	}
	</style>
</head>
<body>
	<div class="container mt-5">
		<h2 class="text-center mb-4">Registration Form</h2>
		<form action = "insert.php" method="POST">
			<div class="row">
				<div class="col-md-4">
					<div class="form-group">
						<label for="firstName">First Name:</label>
						<input type="text" class="form-control" name="firstname" placeholder="Enter First Name">
					</div>
				</div>
				<div class="col-md-4">
					<div class="form-group">
						<label for="middleName">Middle Name:</label>
						<input type="text" class="form-control" name="middlename" placeholder="Enter Middle Name">
					</div>
				</div>
				<div class="col-md-4">
					<div class="form-group">
						<label for="lastName">Last Name:</label>
						<input type="text" class="form-control" name="lastname" placeholder="Enter Last Name">
					</div>
				</div>
			</div>
			<div class="row">
				<div class="col-md-6">
					<div class="form-group">
						<label for="phone">Phone No:</label>
						<input type="text" class="form-control" name="phone" placeholder="Enter Phone No">
					</div>
				</div>
				<div class="col-md-6">
					<div class="form-group">
						<label for="address">Address:</label>
						<input type="text" class="form-control" name="address" placeholder="Enter Address">
					</div>
				</div>
			</div>
			<div class="row">
				<div class="col-md-6">
					<div class="form-group">
						<label for="email">Email:</label>
						<input type="email" class="form-control" name="email" placeholder="Enter Email">
					</div>
				</div>
				<div class="col-md-6">
					<div class="form-group">
						<label for="password">Password:</label>
						<input type="password" class="form-control" name="password" placeholder="Enter Password">
					</div>
				</div>
			</div>
			<div class="row">
				<div class="col-md-6">
					<button type="submit" name ="submit" class="btn btn-block">Submit</button>
				</div>
				<div class="col-md-6">
					<button type="button" class="btn btn-secondary btn-block" onclick="window.location.href='index.php'">Back</button>
				</div>
			</div>
		</form>
	</div>
</body>
</html>