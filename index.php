<?php
session_start();
?>

<?php include 'parts/header.php' ?>

<?php if (isset($_SESSION['id'])): ?>
    <div class="login-message">You are logged in, congrats</div>
<?php else: ?>
    <div class="login-message">You are not logged in, use navigation above to log in or sign up</div>
<?php endif; ?>

<?php include 'parts/footer.php' ?>

