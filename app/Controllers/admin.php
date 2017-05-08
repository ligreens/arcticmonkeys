<?php

namespace App\Controllers;

Use App\Database;

function mt_rand_str($l, $c = 'abcdefghiJKkLmnopQRStuVwxyz1234567890')
{
    for ($s = '', $cl = strlen($c) - 1, $i = 0; $i < $l; $s .= $c[mt_rand(0, $cl)], ++$i) {
    }
    return $s;
}

class Admin
{
    /**
     * @var Database
     */
    private $db;

    public function __construct(Database $db)
    {
        $this->db = $db;
    }


    function add_admin()
    {
        if (isset($_POST['create'])) {
            $sql = "INSERT INTO `admin` (`user`, `password`, `salt`) VALUES(:admin, :password, :salt)";
            $salt = mt_rand_str(31);
            $stm = $this->db->prepare($sql);
            $stm->execute(['admin' => $_POST['admin'], 'password' => crypt($_POST['password'], $salt), 'salt' => $salt]);
        }
    }


}