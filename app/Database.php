<?php

namespace App;

Use PDO;

class Database extends PDO
{
    public function __construct($user, $password, $host, $dbname, $options = [])
    {
        parent:: __construct("mysql:host={$host};dbname={$dbname};charset=utf8", $user, $password, $options);
    }
}
