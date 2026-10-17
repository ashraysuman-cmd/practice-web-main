<?php 
include 'includes/header.php';
include 'includes/auth_check.php';
?>

<div class="container">
    <h2>Welcome, <?php echo $_SESSION['user_name']; ?> 👟</h2>

    <h3>Featured Sneakers</h3>

    <div class="card">
    <img src="assets/images/db-1.jpg" alt="Nike Jordans">
        <h3>Nike Jordans</h3>
        <p>₹9,999</p>
    </div>

    <div class="card">
        <img src="assets/images/db-2.jpg" alt="Nike A2">
        <h3>Nike A2</h3>
        <p>₹11,499</p>
    </div>

    <div class="card">
        <img src="assets/images/db-3.jpg" alt="Puma RS-Y">
        <h3>Puma RS-Y</h3>
        <p>₹7,999</p>
    </div>

    <div class="card">
        <img src="assets/images/db-4.jpg" alt="Nike Air Force">
        <h3>Nike Air Force</h3>
        <p>₹9,999</p>
    </div>

    <div class="card">
        <img src="assets/images/db-5.jpg" alt="Nike Lows">
        <h3>Nike Lows</h3>
        <p>₹9,999</p>
    </div>
</div>

<?php include 'includes/footer.php'; ?>