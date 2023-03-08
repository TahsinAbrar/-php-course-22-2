<?php

require_once __DIR__ . './../vendor/autoload.php';

use Autobots\Blog\Controllers\ArticlesController;

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

include_once __DIR__ . './../views/articles/edit.view.php';