<?php
	// Create a connection to the database
	$servername = "localhost";
	$username = "root";
	$password = "";
	$dbname = "ordersystem";
	$conn = new mysqli($servername, $username, $password, $dbname);

	// Check if there is an error in the connection
	if ($conn->connect_error) {
		die("Connection failed: " . $conn->connect_error);
	}

	// Check if the form has been submitted
	if ($_SERVER["REQUEST_METHOD"] == "POST") {

		// Get the values from the form
		$name = $_POST["name"];
		$mobile = $_POST["mobile"];
		$alt_mobile = $_POST["alt_mobile"];
		$email = $_POST["email"];
		$address = $_POST["address"];
		$password = $_POST["password"];
		$confirm_password = $_POST["confirm_password"];

		// Check if the password and confirm password match
		if ($password != $confirm_password) {
			echo "Error: Passwords do not match.";
		} else {
			// Hash the password
			// $hashed_password = password_hash($password, PASSWORD_DEFAULT);

			// Insert the values into the database
			$sql = "INSERT INTO register (name, mobile, mobile2, email, address, password)
			VALUES ('$name', '$mobile', '$alt_mobile', '$email', '$address', '$password')";

			if ($conn->query($sql) === TRUE) {
				echo "Registration successful.";
				header("location:login.php");
			} else {
				echo "Error: " . $sql . "<br>" . $conn->error;
			}
		}
	}

	// Close the connection to the database
	$conn->close();
	?>