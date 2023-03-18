<?php

namespace Autobots\Blog\Models;

use PDO;

class Category extends Model
{
    protected const TABLE = 'categories';

    public function list()
    {
        $query = "SELECT * FROM " . self::TABLE . " ORDER BY id DESC";
        $statement = $this->pdo->query($query);

        return $statement->fetchAll(PDO::FETCH_OBJ);
    }

    public function save($name, $slug, $imagePath = null)
    {
        $query = "INSERT INTO " . self::TABLE ." (name, slug, image_path)
          VALUES (:name, :slug, :image_path)";

        $statement = $this->pdo->prepare($query);
        $statement->bindValue('name', $name);
        $statement->bindValue('slug', $slug);
        $statement->bindValue('image_path', $imagePath);

        $statement->execute();
    }
}
