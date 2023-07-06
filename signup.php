<?php
$error = $_GET['error'] ?? null;
$errorMessage = '';

if ($error === 'emptyfields') {
    $errorMessage = 'All fields required';
} elseif ($error === 'invalidusername') {
    $errorMessage = 'Username should be at least 6 chars and not longer than 16 char and contains only letters and numbers';
} elseif ($error === 'invalidemail') {
    $errorMessage = 'Enter valid email';
} elseif ($error === 'passworddoesntmatch') {
    $errorMessage = 'Passwords doesn\'t match';
} elseif ($error === 'useralreadyexist') {
    $errorMessage = 'Username or Email already taken';
} elseif ($error === 'none') {
    $errorMessage = 'You registered successfully';
}
?>

<?php include 'parts/header.php' ?>
    <div class="login-form-wrapper">
        <h1 class="login-form-title">Sign Up</h1>
        <form class="login-form" action="includes/signup.inc.php" method="post">
            <input type="text" name="name" placeholder="Your full name"/>
            <input type="text" name="username" placeholder="Username"/>
            <input type="text" name="email" placeholder="Email"/>
            <input type="password" name="password" placeholder="Password"/>
            <input type="password" name="passwordRepeat" placeholder="Repeat password"/>
            <button type="submit" name="submit">Sign Up</button>
        </form>
        <?php if ($errorMessage !== ''): ?>
            <div class="error-message">
                <?php echo $errorMessage ?>
            </div>
        <?php endif; ?>
    </div>
<?php include 'parts/footer.php' ?>