<?php
namespace App\Controllers;
Use App\Database;

class Controllers{

    /**
     * @var Database
     */

    private $db;
    public function __construct(Database $db)
    {
      $this->db = $db;
    }
    function insert_comment(){
        if(!empty($_POST['comment']) && !empty($_POST['fname']) && isset($_POST['send'])){
            $sql = "INSERT INTO `comments` (`fname`, `comment`) VALUES(:namn, :comment)";
            $stm = $this->db->prepare($sql);
            $stm ->execute(['namn' =>$_POST['fname'], 'comment' => $_POST['comment']]);
        }
    }

    function delete_comments(){
        if(isset($_POST['delete'])){
            $sql = "DELETE FROM `comments` WHERE id = :id";
            $delete_stm = $this->db->prepare($sql);
            $delete_stm->execute(['id' => $_POST['delete']]);
            return $delete_stm;
        }
    }

    function delete_concerts(){
        if(isset($_POST['delete_concerts'])){
            $sql = "DELETE FROM `concert` WHERE id = :id";
            $delete_stm = $this->db->prepare($sql);
            $delete_stm->execute(['id' => $_POST['delete_concerts']]);
            return $delete_stm;
        }
    }

    function add_concert(){
        if(!empty($_POST['city']) && !empty($_POST['date']) && isset($_POST['add'])){
            $sql = "INSERT INTO `concert` (`city`, `date`) VALUES(:city, :dat)";
            $stm = $this->db->prepare($sql);
            $stm ->execute(['city' =>$_POST['city'], 'dat' => $_POST['date']]);
        }
    }

    function update_concert()
    {
        if (isset($_POST['update'])) {
            $fields = ['city', 'date'];
            foreach ($fields as $field) {

                if (isset($_POST[$field]) && strlen($_POST[$field]) > 0) {
                    $sql = ("UPDATE `concert` SET `{$field}` = :{$field} WHERE `id`= :id");
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
}