<?php

namespace Autobots\Blog\Models;

use Autobots\Blog\Library\Database;
use PDO;
use PDOException;

class Article
{
    private PDO $pdo;

    public function __construct()
    {
        $this->pdo = Database::getInstance();
    }

    public function list()
    {
        $query = "SELECT * FROM articles ORDER BY id DESC";
        $statement = $this->pdo->query($query);

        return $statement->fetchAll(PDO::FETCH_OBJ);
    }

    public function find($id)
    {
        try {
            // $statement = $pdo->query("SELECT * FROM articles ORDER BY id DESC");
            $query = "SELECT * FROM articles WHERE id = {$id} LIMIT 1";
            $statement = $this->pdo->query($query);

            $article = $statement->fetch(PDO::FETCH_OBJ);

            if (!$article) {
                throw new \Exception('Data not found');
            }

            return $article;
        } catch (PDOException $e) {
            echo "Query failed: " . $e->getMessage();
            die();
        }
    }
}
