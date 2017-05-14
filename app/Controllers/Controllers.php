<?php

namespace App\Controllers;

Use App\Database;

class Controllers
{


    /**
     * @var Database
     */

    private $db;

    public function __construct(Database $db)
    {
        $this->db = $db;
    }

    function insert_comment($table)
    {
        if (!empty($_POST['comment']) && !empty($_POST['fname']) && isset($_POST['send'])) {
            $sql = "INSERT INTO " . $table . " (`fname`, `comment`) VALUES(:namn, :comment)";
            $stm = $this->db->prepare($sql);
            $stm->execute(['namn' => $_POST['fname'], 'comment' => $_POST['comment']]);
        }
    }

    function delete($table)
    {
        if (isset($_POST['delete'])) {
            $sql = "DELETE FROM " . $table . " WHERE id = :id";
            $delete_stm = $this->db->prepare($sql);
            $delete_stm->execute(['id' => $_POST['delete']]);
            return $delete_stm;
        }
    }

    function add_concert()
    {
        session_start();
        if (!empty($_POST['city']) && !empty($_POST['date']) && isset($_POST['add'])) {
            $sql = "INSERT INTO `concert` (`city`, `date`, `user_id`) VALUES(:city, :date, :user)";
            $stm = $this->db->prepare($sql);
            $stm->execute(['city' => $_POST['city'], 'date' => $_POST['date'], 'user' => $_SESSION['user_id']]);
        }
    }

    function update_concert($table)
    {
        if (isset($_POST['update'])) {
            $fields = ['city', 'date'];
            foreach ($fields as $field) {

                if (isset($_POST[$field]) && strlen($_POST[$field]) > 0) {
                    $sql = ("UPDATE " . $table . " SET `{$field}` = :{$field} WHERE `id`= :id");
                    $stm = $this->db->prepare($sql);
                    $stm->execute(["{$field}" => $_POST[$field], 'id' => $_POST['update']]);
                }

            }
        }
    }
    function failed_to_login()
    {
        if (!isset($_SESSION['logged_in'])) {
            header("Location: /admin");
            exit;
        }
    }

    function logout()
    {
        if (isset($_POST['logout'])) {
            session_destroy();
            header('Refresh: 1admin.login.php');
        }
    }

}