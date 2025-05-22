<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8" />
    <title>Register Now</title>
    <link rel="stylesheet" href="style.css" />
</head>
<body class="register-page">

    <h2>Register Now</h2>
    <form id="registrationForm" action="register.php" method="POST">
        <label for="name">Name:</label><br />
        <input type="text" id="name" name="name" required /><br />

        <label for="email">Email:</label><br />
        <input type="email" id="email" name="email" required /><br />

        <label for="event">Select Event:</label><br />
        <select id="event" name="event" required>
            <option value="">--Select an Event--</option>
            <?php
// Connect to the database
$conn = new mysqli('localhost', 'root', '', 'college-events');

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Fetch event names from the database
$sql = "SELECT event_name FROM events ORDER BY event_date";
$result = $conn->query($sql);

// Loop through results and echo <option> tags
if ($result->num_rows > 0) {
    while ($row = $result->fetch_assoc()) {
        echo '<option value="' . htmlspecialchars($row['event_name']) . '">' . htmlspecialchars($row['event_name']) . '</option>';
    }
} else {
    echo '<option disabled>No events found</option>';
}

$conn->close();
?>

        </select><br /><br />

        <button type="submit">Register</button>
    </form>
</class=>
</html>

