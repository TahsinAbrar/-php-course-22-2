<?php

namespace Autobots\Blog\Library;

use PDO;
use PDOException;

class Database2
{
    private array $config = [];
    private $instance;
    public static $counter = 0;

    public function __construct()
    {
        //
    }

    public static function getCounter()
    {
        return self::$counter;
    }
    public function connect()
    {
        $this->loadConfig([
            'host' => "127.0.0.1",
            'username' => "root",
            'password' => "",
            'database' => "pondit_blog",
            'charset' => "utf8mb4",
        ]);

        return $this->getInstance();
    }

    public function getInstance()
    {
        if (empty($this->instance)) {

            self::$counter++;
            $host = $this->config['host'];
            $username = $this->config['username'];
            $password = $this->config['password'];
            $db = $this->config['database'];
            $charset = $this->config['charset'];

            // dsn = data source name
            $dsn = "mysql:host={$host};dbname={$db};charset={$charset}";

            try {
                $this->instance = new PDO($dsn, $username, $password);

                // set the PDO error mode to exception
                $this->instance->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
            } catch (PDOException $e) {
                $message = "Connection failed: " . $e->getMessage();
                throw new \Exception($message);
            }
        }

        return $this->instance;
    }

    public function loadConfig(array $config)
    {
        $this->config = [
            'host' => $config['host'],
            'username' => $config['username'],
            'password' => $config['password'],
            'database' => $config['database'],
            'charset' => "utf8mb4",
        ];
    }
}
