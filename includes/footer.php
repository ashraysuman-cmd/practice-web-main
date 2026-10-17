<footer>
    <p>© 2026 KickStyle. All Rights Reserved.</p>
</footer>

<script>
    setTimeout(() => {
        const alertBox = document.querySelector('.alert');
        if (alertBox) {
            alertBox.style.transition = "0.5s";
            alertBox.style.opacity = "0";
            alertBox.style.transform = "translateX(50px)";
            
            setTimeout(() => alertBox.remove(), 500);
        }
    }, 3500); // 3.5 seconds
</script>
</body>
</html>