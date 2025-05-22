  <link rel="stylesheet" href="style.css" />
  <?php
session_start();
if (!isset($_SESSION['admin_logged_in'])) {
    header("Location: admin.php");
    exit;
}
?>

  
  
  <?php
// Database connection parameters
$servername = "localhost";
$username = "root";       // default XAMPP username
$password = "";           // default XAMPP password is empty
$dbname = "college-events"; // replace with your database name

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Fetch registrations

$sql = "SELECT id, name, email, event FROM registrations ORDER BY id DESC";

$result = $conn->query($sql);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8" />
    <title>Dashboard - Registered Participants</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background: #f4f7fa;
            padding: 30px;
        }
        h2 {
            color: #004080;
            text-align: center;
        }
        table {
            width: 100%;
            border-collapse: collapse;
            margin-top: 25px;
        }
        th, td {
            padding: 12px 15px;
            border: 1px solid #ddd;
            text-align: center;
        }
        th {
            background-color: #004080;
            color: white;
        }
        tr:nth-child(even) {
            background-color: #f9fbfd;
        }

        .logout-container {
    text-align: center;       
    margin-top: 20px; 
   
}

.logout-link {
    color:rgb(60, 151, 204);          
    text-decoration: none;   /* Remove underline */
    padding: 8px 15px;       /* Padding inside the button */
    border: 2px solid #004080; /* Blue border */
    border-radius: 5px;      /* Rounded corners */
    font-weight: bold;       /* Bold text */
    display: inline-block;   /* Make padding and border work nicely */
    transition: background-color 0.3s, color 0.3s; /* Smooth hover effect */
}

.logout-link:hover {
    background-color:rgb(136, 165, 195); 
    color: white;              
    cursor: pointer;           
}

    </style>
</head>
<body>
    <h2>Registered Participants</h2>
    

    <?php
    if ($result->num_rows > 0) {
        echo "<table>";
        echo "<tr><th>ID</th><th>Name</th><th>Email</th><th>Event</th></tr>";

        // Output data of each row
        while ($row = $result->fetch_assoc()) {
            echo "<tr>";
            echo "<td>" . $row["id"] . "</td>";
            echo "<td>" . htmlspecialchars($row["name"]) . "</td>";
            echo "<td>" . htmlspecialchars($row["email"]) . "</td>";
            echo "<td>" . htmlspecialchars($row["event"]) . "</td>";
           
            echo "</tr>";
        }
        echo "</table>";
    } else {
        echo "<p>No registrations found.</p>";
    }
    $conn->close();
    ?>

  <div class="logout-container">
  <a href="logout.php" class="logout-link">Logout</a>
</div>

</body>
</html>
