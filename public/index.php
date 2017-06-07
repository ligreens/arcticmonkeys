<?php
use App\Controllers\Controller;
use App\Database;
use App\Models\CityModel;
use App\Models\CommentsModel;
use App\Models\ConcertsModel;
use App\Models\SinglesModel;
use App\Models\AlbumsModel;


$baseDir = __DIR__ . '/..';

require $baseDir . '/app/database.php';
require $baseDir . '/app/Models/model.php';
require $baseDir . '/app/Models/CommentsModel.php';
require $baseDir . '/app/Models/AlbumsModel.php';
require $baseDir . '/app/Models/ConcertsModel.php';
require $baseDir . '/app/Models/SinglesModel.php';
require $baseDir . '/app/Models/CityModel.php';

// Ladda in Composers autoload-fil
require '../vendor/autoload.php';

// Ladda konfigurationsdata
$config = require $baseDir . '/config/config.php';

$dsn = "mysql:host=" . $config['host'] . ";dbname=" . $config['dbname'] . ";charset=" . $config['charset'];
$pdo = new PDO($dsn, $config['user'], $config['password'], $config['options']);
$db = new Database($pdo);

$comments = new CommentsModel($db);
$songs = new AlbumsModel($db);
$singles = new SinglesModel($db);
$concerts = new ConcertsModel($db);
$city = new CityModel($db);

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

    case '/albums':
        $album = $songs->getAll();
        $single = $singles->getAll();
        require $baseDir . '/views/albums.php';
        break;

    case '/concert':
        $concertData = [];
        $concert = $concerts->getAll();
        foreach ($concert as $item) {
            $concertData[] = [
                'concert' => $item,
                'city' => $city->getById($item['city_id'])
            ];
        }
        require $baseDir . '/views/concert.php';
        break;

    case'/add.concert':
        $cities = $city->getAll();
        require $baseDir . '/views/add.concert.php';
        break;
    case'/create':
        $newConcert = $concerts->create([
            'city_id' => $_POST['cities'],
            'date' => $_POST['date'],
        ]);
        header('Location: /concert/?id=' . $newConcert);
        break;

    case '/delete':
        $delete = $concerts->delete($_GET['id']);
        header('Location: concert/?id=' . $delete);
        break;

    case '/update.concert':
        $cities = $city->getAll();
        $concertId = $concerts->getById($_GET['id']);
        require $baseDir . '/views/update.concert.php';
        break;

    case '/update':
        $update = $concerts->update($_POST['id'], [
            'city_id' => $_POST['cities'],
            'date' => $_POST['date'],
        ]);
        header('Location: concert/?id=' . $_POST['id']);
        break;

    default:
        header('HTTP/1.0 404 Not Found');
        echo 'Page not found';
        break;
}
