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
    </div>
<?php include 'parts/footer.php' ?>