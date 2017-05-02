<?php
namespace App;
Use PDO;
class Database extends  PDO {

private $db;
public function __construct($user = '', $password = '', $host = '', $dbname = '', $options = []){

parent:: __construct("mysql:host={$host};dbname={$dbname};charset=utf8", $user, $password, $options);
}

public function getDb()
{
if ($this->db instanceof PDO) {
return $this->db;
}

}
}