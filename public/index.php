<?php
use App\Controllers\Controller;
use App\Database;
use App\Models\Model;

$baseDir = __DIR__ . '/..';

require $baseDir . '/app/database.php';
require $baseDir . '/app/Models/model.php';
require $baseDir . '/app/Controllers/Controllers.php';
require $baseDir . '/app/Controllers/admin.php';
require $baseDir . '/app/Controllers/login.php';


// Ladda in Composers autoload-fil
require '../vendor/autoload.php';

// Ladda konfigurationsdata
$config = require $baseDir . '/config/config.php';

$db = new Database($config['user'], $config['password'], $config['host'], $config['dbname'], $config['options']);

// Normalisera url-sökvägar
$path = function ($uri) {
    $uri = ($uri == '/') ? $uri : rtrim($uri, '/');
    $uri = explode('?', $uri);
    $uri = array_shift($uri);
    return $uri;
};

// Routing
$controller = new Controller($baseDir);
switch ($path($_SERVER['REQUEST_URI'])) {
    case '/':
        $model = new Model($db);
        $comments = $model->get_comments();
        $member = $model->get_member_by_name('');
        //$albums = $model->get_songs('');

        $comment = new \App\Controllers\Controllers($db);
        $comment->insert_comment();

        require $baseDir . '/views/index.php';
        break;
    case '/concert':
        $model = new Model($db);
        $concert = $model->get_concerts();

        require $baseDir . '/views/concert.php';
        break;

    case '/admin':
        $admin = new \App\Controllers\Admin($db);
        $admin->add_admin();
        $login = new \App\Controllers\Login($db);
        //  $login->login();

        require $baseDir . '/views/admin.login.php';
        break;

    case '/albums':
        $model = new Model($db);
        $albums = $model->get_songs('');
        $get_albums = new \App\Controllers\Controllers($db);
        $get_albums->get_album('');
        require $baseDir . '/views/albums.php';
        break;

    case '/edit':
        $model = new Model($db);
        $comments = $model->get_comments();
        $controller = new \App\Controllers\Controllers($db);
        $controller->delete_comments();
        $controller->add_concert();
        $controller->update_concert();
        $concert = $model->get_concerts();
        $delete = $controller->delete_concerts();
        $nologin = new App\Controllers\Controllers($db);
        $login = new \App\Controllers\Login($db);
        $login->login();
        $nologin->failed_to_login();
        $nologin->logout();
        require $baseDir . '/views/edit.php';
        break;

    default:
        header('HTTP/1.0 404 Not Found');
        echo 'Page not found';
        break;
}
