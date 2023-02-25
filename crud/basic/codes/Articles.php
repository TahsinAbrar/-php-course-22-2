<?php

require_once __DIR__ . './../lib/helpers.php';

function getArticles($pdo)
{
    try {
        // $statement = $pdo->query("SELECT * FROM articles ORDER BY id DESC");
        $query = "SELECT * FROM articles ORDER BY id DESC";
        $statement = $pdo->query($query);

        return $statement->fetchAll(PDO::FETCH_OBJ);
      } catch (PDOException $e) {
        echo "Query failed: " . $e->getMessage();
        die();
      }
}

function getArticleById($pdo, $id)
{
    try {
        // $statement = $pdo->query("SELECT * FROM articles ORDER BY id DESC");
        $query = "SELECT * FROM articles WHERE id = {$id} LIMIT 1";
        $statement = $pdo->query($query);

        return $statement->fetch(PDO::FETCH_OBJ);
      } catch (PDOException $e) {
        echo "Query failed: " . $e->getMessage();
        die();
      }
}