<?php
session_start();
include '../includes/db.php';

$name = $_POST['name'];
$email = $_POST['email'];
$address = $_POST['address'];
$phone = $_POST['phone'];
$password = password_hash($_POST['password'], PASSWORD_DEFAULT);

// Check existing email
$check = $conn->prepare("SELECT id FROM users WHERE email = ?");
$check->bind_param("s", $email);
$check->execute();
$result = $check->get_result();

if ($result->num_rows > 0) {
    $_SESSION['error'] = "Email already exists!";
    header("Location: ../signup.php");
    exit;
}

// Insert
$stmt = $conn->prepare("INSERT INTO users (name, email, address, phone, password) VALUES (?, ?, ?, ?, ?)");
$stmt->bind_param("sssss", $name, $email, $address, $phone, $password);

if ($stmt->execute()) {
    $_SESSION['success'] = "Account created successfully! Please login.";
    header("Location: ../login.php");
} else {
    $_SESSION['error'] = "Something went wrong!";
    header("Location: ../signup.php");
}
?>