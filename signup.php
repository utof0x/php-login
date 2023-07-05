<?php include 'parts/header.php' ?>
    <div class="login-form-wrapper">
        <h1 class="login-form-title">Sign Up</h1>
        <form class="login-form" action="" method="post">
            <input type="text" name="name" placeholder="Your full name"/>
            <input type="text" name="username" placeholder="Username"/>
            <input type="text" name="email" placeholder="Email"/>
            <input type="text" name="password" placeholder="Password"/>
            <input type="text" name="passwordRepeat" placeholder="Repeat password"/>
            <button type="submit" name="submit">Sign Up</button>
        </form>
    </div>
<?php include 'parts/footer.php' ?>