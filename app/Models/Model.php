<?php

namespace App\Models;

Use App\Database;

class Model{

    /**
     * @var Database
     */
    private $db;

    public function __construct(Database $db)
    {
        $this->db = $db;
    }

    public function get_songs_member($table, $column, $value){
        $sql = "SELECT * FROM " . $table . " WHERE " . $column . " = :value";
        $stm = $this->db->prepare($sql);
        $stm->execute([':value' => $value]);
        return $stm->fetchAll();

    }

/*    public function get_member_by_name($name) {
        $sql = "SELECT * FROM members where `name` = :name ";
        $stm = $this->db->prepare($sql);
        $stm->execute([':name' => $name]);
        return $stm->fetchAll();

    }*/

    public function count($table ){
        $sql = $sql = "SELECT COUNT(*) AS total FROM  " . $table ;
        $stm = $this->db->prepare($sql);
        $stm->execute();
        return $stm->fetchAll();
    }

    public function get_concerts_comments($table, $column = "date", $order_by ="DESC"){
        $sql = "SELECT * FROM " . $table . " ORDER BY `$column` $order_by";
        $stm = $this->db->prepare($sql);
        $stm->execute();
        return $stm->fetchAll();
    }

}