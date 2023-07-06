<?php

function fieldsAreFilled(array $fieldsArray): bool
{
    foreach ($fieldsArray as $field) {
        if (empty($field)) {
            return false;
        }
    }

    return true;
}

function isUsernameValid(string $username): bool
{
    if (strlen($username) < 6 || strlen($username) > 16) {
        return false;
    }
    if (!preg_match('/^[a-zA-Z0-9]*$/', $username)) {
        return false;
    }

    return true;
}

function isEmailValid(string $email): bool
{
    if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
        return false;
    }

    return true;
}

function userAlreadyExist($connection, string $username, string $email): bool
{
    $user = $connection->getUserByUsernameOrEmail($username, $email);

    if (isset($user['id'])) {
        return true;
    }

    return false;
}
