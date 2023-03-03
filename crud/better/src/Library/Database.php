<?php

namespace Autobots\Blog\Library;

use PDO;
use PDOException;

class Database
{
    private $pdo;

    public function __construct()
    {
        //
    }

    public function getPdo()
    {
        return $this->pdo;
    }

    public function connect()
    {
        $host = "127.0.0.1";
        $username = "root";
        $password = "";
        $db = "pondit_blog";
        $charset = "utf8mb4";

        // dsn = data source name
        $dsn = "mysql:host={$host};dbname={$db};charset={$charset}";

        try {
            $this->pdo = new PDO($dsn, $username, $password);
            // set the PDO error mode to exception
            $this->pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

            return $this->pdo;
        } catch (PDOException $e) {
            $message = "Connection failed: " . $e->getMessage();
            throw new \Exception($message);
        }
    }
}
