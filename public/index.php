<?php
use App\Controllers\Controller;
use App\Database;

use App\Models\CommentsModel;
use App\Models\ConcertsModel;
use App\Models\MemberModel;
use App\Models\SongsModel;

$baseDir = __DIR__ . '/..';

require $baseDir . '/app/database.php';
require $baseDir . '/app/Models/model.php';
require $baseDir . '/app/Models/MemberModel.php';
require $baseDir . '/app/Models/CommentsModel.php';
require $baseDir . '/app/Models/SongsModel.php';
require $baseDir . '/app/Models/ConcertsModel.php';

// Ladda in Composers autoload-fil
require '../vendor/autoload.php';

// Ladda konfigurationsdata
$config = require $baseDir . '/config/config.php';

$dsn = "mysql:host=" . $config['host'] . ";dbname=" . $config['dbname'] . ";charset=" . $config['charset'];
$pdo = new PDO($dsn, $config['user'], $config['password'], $config['options']);
$db = new Database($pdo);

$member = new MemberModel($db);
$comments = new CommentsModel($db);
$songs = new SongsModel($db);
$concerts = new ConcertsModel($db);

// Normalisera url-sökvägar
$path = function ($uri) {
    $uri = ($uri == '/') ? $uri : rtrim($uri, '/');
    $uri = explode('?', $uri);
    $uri = array_shift($uri);
    return $uri;
};

// Routing
//$controller = new Controller($baseDir);

switch ($path($_SERVER['REQUEST_URI'])) {
    case '/':
        $name = $member->getByValue('Alex Turner');
        $name = $member->getByValue('Matthew Helders');
        $name = $member->getByValue('Jamie Cook');
        $name = $member->getByValue("Nick O'Malley");
        $comment = $comments->getAll();
        require $baseDir . '/views/index.php';
        break;
    case'/add':
        $newComment = $comments->create([
            'name' => $_POST['name'],
            'comment' => $_POST['comment'],
        ]);
        header('Location: /?id=' . $newComment);
        break;

    case '/delete':
        $delete = $comments->delete($_GET['id']);
        header('Location: /?id=' . $delete);
        break;

    case '/albums':
        $name = $songs->getByValue('AM');
        $name = $songs->getByValue('Suck It and See');
        $name = $songs->getByValue('Humbug');
        $name = $songs->getByValue('Favourite worst nightmare');
        $name = $songs->getByValue('Whatever People Say I Am, That\'s What I\'m Not');
        require $baseDir . '/views/albums.php';
        break;


    case '/concert':
        $concert = $concerts->getAll();
        require $baseDir . '/views/concert.php';
        break;

    case '/update.concert':
        $concertId = $concerts->getById($_GET['id']);
        require $baseDir . '/views/update.concert.php';
        break;

    case '/update':
        $update = $concerts->update($_POST['id'], [
            'city' => $_POST['city'],
            'date' => $_POST['date'],
        ]);
        header('Location: concert/?id=' . $_POST['id']);
        break;


    default:
        header('HTTP/1.0 404 Not Found');
        echo 'Page not found';
        break;
}
