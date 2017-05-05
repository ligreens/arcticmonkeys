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

    public function get_songs($albums){
        $sql = "SELECT `songs` FROM songs WHERE albums = :albums";
        $stm = $this->db->prepare($sql);
        $stm->execute([':albums' => $albums]);
        return $stm->fetchAll();

    }

    public function get_member_by_name($name) {
        $sql = "SELECT `name` , `instruments` FROM members where `name` = :name ";
        $stm = $this->db->prepare($sql);
        $stm->execute([':name' => $name]);
        return $stm->fetchAll();

    }

    public function get_comments($column = "date", $order_by = "DESC"){
        $sql = $sql = "SELECT * FROM comments ORDER BY `$column` $order_by";
        $stm = $this->db->prepare($sql);
        $stm->execute();
        return $stm->fetchAll();
    }

}