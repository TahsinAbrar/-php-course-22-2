<?php

// require_once __DIR__ . './../vendor/autoload.php';
// $dotenv = Dotenv\Dotenv::createImmutable(__DIR__ . './../');
// $dotenv->load();

// $dbConfig = include_once __DIR__ . './../config/database.php';
// var_dump($dbConfig);die;

use Autobots\Blog\Controllers\ArticlesController;
// use Autobots\Blog\Library\Database;

// Database::loadConfig($dbConfig);

$articlesObj = new ArticlesController();
$articles = $articlesObj->index();

include_once __DIR__ . './../views/articles/manage.view.php';
