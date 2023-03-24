<?php

namespace Autobots\Blog\Models;

use PDO;
use PDOException;

class User extends Model
{
    protected const TABLE = 'users';

    public function list()
    {
        $query = "SELECT * FROM " . self::TABLE . " ORDER BY id DESC";
        $statement = $this->pdo->query($query);

        return $statement->fetchAll(PDO::FETCH_OBJ);
    }

    public function findByEmail($email)
    {
        try {
            $queryURI = "SELECT * FROM users WHERE email=:email LIMIT 1";
            $query = $this->pdo->prepare($queryURI);
            $query->bindValue(":email", $email);
            // $query->bindValue(":password", $password);
            $query->execute();

            $user = $query->fetch(PDO::FETCH_OBJ);

            return $user;
        } catch (PDOException $e) {
            echo "Query failed: " . $e->getMessage();
            die();
        }
    }

    public function save($name, $email, $password)
    {
        $query = "INSERT INTO users (name, email, password, is_active, role)
          VALUES (:name, :email, :password, :is_active, :role)";

        $statement = $this->pdo->prepare($query);
        $statement->bindValue('name', $name);
        $statement->bindValue('email', $email);
        $statement->bindValue('password', password_hash($password, PASSWORD_BCRYPT));
        $statement->bindValue('is_active', true);
        $statement->bindValue('role', 'user');
        $statement->execute();
    }
}
