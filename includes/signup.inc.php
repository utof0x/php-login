<?php

require_once '../Connection.php';
require_once '../functions.php';

if (isset($_POST['submit'])) {
    $connection = new Connection();

    $name = $_POST['name'];
    $username = $_POST['username'];
    $email = $_POST['email'];
    $password = $_POST['password'];
    $passwordRepeat = $_POST['passwordRepeat'];

    if (!fieldsAreFilled([$name, $username, $email, $password, $passwordRepeat])) {
        header('location: ../signup.php?error=emptyfields');
        exit();
    }
    if (!isUsernameValid($username)) {
        header('location: ../signup.php?error=invalidusername');
        exit();
    }
    if (!isEmailValid($email)) {
        header('location: ../signup.php?error=invalidemail');
        exit();
    }
    if (strcmp($password, $passwordRepeat) !== 0) {
        header('location: ../signup.php?error=passworddoesntmatch');
        exit();
    }
    if (userAlreadyExist($connection, $username, $email)) {
        header('location: ../signup.php?error=useralreadyexist');
        exit();
    }

    $connection->createUser($name, $username, $email, $password);
    header('location: ../signup.php?error=none');
}