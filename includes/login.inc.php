<?php

require_once '../Connection.php';
require_once '../functions.php';

if (isset($_POST['submit'])) {
    $connection = new Connection();

    $username = $_POST['username'];
    $password = $_POST['password'];

    if (!fieldsAreFilled([$username, $password])) {
        header('location: ../login.php?error=emptyfields');
        exit();
    }
    if (!userAlreadyExist($connection, $username, $username)) {
        header('location: ../login.php?error=usernotfound');
        exit();
    }

    header('location: ../login.php?error=none');
} else {
    header('location: ../login.php');
}