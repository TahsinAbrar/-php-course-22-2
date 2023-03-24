<?php

require_once __DIR__ . './../vendor/autoload.php';
require_once __DIR__ . './../routes/web.php';

session_start();

$dotenv = Dotenv\Dotenv::createImmutable(__DIR__ . './../');
$dotenv->load();

$dbConfig = include_once __DIR__ . './../config/database.php';

\Autobots\Blog\Library\Database::loadConfig($dbConfig);

// Control everything from here.....
$parseUrl = parse_url($_SERVER['REQUEST_URI']);

routeToController($parseUrl['path']);
