<?php include 'includes/header.php'; ?>

<form method="POST" action="auth/login_process.php">
    <h2 style="text-align:center; margin-bottom:15px;">Login</h2>
    <input type="email" name="email" placeholder="Email" required>
    <input type="password" name="password" placeholder="Password" required>
    <button type="submit">Login</button>
</form>

<?php include 'includes/footer.php'; ?>