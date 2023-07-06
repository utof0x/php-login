<?php
$error = $_GET['error'] ?? null;
$errorMessage = '';

if ($error === 'emptyfields') {
    $errorMessage = 'All fields required';
} elseif ($error === 'usernotfound') {
    $errorMessage = 'User not exist';
} elseif ($error === 'none') {
    $errorMessage = 'You login successfully';
}
?>

<?php include 'parts/header.php' ?>
    <div class="login-form-wrapper">
        <h1 class="login-form-title">Log In</h1>
        <form class="login-form" action="includes/login.inc.php" method="post">
            <input type="text" name="username" placeholder="Username or email"/>
            <input type="password" name="password" placeholder="Password"/>
            <button type="submit" name="submit">Log In</button>
        </form>
        <?php if ($errorMessage !== ''): ?>
            <div class="error-message">
                <?php echo $errorMessage ?>
            </div>
        <?php endif; ?>
    </div>
<?php include 'parts/footer.php' ?>