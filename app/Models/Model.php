<?php

namespace App\Models;
namespace App\Controllers;

Use App\Database;

class Model{
    public function __construct()
    {
        $db = new Database();
        $this->pdo = $db;

    }

    public function get_songs($sql) {
        $row = $this->pdo->prepare($sql);
        $row->execute([]);
        foreach ($row as $value) {

            $songs = $value['songs'];

            echo "<p class='album'>" . $songs ."</p>" ;
        }
    }
    public function get_members($sql)
    {

        $row = $this->pdo->prepare($sql);
        $row->execute();
        foreach ($row as $item) {
            $name = $item['name'];
            $instrument = $item['instruments'];

            echo "<h4>" . $name . ", " . $instrument . "</h4>";

        }
    }
    public function get_comments($sql = "SELECT * FROM comments ORDER BY `date` DESC "){

        $row = $this->pdo->prepare($sql);
        $row->execute();
        foreach ($row as $item) {
            $fname = $item['fname'];
            $comment = $item['comment'];
            $date = $item['date'];

            echo
                "<h6 id='date'>" . $date . "<h6>" .
                "<p class='commentname'>" . $fname . ": " . "</p>" . "<p class='comments'>". $comment . "</p>"  . "<br>";

        }
    }

}
$model = new Model;
