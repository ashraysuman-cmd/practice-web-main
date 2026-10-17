<?php include 'includes/header.php'; ?>

<form method="POST" action="auth/signup_process.php">
    <h2 style="text-align:center; margin-bottom:15px;">Signup</h2>
    <input type="text" name="name" placeholder="Name" required>
    <input type="email" name="email" placeholder="Email" required>
    <input type="text" name="address" placeholder="Address" required>
    <input type="text" name="phone" placeholder="Phone" required>
    <input type="password" name="password" placeholder="Password" required>
    <button type="submit">Register</button>
</form>

<?php include 'includes/footer.php'; ?>