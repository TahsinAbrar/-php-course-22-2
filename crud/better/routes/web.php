<?php

use Autobots\Blog\Controllers\ArticlesController;
use Autobots\Blog\Controllers\CategoriesController;

function routeToController($path) {
    $routes = [
        '/' => ['GET', ArticlesController::class, 'index'],
        '/articles' => ['GET', ArticlesController::class, 'index'],
        '/articles/create' => ['GET', ArticlesController::class, 'create'],
        '/articles/store' => ['POST', ArticlesController::class, 'store'],
        '/articles/edit' => ['GET', ArticlesController::class, 'edit'],
        '/categories' => ['GET', CategoriesController::class, 'index'],
        '/categories/create' => ['GET', CategoriesController::class, 'create'],
        '/categories/store' => ['POST', CategoriesController::class, 'store'],
        '/categories/edit' => ['GET', CategoriesController::class, 'edit'],

        // 'default' => 'manage-posts',
    ];

    if (isset($routes[$path])) {
        $method = $routes[$path][0];
        $controller = $routes[$path][1];
        $action = $routes[$path][2];
    
        return (new $controller)->{$action}();
        // var_dump($method, $controller, $action);exit;
    }

    echo "Page Not Found";
}

// var_dump($data['view_path']);

// if (isset($data['articles'])) {
//     $articles = $data['articles'];
// } elseif (isset($data['article'])) {
//     $article = $data['article'];
// }
// var_dump($data['articles']);exit;

// include_once __DIR__ . "./../views/{$data['view_path']}.view.php";

// exit;


// var_dump($url);exit;
// $routeFile = $routes[$url] ?? $routes['default'];


// $articlesObj = new ArticlesController();
// $articles = $articlesObj->index();

// include_once __DIR__ . "./../public/$routeFile.php";

// if ($url == '/create') {
//     // open the create page
//     // die('I am on create page');
//     include_once __DIR__ . './../public/create.php';
// } elseif ($url == '/edit') {
//     // open the edit page
//     include_once __DIR__ . './../public/edit.php';
// } else {
//     // open the manage-post page
//     include_once __DIR__ . './../public/manage-posts.php';
// }

// exit;
