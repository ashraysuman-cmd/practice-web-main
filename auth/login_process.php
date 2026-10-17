<?php
session_start();
include '../includes/db.php';

$email = $_POST['email'];
$password = $_POST['password'];

$stmt = $conn->prepare("SELECT * FROM users WHERE email = ?");
$stmt->bind_param("s", $email);
$stmt->execute();
$result = $stmt->get_result();

if ($result->num_rows === 1) {
    $user = $result->fetch_assoc();

    if (password_verify($password, $user['password'])) {
        $_SESSION['user_id'] = $user['id'];
        $_SESSION['user_name'] = $user['name'];

        $_SESSION['success'] = "Welcome back, " . $user['name'] . "!";
        header("Location: ../dashboard.php");
    } else {
        $_SESSION['error'] = "Invalid password!";
        header("Location: ../login.php");
    }
} else {
    $_SESSION['error'] = "User not found!";
    header("Location: ../login.php");
}
?>