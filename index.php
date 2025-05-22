<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <title>College Event Management</title>
    <script src="script.js"></script> 
    <link rel="stylesheet" href="style.css" />
</head>
<body class="index-page">
    <header>
        <h1>COLLEGE OF TECHNOLOGY EVENT MANAGEMENT SYSTEM</h1>
        <nav>
            <a href="index.php">Home</a>
            <a href="registration.php">Register</a>
             <a href="dashboard.php">Dashboard</a>
        </nav>
    </header>

    <section id="events">
        <div class="events-box">
            <?php include 'events.php'; ?>
            
        </div>
    </section>

    <script src="script.js"></script>
</body>
</html>
