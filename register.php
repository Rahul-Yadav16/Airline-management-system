<?php
// Connect to the database
$servername = "localhost";
$username = "root"; // Replace with your MySQL username
$password = "rahul@16";     // Replace with your MySQL password
$dbname = "airlines_db"; // Replace with your database name

$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Get form data
$username = $_POST['username'];
$password = $_POST['password'];
$gender = $_POST['gender'];
$address = $_POST['address'];

// Insert data into the database
$sql = "INSERT INTO users (username, password, gender, address) VALUES ('$username', '$password', '$gender', '$address')";

if ($conn->query($sql) === TRUE) {
    echo "Registration successful! <a href='login.html'>Login here</a>";
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();
?>
