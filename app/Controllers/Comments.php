<?php
namespace App\Controllers;
Use App\Database;
class Comments{
    public function __construct()
    {
        $db = new Database();
        $this->pdo = $db;
    }
    function insert_comment(){
        if(!empty($_POST['comment']) && !empty($_POST['fname']) && isset($_POST['send'])){
            $sql = "INSERT INTO `comments` (`fname`, `comment`) VALUES(:namn, :comment)";
            $row = $this->pdo->prepare($sql);
            $row ->execute(['namn' =>$_POST['fname'], 'comment' => $_POST['comment']]);
        }
    }
}


$comments = new Comments;