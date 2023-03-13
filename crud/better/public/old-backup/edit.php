<?php

// require_once __DIR__ . './../vendor/autoload.php';
// $dotenv = Dotenv\Dotenv::createImmutable(__DIR__ . './../');
// $dotenv->load();

// $dbConfig = include_once __DIR__ . './../config/database.php';

use Autobots\Blog\Controllers\ArticlesController;
// use Autobots\Blog\Library\Database;

// Database::loadConfig($dbConfig);

if (empty($_GET['id'])) {
    throw new \Exception('Invalid request');
}

$id = $_GET['id'];

session_start();

// dd($_GET['id']);

$errors = $_SESSION['errors'] ?? [];

// Destroying session
session_destroy();

$articlesObj = new ArticlesController();
$article = $articlesObj->getArticleById($id);

// var_dump($id);exit;

include_once __DIR__ . './../views/articles/edit.view.php';