<?php

require_once __DIR__ . './lib/database.php';
require_once __DIR__ . './lib/helpers.php';

// dd($_POST);
// var_dump($_SERVER);

if ($_SERVER['REQUEST_METHOD'] === 'POST') {

    try {
        // var_dump($_POST);
        // var_dump($_FILES);
        // var_dump($_FILES['image_path']);
        // die;

        // validation comes first..!
        $title = $_POST['title'] ?? null;
        $slug = str_replace(" ", "-", $title) . "-" . rand(1000, 9999);
        $description = $_POST['description'] ?? null;
        $authorName = $_POST['author_name'] ?? null;
        $categories = $_POST['categories'] ?? null;
        $uploadedImage = $_FILES['image_path'] ?? null;
        $imagePath = null;

        // var_dump($title, $description, $authorName, $categories, $imagePath);
        // var_dump("Am I alive?");die;


        $errors = [];

        // if (empty($title) || empty($description) || empty($authorName)) {
        //     // throw new \Exception('Title is required');
        //     throw new \Exception('All inputs are required');
        // }

        if (empty($title)) {
            $errors['title'] = 'Title is required';
        }

        if (empty($description)) {
            $errors['description'] = 'Description is required';
        }

        if (empty($authorName)) {
            $errors['author_name'] = 'Author name is required';
        }

        // pass by value ---> bindValue
        // pass by reference ---> bindParam (variable)

        if (empty($errors)) {

            // image uploading part
            if ($uploadedImage && !empty($uploadedImage['tmp_name'])) {
                if (!is_dir('images')) {
                    mkdir('images');
                }

                if (!is_dir('images/articles')) {
                    mkdir('images/articles');
                }

                $imagePath = 'images/articles/' . uniqid() . '_' . str_replace(" ", "_", $uploadedImage['name']);
                move_uploaded_file($uploadedImage['tmp_name'], $imagePath);
            }

            try {
                // $query = "INSERT INTO articles (title, slug, description, categories,author_name,image_path) VALUES (?, ?, ?, ?, ?, ?)";
                $query = "INSERT INTO articles (title, slug, description, categories,author_name,image_path)
            VALUES (:title, :slug, :description , :categories, :author_name, :image_path)";

                $statement = $pdo->prepare($query);
                $statement->bindValue('title', $title);
                $statement->bindValue('description', $description);
                $statement->bindValue('slug', $slug);
                $statement->bindValue('categories', $categories);
                $statement->bindValue('author_name', $authorName);
                $statement->bindValue('image_path', $imagePath);

                $statement->execute();
                // $statement->execute([$title, $slug, $description, $categories, $authorName, $imagePath]);

                var_dump('the data has been inserted successfully!');
                //   $articles = $statement->fetchAll(PDO::FETCH_OBJ);

                header("Location: manage-posts.php");
            } catch (PDOException $e) {
                echo "insertion failed: " . $e->getMessage();
                die();
            }
        } else {
            // Starting session
            session_start();

            // Storing session data
            $_SESSION['errors'] = $errors;
            header('Location: create.php');
        }
    } catch (\Throwable $e) {
        //
    }
}
