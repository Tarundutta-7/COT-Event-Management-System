<?php
// register.php

// Database connection details
$servername = "localhost";
$username = "root";  // default XAMPP username
$password = "";      // default XAMPP password is empty
$dbname = "college-events";  // Your database name

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Get form data safely
$name = $conn->real_escape_string($_POST['name']);
$email = $conn->real_escape_string($_POST['email']);
$event = $conn->real_escape_string($_POST['event']);

// Insert data into registrations table
$sql = "INSERT INTO registrations (name, email, event) VALUES ('$name', '$email', '$event')";

if ($conn->query($sql) === TRUE) {
   echo "🎉 Registration successful! Thank you, <strong>$name</strong>. We can't wait to see you at the event! 🎈";

} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();
?>
