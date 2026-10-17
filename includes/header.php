<?php
session_start();
?>

<!DOCTYPE html>
<html>
<head>
    <title>KickStyle</title>
    <link rel="stylesheet" href="assets/css/style.css">
</head>
<body>

<nav>
    <?php if(isset($_SESSION['success'])): ?>
    <div class="alert success">
        <?php 
            echo $_SESSION['success']; 
            unset($_SESSION['success']); 
        ?>
    </div>
<?php endif; ?>

<?php if(isset($_SESSION['error'])): ?>
    <div class="alert error">
        <?php 
            echo $_SESSION['error']; 
            unset($_SESSION['error']); 
        ?>
    </div>
<?php endif; ?>
    <h2>KickStyle</h2>
    <ul>
        <li><a href="index.php">Home</a></li>
        <li><a href="about.php">About</a></li>
        <li><a href="contact.php">Contact</a></li>

        <?php if(isset($_SESSION['user_id'])): ?>
            <li><a href="dashboard.php">Dashboard</a></li>
            <li><a href="auth/logout.php">Logout</a></li>
        <?php else: ?>
            <li><a href="login.php">Login</a></li>
            <li><a href="signup.php">Signup</a></li>
        <?php endif; ?>
    </ul>
</nav>