<?php

require_once __DIR__ . './../vendor/autoload.php';

use Autobots\Blog\Controllers\ArticlesController;

$articlesObj = new ArticlesController();
$articles = $articlesObj->getArticles();

include_once __DIR__ . './../views/articles/manage.view.php';
