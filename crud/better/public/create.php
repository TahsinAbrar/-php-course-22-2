<?php

session_start();
// require_once __DIR__ . './lib/helpers.php';

$errors = $_SESSION['errors'] ?? [];

// Destroying session
session_destroy();

include_once __DIR__ . './../views/articles/create.view.php';