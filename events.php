<?php
// Connect to the database
$conn = new mysqli('localhost', 'root', '', 'college-events');

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// SQL query to fetch events ordered by date
$sql = "SELECT event_name, event_date FROM events ORDER BY event_date";
$result = $conn->query($sql);

echo '<h2>Upcoming Events</h2>';
echo '<ul>';

// Loop through results and display each event
if ($result->num_rows > 0) {
    while ($row = $result->fetch_assoc()) {
        echo '<li>' . htmlspecialchars($row['event_name']) . ' - ' . date('jS F Y', strtotime($row['event_date'])) . '</li>';
    }
} else {
    echo '<li>No upcoming events found.</li>';
}

echo '</ul>';

// Close the connection
$conn->close();
?>
