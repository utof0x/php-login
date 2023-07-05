<?php

class Connection
{
    private PDO $pdo;

    public function __construct()
    {
        $this->pdo = new PDO("mysql:host=127.0.0.1;port=3306;dbname=php_login", "root");
        $this->pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    }

    public function getUserByUsernameOrEmail(string $username, string $email)
    {
        $statement = $this->pdo->prepare('SELECT * FROM users WHERE username = :username OR email = :email');
        $statement->bindValue('username', $username);
        $statement->bindValue('email', $email);
        $statement->execute();
        return $statement->fetchAll(PDO::FETCH_ASSOC);
    }

    public function createUser(string $name, string $username, string $email, string $password): bool
    {
        $statement = $this->pdo->prepare("INSERT INTO users (name, username, email, password) VALUES (:name, :username, :email, :password);");
        $statement->bindValue('name', $name);
        $statement->bindValue('username', $username);
        $statement->bindValue('email', $email);
        $statement->bindValue('password', $password);
        return $statement->execute();
    }

    public function deleteUser($username): bool
    {
        $statement = $this->pdo->prepare('DELETE FROM users WHERE username = :username');
        $statement->bindValue('username', $username);
        return $statement->execute();
    }
}
