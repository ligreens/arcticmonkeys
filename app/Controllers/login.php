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
        session_start();
        if ($_SERVER['REQUEST_METHOD'] == 'POST') {
            $user = $_POST['user'];
            $password = $_POST['password'];

            $sql = ("SELECT * FROM admin WHERE user = :name");
            $stm = $this->db->prepare($sql);
            $stm->execute(['name' => $user]);
            $stmt = $stm->fetchAll(\PDO::FETCH_ASSOC);
            if ($stm->rowCount() > 0) {
                $main = array('data' => $stmt);
                $crypt_password = crypt($password, $stmt[0]['salt']);
            }
            if ($crypt_password = crypt($password, $stmt[0]['salt'])) {
                $_SESSION['userid'] = $stmt[0]['id'];
            } else {
                echo 'noope';
            }
        }
    }

}