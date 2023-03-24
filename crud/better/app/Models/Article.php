<?php

namespace Autobots\Blog\Models;

use PDO;
use PDOException;

class Article extends Model
{
    protected const TABLE = 'articles';

    public function list()
    {
        $query = "SELECT * FROM " . self::TABLE . " ORDER BY id DESC";
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

    public function save($title, $description, $slug, $categories, $authorName, $imagePath = null)
    {
        // $query = "INSERT INTO articles (title, slug, description, categories,author_name,image_path) VALUES (?, ?, ?, ?, ?, ?)";
        $query = "INSERT INTO articles (title, slug, description, categories,author_name,image_path)
          VALUES (:title, :slug, :description , :categories, :author_name, :image_path)";

        $statement = $this->pdo->prepare($query);
        $statement->bindValue('title', $title);
        $statement->bindValue('description', $description);
        $statement->bindValue('slug', $slug);
        $statement->bindValue('categories', $categories);
        $statement->bindValue('author_name', $authorName);
        $statement->bindValue('image_path', $imagePath);

        $statement->execute();
        // $statement->execute([$title, $slug, $description, $categories, $authorName, $imagePath]);
    }
}
