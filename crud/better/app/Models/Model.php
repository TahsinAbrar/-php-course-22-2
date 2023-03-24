<?php

namespace Autobots\Blog\Models;

use Autobots\Blog\Library\Database;
use PDO;

class Model
{
    protected PDO $pdo;

    public function __construct()
    {
        $this->pdo = Database::getInstance();
    }
}
