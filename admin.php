

<?php
session_start();

if (isset($_SESSION['admin_logged_in'])) {
    header("Location: dashboard.php");
    exit;
}

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $admin_username = "admin123";  // Your admin username
    $admin_password = "technology"; // Your admin password

    $input_user = $_POST['username'];
    $input_pass = $_POST['password'];

    if ($input_user === $admin_username && $input_pass === $admin_password) {
        $_SESSION['admin_logged_in'] = true;
        header("Location: dashboard.php");
        exit;
    } else {
        $error = "Invalid username or password";
    }
}
?>
<div class="home">
 <p><a href="index.php">Home</a></p>
 </div>
<!DOCTYPE html>
<html>
<head>
    <title>Admin Login</title>
    <style>
        body {
            margin: 0;
            padding: 0;
             background-image: url('college-bg.jpeg');
             background-size: cover;
              background-position: center;
            background-repeat: no-repeat;
            font-family: Arial, sans-serif;
        }
     
     
        .home {
    text-align: center;
     margin-top: 15px;
}

.home a {
    margin: 0 20px; /* space between links */
    text-decoration: none;
    color: #ffffff;
    font-weight: bold;
    font-size: 1.1rem;
    padding: 10px 15px;
    background-color: #004080;
    border-radius: 6px;
    transition: background-color 0.3s ease;
}

.home a:hover {
     background-color: #00264d;
    color: #ffcc00;
}

    

        .container {
            width: 350px;
            margin: 100px auto;
           background-color: rgba(142, 185, 211, 0.7);
            padding: 30px;
            border-radius: 8px;
            box-shadow: 0 0 10px #00000033;

           
        }

        h2 {
            text-align: center;
            color: #004080;
            font-weight: bold;
            margin-bottom: 25px;
        }

        input[type="text"],
        input[type="password"] {
            width: 100%;
            padding: 10px;
            margin: 10px 0 20px 0;
            border: 1px solid #ccc;
            border-radius: 4px;
        }

        button {
            width: 100%;
            background-color: #004080;
            color: white;
            padding: 10px;
            border: none;
            font-weight: bold;
            border-radius: 4px;
            cursor: pointer;
        }

        button:hover {
            background-color: #003366;
        }

        .error {
            text-align: center;
            color: red;
            font-weight: bold;
        }
    </style>
</head>
<body>

<div class="container">
    <form method="POST" action="">
        <h2>Admin Login</h2>
        <input type="text" name="username" placeholder="Admin Username" required>
        <input type="password" name="password" placeholder="Password" required>
        <button type="submit">Login</button>
    </form>

    <?php
    if (!empty($error)) {
        echo "<p class='error'>$error</p>";
    }
    ?>
</div>

</body>
</html>
