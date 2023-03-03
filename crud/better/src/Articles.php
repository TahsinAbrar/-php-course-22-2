<?php

namespace Autobots\Blog;

use Autobots\Blog\Library\Database;
use PDO;
use PDOException;

class Articles
{
    private PDO $pdo;

    public function __construct()
    {
        $db = new Database();
        $this->pdo = $db->connect();
    }

    public function getArticles()
    {
      try {
        // $statement = $pdo->query("SELECT * FROM articles ORDER BY id DESC");
        $query = "SELECT * FROM articles ORDER BY id DESC";
        $statement = $this->pdo->query($query);

        return $statement->fetchAll(PDO::FETCH_OBJ);
      } catch (PDOException $e) {
        echo "Query failed: " . $e->getMessage();
        die();
      }
    }

    public function getArticleById($pdo, $id)
    {
      try {
        // $statement = $pdo->query("SELECT * FROM articles ORDER BY id DESC");
        $query = "SELECT * FROM articles WHERE id = {$id} LIMIT 1";
        $statement = $this->pdo->query($query);

        return $statement->fetch(PDO::FETCH_OBJ);
      } catch (PDOException $e) {
        echo "Query failed: " . $e->getMessage();
        die();
      }
    }
}
