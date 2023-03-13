<?php

use Autobots\Blog\Controllers\ArticlesController;

function routeToController($path) {
    $routes = [
        // '/' => 'manage-posts',
        // '/create' => 'create',
        // '/edit' => 'edit',
        // 'default' => 'manage-posts',
        '/' => ['GET', ArticlesController::class, 'index'],
        '/create' => ['GET', ArticlesController::class, 'create'],
        '/edit' => ['GET', ArticlesController::class, 'edit'],
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
