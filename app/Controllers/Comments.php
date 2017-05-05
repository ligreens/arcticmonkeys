<?php
namespace App\Controllers;
Use App\Database;

class Comments{

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

    function delete_comments($id){
        if(isset($_POST['delete'])){
            $sql = "DELETE FROM `comments` WHERE id = $id";
            $stm = $this->db->prepare($sql);
            $stm->execute(['id' => $id{$_POST['delete']}]);
        }
    }
}