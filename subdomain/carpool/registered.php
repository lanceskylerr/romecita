<!DOCTYPE html>
<html>
<head>
	
	<title>Registered Users</title>
	
</head>
<body>
	<div class="container">
		<h1>Registered Users</h1>
		<table>
            <tr>
                <th>ID</th>
                <th>First Name</th>
                <th>Email</th>
                
            </tr>
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
			$sql = "SELECT * FROM userstbl";
			$result = $conn->query($sql);
			
			$conn->close();
   
			   if ($result->num_rows > 0) {
				// output data of each row
				while($row = $result->fetch_assoc()) {
					echo "<tr><td>" . $row["user_id"]. "</td><td>" . $row["user_firstname"]. "</td><td>" . $row["user_email"]. "</td></tr>";
				}
			} else {
				echo "0 results";
			}
            ?>
        </table>
	</div>
</body>
</html>