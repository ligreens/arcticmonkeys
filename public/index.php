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
        $comments = $model->get_comments('comments');
        $member = $model->get_songs_member('members', 'name','');
        $count = $model->count('comments');
        $comment = new \App\Controllers\Controllers($db);
        $comment->insert_comment('comments');
        require $baseDir . '/views/index.php';
        break;
    case '/concert':
        $concert = $model->get_all('concert');
        $count = $model->count('concert');
        require $baseDir . '/views/concert.php';
        break;
    case '/admin':
        $admin = new \App\Controllers\Admin($db);
        $admin->add_admin('admin');
        $login = new \App\Controllers\Login($db);
        require $baseDir . '/views/admin.login.php';
        break;
    case '/albums':
        $albums = $model->get_songs_member('songs', 'albums', '');
        $get_albums = new \App\Controllers\Controllers($db);
        require $baseDir . '/views/albums.php';
        break;
    case '/edit':
        $comments = $model->get_comments('comments');
        $controller = new \App\Controllers\Controllers($db);
        $controller->delete('comments');
        $controller->add_concert('concert');
        $controller->update_concert('concert');
        $concert = $model->get_all('concert');
        $delete = $controller->delete('concert');
        $controller->insert_comment('comments');
        $nologin = new App\Controllers\Controllers($db);
        $login = new \App\Controllers\Login($db);
        $login->login('admin');
        $nologin->failed_to_login();
        $nologin->logout();
        require $baseDir . '/views/edit.php';
        break;
    default:
        header('HTTP/1.0 404 Not Found');
        echo 'Page not found';
        break;
}
