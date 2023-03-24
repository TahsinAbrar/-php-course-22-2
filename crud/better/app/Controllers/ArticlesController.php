<?php

namespace Autobots\Blog\Controllers;

use Autobots\Blog\Library\ResponseHandler;
use Autobots\Blog\Models\Article;
use Autobots\Blog\Models\Category;

class ArticlesController
{
    // show list of articles
    public function index()
    {
        try {
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

    // show create page of article
    public function create()
    {
        $data = [];
        $data['errors'] = $_SESSION['errors'] ?? [];
        $data['old'] = $_SESSION['old'] ?? [];
        $data['categories'] = (new Category())->list();

        unset($_SESSION['errors']);
        unset($_SESSION['old']);
        // session_destroy();

        // if (!empty($data['old'])) {
        //     dd($data);
        // }

        return ResponseHandler::renderView('articles/create', $data);
    }

    public function store()
    {
        $request = $_POST;

        try {
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

                    $articleObj = new Article();
                    $articleObj->save(
                        title: $title,
                        description: $description,
                        slug: $slug,
                        categories: $categories,
                        authorName: $authorName,
                        imagePath: $imagePath
                    );

                    var_dump('the data has been inserted successfully!');
                    //   $articles = $statement->fetchAll(PDO::FETCH_OBJ);

                    header("Location: /");
                } catch (\PDOException $e) {
                    echo "insertion failed: " . $e->getMessage();
                    die();
                }
            } else {
                // Storing session data
                $_SESSION['errors'] = $errors;
                $_SESSION['old'] = $request;

                header('Location: /articles/create');
            }
        } catch (\Throwable $e) {
            //
        }
    }

    // show specific article details according to article id
    public function show($id)
    {
    }

    // show edit page of specific article according to article id
    public function edit()
    {
        $id = $_GET['id'];
        $article = new Article();

        $data = [];
        $data['article'] = $article->find($id);
        $data['categories'] = (new Category())->list();

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
}
