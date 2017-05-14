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
$model = new Model($db);
switch ($path($_SERVER['REQUEST_URI'])) {
    case '/':
        $comments = $model->get_comments();
        $member = $model->get_member_by_name('');
        $count = $model->count_comments();
        $comment = new \App\Controllers\Controllers($db);
        $comment->insert('comments');
        require $baseDir . '/views/index.php';
        break;
    case '/concert':
        $concert = $model->get_concerts();
        require $baseDir . '/views/concert.php';
        break;
    case '/admin':
        $admin = new \App\Controllers\Admin($db);
        $admin->add_admin();
        $login = new \App\Controllers\Login($db);
        require $baseDir . '/views/admin.login.php';
        break;
    case '/albums':
        $albums = $model->get_songs('');
        $get_albums = new \App\Controllers\Controllers($db);
        $get_albums->get_album('');
        require $baseDir . '/views/albums.php';
        break;
    case '/edit':
        $comments = $model->get_comments();
        $controller = new \App\Controllers\Controllers($db);
        $controller->delete_comments();
        $controller->add_concert();
        $controller->update_concert();
        $concert = $model->get_concerts();
        $delete = $controller->delete_concerts();
        $controller->insert('comments');
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
