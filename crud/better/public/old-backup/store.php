<?php


require_once __DIR__ . './../vendor/autoload.php';

use Autobots\Blog\Controllers\ArticlesController;

// dd($_POST);
// var_dump($_SERVER);


if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $articleObj = new ArticlesController();
    $articleObj->store($_POST);
}

