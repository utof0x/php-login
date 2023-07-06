<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="css/reset.css">
    <link rel="stylesheet" href="css/styles.css">
    <title>Document</title>
</head>
<body>
<div class="wrapper">
    <nav>
        <ul class="links-list">
            <?php if (isset($_SESSION['id'])): ?>
                <li class="item"><a href="./includes/logout.inc.php">Log Out</a></li>
            <?php else: ?>
                <li class="item"><a href="./login.php">Log In</a></li>
                <li class="item"><a href="./signup.php">Sign Up</a></li>
            <?php endif; ?>

        </ul>
    </nav>