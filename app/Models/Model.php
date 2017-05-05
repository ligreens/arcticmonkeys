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

    public function get_songs($sql) {
        $row = $this->db->prepare($sql);
        $row->execute([]);
        foreach ($row as $value) {

            $songs = $value['songs'];

            echo "<p class='album'>" . $songs ."</p>" ;
        }
    }

    public function get_member_by_name($name) {
        $sql = "SELECT `name`  FROM members where `name` = :name ";
        $stm = $this->db->prepare($sql);
        $stm->execute([':name' => $name]);
        return $stm->fetch();

    }
    /*public function get_members($sql)
    {

        $row = $this->db->prepare($sql);
        $row->execute();
        foreach ($row as $item) {
            $name = $item['name'];
            $instrument = $item['instruments'];

            echo "<h4>" . $name . ", " . $instrument . "</h4>";

        }*/
    //}
    public function get_comments($column = "date", $order_by = "DESC"){
        $sql = $sql = "SELECT * FROM comments ORDER BY `$column` $order_by";
        $stm = $this->db->prepare($sql);
        $stm->execute();
        return $stm->fetchAll();
    }

}