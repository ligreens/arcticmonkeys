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

        if (!empty($_POST['user']) && !empty($_POST['password']) && isset($_POST['login'])) {
            $user = $_POST['user'];
            $password = $_POST['password'];
            $sql = "SELECT  id, `user`, password, salt FROM admin WHERE `user` = :user";
            $row = $this->db->prepare($sql);
            $row->execute(['user' => $user]);
            $rows = $row->fetchAll(\PDO::FETCH_ASSOC);
            if (count($rows) > 0) {
                $crypt_password = crypt($password, $rows[0]['salt']);
                if ($crypt_password == $rows[0]['password']) {
                    $_SESSION['user_id'] = $rows[0]['user'];
                    $_SESSION['logged_in'] = $_POST['user'];

                }
            }

        }

    }
}