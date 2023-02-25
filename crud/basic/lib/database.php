<?php

$host = "127.0.0.1";
$username = "root";
$password = "";
$db = "pondit_blog";
$charset = "utf8mb4";

// dsn = data source name
$dsn = "mysql:host={$host};dbname={$db};charset={$charset}";

try {
  $pdo = new PDO($dsn, $username, $password);
  // set the PDO error mode to exception
  $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
  // echo "Connected successfully";

} catch (PDOException $e) {
  echo "Connection failed: " . $e->getMessage();
  die();
}
