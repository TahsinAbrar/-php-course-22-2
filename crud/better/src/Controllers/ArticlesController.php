<?php

namespace Autobots\Blog\Controllers;

// use Autobots\Blog\Library\Database;
use Autobots\Blog\Library\ResponseHandler;
use Autobots\Blog\Models\Article;
// use PDO;
// use PDOException;

class ArticlesController
{
    // private PDO $pdo;

    public function __construct()
    {
        // $this->pdo = Database::getInstance();
    }

    public function index()
    {
        // show list of articles
        try {
            // $statement = $pdo->query("SELECT * FROM articles ORDER BY id DESC");
            // $query = "SELECT * FROM articles ORDER BY id DESC";
            // $statement = $this->pdo->query($query);

            $articles = new Article();

            $data = [];
            $data['articles'] = $articles->list();

            $viewPath = 'articles' . DIRECTORY_SEPARATOR .'manage'; // articles/manage

            return ResponseHandler::renderView($viewPath, $data);
        } catch (\Exception $e) {
            echo "Query failed: " . $e->getMessage();
            die();
        }
    }

    public function create()
    {
        // show create page of article
        return ResponseHandler::renderView('articles/create');
    }

    public function store($request)
    {
        die;
        try {
            // var_dump($request);
            // var_dump($_FILES);
            // var_dump($_FILES['image_path']);
            // die;

            // validation comes first..!
            $title = $request['title'] ?? null;
            $slug = str_replace(" ", "-", $title) . "-" . rand(1000, 9999);
            $description = $request['description'] ?? null;
            $authorName = $request['author_name'] ?? null;
            $categories = $request['categories'] ?? null;
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

                    $statement = $this->pdo->prepare($query);
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

    public function show($id)
    {
        // show specific article details according to article id
    }

    public function edit()
    {
        $id = $_GET['id'];
        // show edit page of specific article according to article id
        $article = new Article();

        $data = [];
        // $data['article'] = $this->getArticleById($id);
        $data['article'] = $article->find($id);

        return ResponseHandler::renderView('articles/edit', $data);
    }

    public function update($id, $request)
    {
        // update the article according to id
    }

    public function destroy($id, $request)
    {
        // update the article according to id
    }

    // public function getArticleById($id)
    // {
    //     try {
    //         // $statement = $pdo->query("SELECT * FROM articles ORDER BY id DESC");
    //         $query = "SELECT * FROM articles WHERE id = {$id} LIMIT 1";
    //         $statement = $this->pdo->query($query);

    //         $article = $statement->fetch(PDO::FETCH_OBJ);

    //         if (!$article) {
    //             throw new \Exception('Data not found');
    //         }

    //         return $article;
    //     } catch (PDOException $e) {
    //         echo "Query failed: " . $e->getMessage();
    //         die();
    //     }
    // }
}
