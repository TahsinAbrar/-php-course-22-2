<?php

return [
    'host' => $_ENV['DB_HOST'] ?? "127.0.0.1",
    'username' => $_ENV['DB_USERNAME'] ?? "root",
    'password' => $_ENV['DB_PASSWORD'] ?? "dummy",
    'database' => $_ENV['DB_NAME'] ?? "my_db",
    'charset' => "utf8mb4",
];