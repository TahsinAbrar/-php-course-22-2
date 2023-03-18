<?php

namespace Autobots\Blog\Controllers;

use Autobots\Blog\Library\ResponseHandler;
use Autobots\Blog\Models\Article;
use Autobots\Blog\Models\Category;

class CategoriesController
{
    // show list of categories
    public function index()
    {
        try {
            $categories = new Category();

            $data = [];
            $data['categories'] = $categories->list();

            $viewPath = 'categories' . DIRECTORY_SEPARATOR .'manage'; // categories/manage

            return ResponseHandler::renderView($viewPath, $data);
        } catch (\Exception $e) {
            echo "Query failed: " . $e->getMessage();
            die();
        }
    }

    // show create page of article
    public function create()
    {
        session_start();
        
        $data = [];
        $data['errors'] = $_SESSION['errors'] ?? [];
        $data['old'] = $_SESSION['old'] ?? [];
        $data['categories'] = (new Category())->list();

        session_destroy();

        return ResponseHandler::renderView('categories/create', $data);
    }

    public function store()
    {
        $request = $_POST;

        try {
            // validation comes first..!
            $name = $request['name'] ?? null;
            $slug = str_replace(" ", "-", $name) . "-" . rand(1000, 9999);
            $uploadedImage = $_FILES['image_path'] ?? null;
            $imagePath = null;

            $errors = [];

            if (empty($name)) {
                $errors['name'] = 'Category name is required';
            }

            if (empty($errors)) {

                // image uploading part
                if ($uploadedImage && !empty($uploadedImage['tmp_name'])) {
                    if (!is_dir('images')) {
                        mkdir('images');
                    }

                    if (!is_dir('images/categories')) {
                        mkdir('images/categories');
                    }

                    $imagePath = 'images/categories/' . uniqid() . '_' . str_replace(" ", "_", $uploadedImage['name']);
                    move_uploaded_file($uploadedImage['tmp_name'], $imagePath);
                }

                try {
                    $categoryObj = new Category();
                    $categoryObj->save(
                        name: $name,
                        slug: $slug,
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
                // Starting session
                session_start();

                // Storing session data
                $_SESSION['errors'] = $errors;
                $_SESSION['old'] = $request;

                header('Location: /categories/create');
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
