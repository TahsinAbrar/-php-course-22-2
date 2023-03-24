<?php

namespace Autobots\Blog\Library;

use PDO;
use PDOException;

class Database
{
    private static array $config = [];
    private static $instance;
    public static $counter = 0;

    protected function __construct()
    {
        //
    }

    public static function getInstance()
    {
        if (empty(self::$instance)) {

            self::$counter++;
            $host = self::$config['host'];
            $username = self::$config['username'];
            $password = self::$config['password'];
            $db = self::$config['database'];
            $charset = self::$config['charset'];

            // dsn = data source name
            $dsn = "mysql:host={$host};dbname={$db};charset={$charset}";

            try {
                self::$instance = new PDO($dsn, $username, $password);

                // set the PDO error mode to exception
                self::$instance->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
            } catch (PDOException $e) {
                $message = "Connection failed: " . $e->getMessage();
                throw new \Exception($message);
            }
        }

        return self::$instance;
    }

    public static function loadConfig(array $config)
    {
        self::$config = [
            'host' => $config['host'],
            'username' => $config['username'],
            'password' => $config['password'],
            'database' => $config['database'],
            'charset' => "utf8mb4",
        ];
    }
}
