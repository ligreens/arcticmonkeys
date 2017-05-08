<?php
namespace App\Controllers;
Use App\Database;

class Login
{
    /**
     * @var Database
     */

    private $db;

    public function __construct(Database $db)
    {
        $this->db = $db;
    }

    function login()
    {

            


    }
}